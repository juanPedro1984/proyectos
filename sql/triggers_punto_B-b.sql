             CREATE ASSERTION GR14_peso_max
           CHECK ( NOT EXISTS (SELECT SUM(p.peso) AS "Peso Pallet",
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
					 
					 
			-------------------------------------------------------------------------
			--funcion que chequea que la suma de los pesos de los pallets pertenecientes a una fila no supere el peso
			--maximo de la misma
			-------------------------------------------------------------------------
			
			CREATE FUNCTION FN_GR14_check_maximo_fila_peso_pallet()
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
			
			--------------------------------------
			--trigger para tabla mov_entrada 
			--------------------------------------
			
		CREATE TRIGGER TR_GR14_MOV_ENTRADA_peso_maximo
		AFTER INSERT OR UPDATE 
		ON GR14_MOV_ENTRADA FOR EACH ROW
		EXECUTE PROCEDURE TRFN_GR14_peso_max();
			
		CREATE FUNCTION TRFN_GR14_peso_max()
			RETURNS trigger AS $body$
			BEGIN
			IF (TG_OP = 'INSERT') THEN
				IF (!FN_GR14_check_maximo_fila_peso_pallet()) THEN
					DELETE FROM GR14_mov_entrada WHERE id_movimiento = NEW.id_movimiento;
					RETURN NEW;
				END IF;
			END IF;
			IF TG_OP = 'UPDATE' THEN
				IF (!FN_GR14_check_maximo_fila_peso_pallet()) THEN --CHECK AGREGADO
					UPDATE GR14_mov_entrada SET id_movimiento  = OLD.id_movimiento,
												transporte     = OLD.transporte ,
												guia           = OLD.guia,
												cod_pallet     = OLD.cod_pallet,
												id_alquiler    = OLD.id_alquiler,
												nro_posicion   = OLD.nro_posicion,
												nro_estanteria = OLD.nro_estanteria,
												nro_fila       = OLD.nro_fila
					WHERE id_movimiento = NEW.id_movimiento;
					RETURN NEW;
				END IF;
			END IF;			
		END; $body$ LANGUAGE 'plpgsql';
		
		-----------------------------------------------------------------
		--trigger para tabla pallet (en el caso de update podria modificar el peso maximo de la fila a la que pertenece)
		--(en el caso de insert modificaria el peso de la fila solo si se produce un movimiento de entrada del pallet)
		-----------------------------------------------------------------
		
		CREATE TRIGGER TR_GR14_PALLET_peso_pallet
		AFTER UPDATE 
		ON GR14_pallet FOR EACH ROW 
		EXECUTE PROCEDURE TRFN_GR14_peso_pallet();
		
		CREATE FUNCTION TRFN_GR14_peso_pallet()
		RETURNS trigger AS $TRFN_GR14_peso_pallet$
		BEGIN
			IF (TG_OP = 'UPDATE') THEN
				IF(!FN_GR14_check_maximo_fila_peso_pallet()) THEN
					RAISE EXCEPTION 'el peso modificado supera el maximo de la fila';
					UPDATE GR14_pallet SET cod_pallet = OLD.cod_pallet,
											descripcion = OLD.descripcion,
											peso = OLD.peso
					WHERE cod_pallet = NEW.cod_pallet
					RETURN NEW;
				END IF;
			END IF;
		END; $TRFN_GR14_peso_pallet$ LANGUAGE 'plpgsql';
		
		------------------------------------------------------------------------
		--trigger para la tabla fila en caso de update (puede disminuir el peso_max de la fila quedando sobrecargada)
		--el caso de insert, se supone que la fila esta vacia-- luego el chequeo se hace en movimiento de entrada--
		------------------------------------------------------------------------
		CREATE TRIGGER TR_GR14_FILA_peso_fila
		AFTER UPDATE 
		ON GR14_fila FOR EACH ROW 
		EXECUTE PROCEDURE TRFN_GR14_peso_fila();
		
		
		CREATE FUNCTION FNTR_GR14_peso_fila()
		RETURNS trigger AS $FNTR_GR14_peso_fila$
		BEGIN
			IF(TG_OP = 'UPDATE') THEN
				IF(!FN_GR14_check_maximo_fila_peso_pallet()) THEN
					RAISE EXCEPTION 'el peso de la fila esta sobrecargado'
					UPDATE GR14_fila SET nro_estanteria = OLD.nro_estanteria,
										 nro_fila = OLD.nro_fila,
										 nombre_fila = OLD.nombre_fila,
										 peso_max_kg = OLD.peso_max_kg
					WHERE nro_estanteria = NEW.nro_estanteria AND nro_fila = NEW.nro_fila,
					RETURN NEW;
				END IF;
			END IF;
		END; $FNTR_GR14_peso_fila$ LANGUAGE 'plpgsql';
		
		-----------------------------------------------------------------------
		--trigger para la tabla mov_interno 
		-----------------------------------------------------------------------
		
		CREATE TRIGGER TR_GR14_MOV_INTERNO_mov_int_peso_max
		AFTER UPDATE OR INSERT
		ON GR14_mov_interno FOR EACH ROW 
		EXECUTE PROCEDURE TRFN_GR14_mov_int_peso_max();
		
		CREATE FUNCTION TRFN_GR14_mov_int_peso_max()
		RETURNS trigger AS $TRFN_GR14_peso_pallet$
		BEGIN
			IF (TG_OP = 'INSERT') THEN
				IF (!FN_GR14_check_maximo_fila_peso_pallet()) THEN
					RAISE EXCEPTION 'el peso modificado supera el maximo de la fila';
					DELETE FROM GR14_mov_interno WHERE id_movimiento = NEW.id_movimiento;
					RETURN NEW;
				END IF;
			END IF;
			IF (TG_OP = 'UPDATE') THEN
				IF(!FN_GR14_check_maximo_fila_peso_pallet()) THEN
					RAISE EXCEPTION 'el peso supera el maximo de la fila';
					UPDATE GR14_mov_interno SET id_movimiento = OLD.id_movimiento,
												mov_interno = OLD.mov_interno,
												mov_entrada = OLD.mov_entrada,
												razon = OLD.razon,
												nro_posicion = OLD.nro_posicion,
												nro_estanteria = OLD.nro_estanteria,
												nombre_fila = OLD.nombre_fila
					WHERE id_movimiento= NEW.id_movimiento,
					RETURN NEW;
				END IF;
			END IF;
		END; $TRFN_GR14_mov_int_peso_max$ LANGUAGE 'plpgsql';
		
		
		
		
									