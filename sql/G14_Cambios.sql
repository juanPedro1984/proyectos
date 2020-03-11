SET search_path TO tpesp;
---------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------ Inciso B -----------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------

-- a) La fecha de todos los alquileres deben ser consistentes, es decir la fecha a partir de la cual se inicia un alquiler debe ser menor o igual a la fecha de finalización del mismo.
		-- RIR DE TUPLA

		ALTER TABLE GR14_alquiler
		ADD CONSTRAINT GR14_fecha CHECK (fecha_desde <= fecha_hasta);
			-- INSERT INTO GR14_alquiler (id_alquiler, id_cliente, fecha_desde, fecha_hasta, importe_dia) VALUES (4, 20312271225, '2019-06-02', '2019-06-01', 300.00);

-- b) El peso de los pallets de una fila no debe superar al máximo de la fila.
		--RIR GENERAL
		
		-- Se crea el Assertion en SQL Estandard Declarativo
--             CREATE ASSERTION GR14_peso_max
--             CHECK ( NOT EXISTS (SELECT SUM(p.peso) AS "Peso Pallet",
--                                         me.nro_estanteria,
--                                         me.nro_fila
--                                     FROM GR14_pallet p
--                                     JOIN GR14_mov_entrada me
--                                         ON p.cod_pallet = me.cod_pallet
--                                     GROUP BY (me.nro_fila, me.nro_estanteria)
--                                     HAVING SUM(p.peso) > (SELECT f.peso_max_kg
--                                                           FROM GR14_fila f
--                                                           WHERE  me.nro_fila = f.nro_fila AND me.nro_estanteria = f.nro_estanteria)
--                                 )
--                     );

		-- Sea crea el Trigger correspondiente  al Assertion para PostgreSQL
		CREATE FUNCTION TRFN_GR14_peso_max()
		RETURNS trigger AS $body$
		BEGIN
			IF (TG_OP = 'INSERT') THEN
				IF (!FN_GR14_check_maximo_fila_peso_palet()) THEN
					DELETE FROM GR14_mov_entrada WHERE id_movimiento = NEW.id_movimiento;
					RETURN NEW;
				END IF;
			END IF;
		END; $body$ LANGUAGE 'plpgsql';
	-------------------------------------
		CREATE FUNCTION FN_GR14_check_maximo_fila_peso_palet()
		RETURNS boolean AS $body$
			DECLARE 
				chkExist boolean;
			BEGIN

				chkExist:= (NOT EXISTS (SELECT SUM(p.peso) AS "Peso Pallet",
											   me.nro_estanteria,
											   me.nro_fila
											FROM GR14_pallet p
											JOIN GR14_mov_entrada me
												ON p.cod_pallet = me.cod_pallet
											GROUP BY (me.nro_fila, me.nro_estanteria)
											HAVING SUM(p.peso) > (SELECT f.peso_max_kg
																  FROM GR14_fila f
																  WHERE  me.nro_fila = f.nro_fila AND me.nro_estanteria = f.nro_estanteria)
										)
							);
				
				RETURN chkExist;

			END; $body$ LANGUAGE 'plpgsql';
	-------------------------------------	
		CREATE TRIGGER TR_GR14_MOV_ENTRADA_peso_maximo
		  AFTER INSERT OR UPDATE
		  ON GR14_MOV_ENTRADA FOR EACH ROW 
		  EXECUTE PROCEDURE TRFN_GR14_peso_max();

-- c) El tipo de posición puede tomar los siguientes valores “general”, “vidrio”, “insecticidas”, “inflamable”.
		-- RIR DE ATRIBUTO

		-- Se crea el dominio para los valores correspondientes
		CREATE DOMAIN DO_GR14_TPO_POSICION
			AS varchar(40)
			CHECK (VALUE IN ('General', 'Vidrio', 'Insecticidas', 'Inflamable'));			
		-- Se cambia el tipo de datos de la columna correspondiente
		ALTER TABLE GR14_POSICION
			ALTER COLUMN tipo TYPE DO_GR14_TPO_POSICION;
			
			-- INSERT INTO GR14_posicion (nro_posicion, nro_estanteria, nro_fila, pos_global, tipo) VALUES (5, 4, 4, 4, 'Generales');
			
---------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------ Inciso C -----------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------

	-- Para una fecha determinada dar la lista de las posiciones libres; esto es número de estantería, número de fila y nro de posición.

	CREATE OR REPLACE FUNCTION FN_GR14_pos_libre(fecha DATE)
	RETURNS TABLE (estanteria INT, fila INT, posicion INT)
	AS $$
		BEGIN
			RETURN QUERY SELECT ap.nro_estanteria,
								ap.nro_fila,
								ap.nro_posicion
							FROM gr14_alquiler_posiciones ap;
							JOIN gr14_alquiler a
								ON a.id_alquiler = ap.id_alquiler
							WHERE ap.estado = false AND
								  fecha between a.fecha_desde AND a.fecha_hasta;

		END; $$ LANGUAGE plpgsql;


	-- Dar la lista de los clientes que en una cierta cantidad de días (configurable) se les debe avisar que se vence su alquiler.

	CREATE OR REPLACE FUNCTION FN_GR14_dias_de_aviso(dias_aviso INT)
	RETURNS TABLE (cliente INT)
	AS $$
		BEGIN
			RETURN QUERY SELECT a.id_cliente
							FROM gr14_alquiler a
							WHERE extract (day from (a.fecha_hasta - current_date)) < dias_aviso;
		END; $$ LANGUAGE plpgsql;

---------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------ Inciso D -----------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------

-- 1) Realizar una vista que para cada una de las posiciones indique su estado libre u ocupada, y para éste último caso se indique  la cantidad de días que  restan de alquiler . Indicar los datos completos de la posición, fila y estantería.

	-- Se crea indice de busqueda por columna estado de la tabla ALQUILER_POSICION
	-- CREATE INDEX IDX_GR14_ALQPOS_POS_LIBRE
		-- ON GR14_ALQUILER_POSICIONES (estado);
	
	-- Se crea la vista
    CREATE VIEW GR14_POS_DIAS_RESTA_ALQ AS
        SELECT p.*,
               a.fecha_desde,
               a.fecha_hasta,
               CASE ap.estado
                WHEN true THEN (a.fecha_hasta-a.fecha_desde)
                WHEN false THEN 0
               END AS "Dias restantes de alquiler"
			FROM gr14_posicion p
			JOIN gr14_alquiler_posiciones ap
				ON ap.nro_posicion = p.nro_posicion
			JOIN gr14_alquiler a
				ON a.id_alquiler = ap.id_alquiler;

--     SELECT *
-- 		FROM GR14_POS_DIAS_RESTA_ALQ;
		
-- 2) Realizar una vista que liste los 10 clientes que más dinero han invertido en el último año (tomar el momento en el que se ejecuta la consulta hacia atrás).

	-- Se crea indice de busqueda por id_cliente de la tabla Alquiler
	CREATE INDEX IDX_GR14_ID_CLIENTE
		ON GR14_ALQUILER (id_cliente);
    -- Se crea vista para buscar el importe que gasto cada cliente
    CREATE VIEW GR14_importe_gastado_cliente AS
        SELECT c.cuit_cuil,
               c.apellido,
               c.nombre,
               c.fecha_alta,
               current_date-c.fecha_alta AS "Fecha Actual - Fecha de Alta",
               SUM(a.importe_dia) AS imp_total
        FROM gr14_cliente c
        JOIN gr14_alquiler a
            ON c.cuit_cuil = a.id_cliente
        GROUP BY (c.cuit_cuil, c.fecha_alta);
-----------------------------------------------------------------------------------------------
    -- Se crea vista para seleccionar el importe maximo invertido y limitar la cantidad de resultados a 10 clientes
    CREATE VIEW GR14_importe_maximo_invertido AS
        SELECT i.cuit_cuil,
               MAX(i.imp_total) AS "Importe Maximo Invertido"
            FROM GR14_importe_gastado_cliente i
            WHERE i.fecha_alta <= (current_date - interval '1 year')
            GROUP BY (i.cuit_cuil, i.imp_total)
            ORDER BY (i.imp_total)
            LIMIT 10;

--     SET search_path TO tpesp;
--         SELECT *
--             FROM GR14_importe_maximo_invertido;

------------------------------------------------
-- Para la vista d.1)
INSERT INTO GR14_posicion (nro_posicion, nro_estanteria, nro_fila, pos_global, tipo, pos_libre) VALUES (6, 4, 4, 6, 'General');
INSERT INTO GR14_posicion (nro_posicion, nro_estanteria, nro_fila, pos_global, tipo, pos_libre) VALUES (7, 4, 4, 7, 'General');
    -----------------------------------------------------------------------------------------------
INSERT INTO GR14_alquiler_posiciones (id_alquiler, nro_posicion, nro_estanteria, nro_fila, estado) VALUES (4, 6, 4, 4, true);
INSERT INTO GR14_alquiler_posiciones (id_alquiler, nro_posicion, nro_estanteria, nro_fila, estado) VALUES (4, 7, 4, 4, true);
-- Para la vista d.2)
INSERT INTO GR14_cliente (cuit_cuil, apellido, nombre, fecha_alta) VALUES (20325852725, 'Sara', 'Connor', '2019-06-02');
-----------------------------------------------------------------------------------------------
INSERT INTO GR14_alquiler (id_alquiler, id_cliente, fecha_desde, fecha_hasta, importe_dia) VALUES (5, 20312271225, '2019-07-01', '2019-07-30', 200.00);
INSERT INTO GR14_alquiler (id_alquiler, id_cliente, fecha_desde, fecha_hasta, importe_dia) VALUES (7, 20312271215, '2019-07-01', '2019-07-30', 200.00);