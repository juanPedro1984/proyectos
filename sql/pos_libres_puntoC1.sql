	-- Para una fecha determinada dar la lista de las posiciones libres; 
	--esto es número de estantería, número de fila y nro de posición.

	--- funcion que retorna las posiciones que estan alquiladas pero el estado es false (esta desocupado)--
	
	CREATE OR REPLACE FUNCTION FN_GR14_pos_libre_alquilada(fecha DATE)
	RETURNS TABLE (estanteria INT, fila INT, posicion INT)
	AS $$
		BEGIN
			RETURN QUERY SELECT ap.nro_estanteria,
								ap.nro_fila,
								ap.nro_posicion
							FROM gr14_alquiler_posiciones ap
							JOIN gr14_alquiler a
								ON a.id_alquiler = ap.id_alquiler
							WHERE ap.estado = false AND
								  fecha between a.fecha_desde AND a.fecha_hasta;

		END; $$ LANGUAGE plpgsql;
	
	--funcion que retorna las posiciones que no estan alquiladas en una fecha determinada--
	
	CREATE OR REPLACE FUNCTION FN_GR14_pos_libre_no_alquilada(fecha DATE)
	RETURNS TABLE (estanteria INT, fila INT, posicion INT)
	AS $$
		BEGIN	
			RETURN QUERY SELECT p.nro_estanteria,
								p.nro_fila,
								p.nro_posicion
								FROM GR14_posicion p FULL JOIN GR14_alquiler_posiciones ap ON (p.nro_posicion = ap.nro_posicion AND p.nro_estanteria = ap.nro_estanteria AND p.nro_fila = ap.nro_fila)
								FULL JOIN GR14_alquiler a ON ap.id_alquiler = a.id_alquiler
								WHERE ap.id_alquiler IS NULL OR '2019-10-15' NOT BETWEEN a.fecha_desde AND a.fecha_hasta;
		END; $$ LANGUAGE plpgsql;
		
		
