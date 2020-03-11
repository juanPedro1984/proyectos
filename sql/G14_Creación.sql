CREATE SCHEMA tpesp;

ALTER SCHEMA tpesp OWNER TO postgres;

COMMENT ON SCHEMA tpesp IS 'Trabajo Especial';

SET search_path TO tpesp;

---------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------

-- Table: ALQUILER
CREATE TABLE G14_ALQUILER (
    id_alquiler int  NOT NULL,
    id_cliente int  NOT NULL,
    fecha_desde date  NOT NULL,
    fecha_hasta date  NULL,
    importe_dia decimal(10,2)  NOT NULL,
    CONSTRAINT PK_G14_ALQUILER PRIMARY KEY (id_alquiler)
);

-- Table: ALQUILER_POSICIONES
CREATE TABLE G14_ALQUILER_POSICIONES (
    id_alquiler int  NOT NULL,
    nro_posicion int  NOT NULL,
    nro_estanteria int  NOT NULL,
    nro_fila int  NOT NULL,
    estado boolean  NOT NULL,
    CONSTRAINT PK_G14_ALQUILER_POSICIONES PRIMARY KEY (id_alquiler,nro_posicion,nro_estanteria,nro_fila)
);

-- Table: CLIENTE
CREATE TABLE G14_CLIENTE (
    cuit_cuil int  NOT NULL,
    apellido varchar(60)  NOT NULL,
    nombre varchar(40)  NOT NULL,
    fecha_alta date  NOT NULL,
    CONSTRAINT PK_G14_CLIENTE PRIMARY KEY (cuit_cuil)
);

-- Table: ESTANTERIA
CREATE TABLE G14_ESTANTERIA (
    nro_estanteria int  NOT NULL,
    nombre_estanteria varchar(80)  NOT NULL,
    CONSTRAINT PK_G14_ESTANTERIA PRIMARY KEY (nro_estanteria)
);

-- Table: FILA
CREATE TABLE G14_FILA (
    nro_estanteria int  NOT NULL,
    nro_fila int  NOT NULL,
    nombre_fila varchar(80)  NOT NULL,
    peso_max_kg decimal(10,2)  NOT NULL,
    CONSTRAINT PK_G14_FILA PRIMARY KEY (nro_estanteria, nro_fila)
);

-- Table: MOVIMIENTO
CREATE TABLE G14_MOVIMIENTO (
    id_movimiento int  NOT NULL,
    fecha timestamp  NOT NULL,
    responsable varchar(80)  NOT NULL,
    tipo char(1)  NOT NULL,
    CONSTRAINT PK_G14_MOVIMIENTO PRIMARY KEY (id_movimiento)
);

-- Table: MOV_ENTRADA
CREATE TABLE G14_MOV_ENTRADA (
    id_movimiento int  NOT NULL,
    transporte varchar(80)  NOT NULL,
    guia varchar(80)  NOT NULL,
    cod_pallet varchar(20)  NOT NULL,
    id_alquiler int  NOT NULL,
    nro_posicion int  NOT NULL,
    nro_estanteria int  NOT NULL,
    nro_fila int  NOT NULL,
    CONSTRAINT PK_G14_MOV_ENTRADA PRIMARY KEY (id_movimiento)
);

-- Table: MOV_INTERNO
CREATE TABLE G14_MOV_INTERNO (
    id_movimiento int  NOT NULL,
    razon varchar(200)  NULL,
    nro_posicion int  NOT NULL,
    nro_estanteria int  NOT NULL,
    nro_fila int  NOT NULL,
    CONSTRAINT PK_G14_MOV_INTERNO PRIMARY KEY (id_movimiento)
);

-- Table: MOV_SALIDA
CREATE TABLE G14_MOV_SALIDA (
    id_movimiento int  NOT NULL,
    transporte varchar(80)  NOT NULL,
    guia varchar(80)  NOT NULL,
    CONSTRAINT PK_G14_MOV_SALIDA PRIMARY KEY (id_movimiento)
);

-- Table: PALLET
CREATE TABLE G14_PALLET (
    cod_pallet varchar(20)  NOT NULL,
    descripcion varchar(200)  NOT NULL,
    peso decimal(10,2)  NOT NULL,
    CONSTRAINT PK_G14_PALLET PRIMARY KEY (cod_pallet)
);

-- Table: POSICION
CREATE TABLE G14_POSICION (
    nro_posicion int  NOT NULL,
    nro_estanteria int  NOT NULL,
    nro_fila int  NOT NULL,
    tipo varchar(40)  NOT NULL,
    CONSTRAINT PK_G14_POSICION PRIMARY KEY (nro_posicion,nro_estanteria,nro_fila)
);

-- foreign keys
-- Reference: FK_ALQUILER_CLIENTE (table: ALQUILER)
ALTER TABLE G14_ALQUILER ADD CONSTRAINT FK_G14_ALQUILER_CLIENTE
    FOREIGN KEY (id_cliente)
    REFERENCES G14_CLIENTE (cuit_cuil);

-- Reference: FK_ALQUILER_POSICIONES_ALQUILER (table: ALQUILER_POSICIONES)
ALTER TABLE G14_ALQUILER_POSICIONES ADD CONSTRAINT FK_G14_ALQUILER_POSICIONES_ALQUILER
    FOREIGN KEY (id_alquiler)
    REFERENCES G14_ALQUILER (id_alquiler);

-- Reference: FK_ALQUILER_POSICIONES_POSICION (table: ALQUILER_POSICIONES)
ALTER TABLE G14_ALQUILER_POSICIONES ADD CONSTRAINT FK_G14_ALQUILER_POSICIONES_POSICION
    FOREIGN KEY (nro_posicion, nro_estanteria, nro_fila)
    REFERENCES G14_POSICION (nro_posicion, nro_estanteria, nro_fila);

-- Reference: FK_FILA_ESTANTERIA (table: FILA)
ALTER TABLE G14_FILA ADD CONSTRAINT FK_G14_FILA_ESTANTERIA
    FOREIGN KEY (nro_estanteria)
    REFERENCES G14_ESTANTERIA (nro_estanteria);

-- Reference: FK_MOV_ENTRADA_ALQUILER_POSICIONES (table: MOV_ENTRADA)
ALTER TABLE G14_MOV_ENTRADA ADD CONSTRAINT FK_G14_MOV_ENTRADA_ALQUILER_POSICIONES
    FOREIGN KEY (id_alquiler, nro_posicion, nro_estanteria, nro_fila)
    REFERENCES G14_ALQUILER_POSICIONES (id_alquiler, nro_posicion, nro_estanteria, nro_fila);

-- Reference: FK_MOV_ENTRADA_MOVIMIENTO (table: MOV_ENTRADA)
ALTER TABLE G14_MOV_ENTRADA ADD CONSTRAINT FK_G14_MOV_ENTRADA_MOVIMIENTO
    FOREIGN KEY (id_movimiento)
    REFERENCES G14_MOVIMIENTO (id_movimiento);

-- Reference: FK_MOV_ENTRADA_PALLET (table: MOV_ENTRADA)
ALTER TABLE G14_MOV_ENTRADA ADD CONSTRAINT FK_G14_MOV_ENTRADA_PALLET
    FOREIGN KEY (cod_pallet)
    REFERENCES G14_PALLET (cod_pallet);

-- Reference: FK_MOV_INTERNO_MOVIMIENTO (table: MOV_INTERNO)
ALTER TABLE G14_MOV_INTERNO ADD CONSTRAINT FK_G14_MOV_INTERNO_MOVIMIENTO
    FOREIGN KEY (id_movimiento)
    REFERENCES G14_MOVIMIENTO (id_movimiento);

-- Reference: FK_MOV_INTERNO_POSICION (table: MOV_INTERNO)
ALTER TABLE G14_MOV_INTERNO ADD CONSTRAINT FK_G14_MOV_INTERNO_POSICION
    FOREIGN KEY (nro_posicion, nro_estanteria, nro_fila)
    REFERENCES G14_POSICION (nro_posicion, nro_estanteria, nro_fila);

-- Reference: FK_MOV_SALIDA_MOVIMIENTO (table: MOV_SALIDA)
ALTER TABLE G14_MOV_SALIDA ADD CONSTRAINT FK_G14_MOV_SALIDA_MOVIMIENTO
    FOREIGN KEY (id_movimiento)
    REFERENCES G14_MOVIMIENTO (id_movimiento);

-- Reference: FK_POSICION_FILA (table: POSICION)
ALTER TABLE G14_POSICION ADD CONSTRAINT FK_G14_POSICION_FILA
    FOREIGN KEY (nro_estanteria, nro_fila)
    REFERENCES G14_FILA (nro_estanteria, nro_fila);
	
---------------------------------------------------------------------
	-- Se cambia el tipo de dato de una columna
ALTER TABLE G14_CLIENTE
	ALTER COLUMN cuit_cuil TYPE bigint;
---------------------------------------------------------------------
	-- Se cambia el tipo de dato de una columna
ALTER TABLE G14_ALQUILER
	ALTER COLUMN id_cliente TYPE bigint;
---------------------------------------------------------------------
	-- Se agrega nueva columna
ALTER TABLE G14_POSICION
	ADD COLUMN pos_global INTEGER NOT NULL;
---------------------------------------------------------------------  
	
---------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------ Inciso A -----------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------

-- “ el depósito maneja un número único de posición”

ALTER TABLE G14_POSICION
	ADD CONSTRAINT UQ_G14_POSICION_POS_GLOBAL
		UNIQUE(pos_global);

-- “se registran los movimientos de egreso de mercadería, que siempre deben hacer referencia a un movimiento de entrada 
--y los movimientos de cambios de posición internos de los pallets que pudieran llegar a haber, que también deben hacer referencia 
--a un movimiento de entrada o a otro movimiento de cambio”
	-- G14_MOV_SALID
ALTER TABLE G14_MOV_SALIDA
	ADD COLUMN mov_entrada INTEGER NOT NULL;
	
ALTER TABLE G14_MOV_SALIDA ADD CONSTRAINT FK_G14_MOV_SALIDA_MOV_ENTRADA
	FOREIGN KEY (mov_entrada)
	REFERENCES G14_MOV_ENTRADA(id_movimiento);
	-- G14_MOV_INTERNO
ALTER TABLE G14_MOV_INTERNO
	ADD COLUMN mov_entrada INTEGER NOT NULL;
	
ALTER TABLE G14_MOV_INTERNO
	ADD COLUMN mov_interno INTEGER NULL;	
	
ALTER TABLE G14_MOV_INTERNO ADD CONSTRAINT FK_G14_MOV_INTERNO_MOV_ENTRADA
	FOREIGN KEY (mov_entrada)
	REFERENCES G14_MOV_ENTRADA(id_movimiento);

ALTER TABLE G14_MOV_INTERNO ADD CONSTRAINT FK_G14_MOV_INTERNO_MOV_INTERNO
	FOREIGN KEY (mov_interno)
	REFERENCES G14_MOV_INTERNO (id_movimiento);
	
---------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------ Carga inicial de datos ---------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------		
--las fechas de tipo DATE se escriben en postgresql como YYYY-MM-DD--
---TABLA G14_CLIENTE--
INSERT INTO G14_cliente (cuit_cuil, apellido, nombre, fecha_alta) VALUES (20312271185, 'Etchegoyen', 'Juan Pedro', '10-10-2018');
INSERT INTO G14_cliente (cuit_cuil, apellido, nombre, fecha_alta) VALUES (20312271195, 'Fernandez',  'Lautaro',    '11-10-2018');
INSERT INTO G14_cliente (cuit_cuil, apellido, nombre, fecha_alta) VALUES (20312271205, 'Gonzalez',   'Roman',      '12-10-2018');
INSERT INTO G14_cliente (cuit_cuil, apellido, nombre, fecha_alta) VALUES (20312271215, 'Gomez',      'Matias',     '13-10-2018');
INSERT INTO G14_cliente (cuit_cuil, apellido, nombre, fecha_alta) VALUES (20312271225, 'Medina',     'Javier',     '14-10-2018');

---TABLA G14_ALQUILER---
INSERT INTO G14_alquiler (id_alquiler, id_cliente, fecha_desde, fecha_hasta, importe_dia) VALUES (0, 20312271185, '29-05-2019', '30-06-2019', 300.00);
INSERT INTO G14_alquiler (id_alquiler, id_cliente, fecha_desde, fecha_hasta, importe_dia) VALUES (1, 20312271195, '30-05-2019', '30-06-2019', 300.00);
INSERT INTO G14_alquiler (id_alquiler, id_cliente, fecha_desde, fecha_hasta, importe_dia) VALUES (2, 20312271205, '31-05-2019', '30-06-2019', 300.00);
INSERT INTO G14_alquiler (id_alquiler, id_cliente, fecha_desde, fecha_hasta, importe_dia) VALUES (3, 20312271215, '01-06-2019', '30-06-2019', 300.00);
INSERT INTO G14_alquiler (id_alquiler, id_cliente, fecha_desde, fecha_hasta, importe_dia) VALUES (4, 20312271225, '02-06-2019', '30-06-2019', 300.00);

---TABLA G14_ESTANTERIA---
INSERT INTO G14_estanteria (nro_estanteria, nombre_estanteria) VALUES (0, 'AAA');
INSERT INTO G14_estanteria (nro_estanteria, nombre_estanteria) VALUES (1, 'BBB');
INSERT INTO G14_estanteria (nro_estanteria, nombre_estanteria) VALUES (2, 'CCC');
INSERT INTO G14_estanteria (nro_estanteria, nombre_estanteria) VALUES (3, 'DDD');
INSERT INTO G14_estanteria (nro_estanteria, nombre_estanteria) VALUES (4, 'EEE');

---TABLA G14_FILA---
INSERT INTO G14_fila (nro_estanteria, nro_fila, nombre_fila, peso_max_kg) VALUES (0, 0, 'AAA', 100.00);
INSERT INTO G14_fila (nro_estanteria, nro_fila, nombre_fila, peso_max_kg) VALUES (1, 1, 'BBB', 100.00);
INSERT INTO G14_fila (nro_estanteria, nro_fila, nombre_fila, peso_max_kg) VALUES (2, 2, 'CCC', 100.00);
INSERT INTO G14_fila (nro_estanteria, nro_fila, nombre_fila, peso_max_kg) VALUES (3, 3, 'DDD', 100.00);
INSERT INTO G14_fila (nro_estanteria, nro_fila, nombre_fila, peso_max_kg) VALUES (4, 4, 'EEE', 100.00);

---TABLA G14_POSICION---
INSERT INTO G14_posicion (nro_posicion, nro_estanteria, nro_fila, pos_global, tipo) VALUES (0, 0, 0, 0, 'General');
INSERT INTO G14_posicion (nro_posicion, nro_estanteria, nro_fila, pos_global, tipo) VALUES (1, 1, 1, 1, 'Insecticidas');
INSERT INTO G14_posicion (nro_posicion, nro_estanteria, nro_fila, pos_global, tipo) VALUES (2, 2, 2, 2, 'Inflamable');
INSERT INTO G14_posicion (nro_posicion, nro_estanteria, nro_fila, pos_global, tipo) VALUES (3, 3, 3, 3, 'Vidrio');
INSERT INTO G14_posicion (nro_posicion, nro_estanteria, nro_fila, pos_global, tipo) VALUES (4, 4, 4, 4, 'General');

---TABLA G14_ALQUILER_POSICIONES---
INSERT INTO G14_alquiler_posiciones (id_alquiler, nro_posicion, nro_estanteria, nro_fila, estado) VALUES (0, 0, 0, 0, true);
INSERT INTO G14_alquiler_posiciones (id_alquiler, nro_posicion, nro_estanteria, nro_fila, estado) VALUES (1, 1, 1, 1, true);
INSERT INTO G14_alquiler_posiciones (id_alquiler, nro_posicion, nro_estanteria, nro_fila, estado) VALUES (2, 2, 2, 2, true);
INSERT INTO G14_alquiler_posiciones (id_alquiler, nro_posicion, nro_estanteria, nro_fila, estado) VALUES (3, 3, 3, 3, true);
INSERT INTO G14_alquiler_posiciones (id_alquiler, nro_posicion, nro_estanteria, nro_fila, estado) VALUES (4, 4, 4, 4, true);

---TABLA G14_PALLET---
INSERT INTO G14_pallet (cod_pallet, descripcion, peso) VALUES ('a-0', 'Harina', 80.00);
INSERT INTO G14_pallet (cod_pallet, descripcion, peso) VALUES ('b-1', 'Aceite', 90.00);
INSERT INTO G14_pallet (cod_pallet, descripcion, peso) VALUES ('c-2', 'Azucar', 70.00);
INSERT INTO G14_pallet (cod_pallet, descripcion, peso) VALUES ('d-3', 'Arroz',  95.00);
INSERT INTO G14_pallet (cod_pallet, descripcion, peso) VALUES ('e-4', 'Fideos', 95.00);

---TABLA G14_MOVIMIENTO---
INSERT INTO G14_movimiento (id_movimiento, fecha, responsable, tipo) VALUES (0,  '2019-05-29 07:45:30', 'Juan',   'e');
INSERT INTO G14_movimiento (id_movimiento, fecha, responsable, tipo) VALUES (1,  '2019-05-30 07:45:30', 'Matias', 'e');
INSERT INTO G14_movimiento (id_movimiento, fecha, responsable, tipo) VALUES (2,  '2019-05-31 07:45:30', 'Martin', 'e');
INSERT INTO G14_movimiento (id_movimiento, fecha, responsable, tipo) VALUES (3,  '2019-06-01 07:45:30', 'Matias', 'e');
INSERT INTO G14_movimiento (id_movimiento, fecha, responsable, tipo) VALUES (4,  '2019-06-02 07:45:30', 'Juan',   'e');

INSERT INTO G14_movimiento (id_movimiento, fecha, responsable, tipo) VALUES (5,  '2019-05-29 07:45:30', 'Juan',   's');
INSERT INTO G14_movimiento (id_movimiento, fecha, responsable, tipo) VALUES (6,  '2019-05-30 07:45:30', 'Matias', 's');
INSERT INTO G14_movimiento (id_movimiento, fecha, responsable, tipo) VALUES (7,  '2019-05-31 07:45:30', 'Martin', 's');
INSERT INTO G14_movimiento (id_movimiento, fecha, responsable, tipo) VALUES (8,  '2019-06-01 07:45:30', 'Matias', 's');
INSERT INTO G14_movimiento (id_movimiento, fecha, responsable, tipo) VALUES (9,  '2019-06-02 07:45:30', 'Juan',   's');

INSERT INTO G14_movimiento (id_movimiento, fecha, responsable, tipo) VALUES (10, '2019-05-29 07:45:30', 'Juan',   'i');
INSERT INTO G14_movimiento (id_movimiento, fecha, responsable, tipo) VALUES (11, '2019-05-30 07:45:30', 'Matias', 'i');
INSERT INTO G14_movimiento (id_movimiento, fecha, responsable, tipo) VALUES (12, '2019-05-31 07:45:30', 'Martin', 'i');
INSERT INTO G14_movimiento (id_movimiento, fecha, responsable, tipo) VALUES (13, '2019-06-01 07:45:30', 'Matias', 'i');
INSERT INTO G14_movimiento (id_movimiento, fecha, responsable, tipo) VALUES (14, '2019-06-02 07:45:30', 'Juan',   'i');

INSERT INTO G14_movimiento (id_movimiento, fecha, responsable, tipo) VALUES (15, '2019-05-29 07:45:30', 'Juan',   'i');
INSERT INTO G14_movimiento (id_movimiento, fecha, responsable, tipo) VALUES (16, '2019-05-30 07:45:30', 'Matias', 'i');
INSERT INTO G14_movimiento (id_movimiento, fecha, responsable, tipo) VALUES (17, '2019-05-31 07:45:30', 'Martin', 'i');
INSERT INTO G14_movimiento (id_movimiento, fecha, responsable, tipo) VALUES (18, '2019-06-01 07:45:30', 'Matias', 'i');
INSERT INTO G14_movimiento (id_movimiento, fecha, responsable, tipo) VALUES (19, '2019-06-02 07:45:30', 'Juan',   'i');

---TABLA G14_MOV_ENTRADA---
INSERT INTO G14_mov_entrada (id_movimiento, transporte, guia, cod_pallet, id_alquiler, nro_posicion, nro_estanteria, nro_fila) VALUES (0, 'Camion',    'aaa000', 'a-0', 0, 0, 0, 0);
INSERT INTO G14_mov_entrada (id_movimiento, transporte, guia, cod_pallet, id_alquiler, nro_posicion, nro_estanteria, nro_fila) VALUES (1, 'Camioneta', 'bbb111', 'b-1', 1, 1, 1, 1);
INSERT INTO G14_mov_entrada (id_movimiento, transporte, guia, cod_pallet, id_alquiler, nro_posicion, nro_estanteria, nro_fila) VALUES (2, 'Camion',    'ccc222', 'c-2', 2, 2, 2, 2);
INSERT INTO G14_mov_entrada (id_movimiento, transporte, guia, cod_pallet, id_alquiler, nro_posicion, nro_estanteria, nro_fila) VALUES (3, 'Camioneta', 'ddd333', 'd-3', 3, 3, 3, 3);
INSERT INTO G14_mov_entrada (id_movimiento, transporte, guia, cod_pallet, id_alquiler, nro_posicion, nro_estanteria, nro_fila) VALUES (4, 'Camion',    'eee444', 'e-4', 4, 4, 4, 4);

--TABLA G14_MOV_SALIDA---
INSERT INTO G14_mov_salida (id_movimiento, mov_entrada, transporte, guia) VALUES (5, 0, 'Camion',    'aaa000'); 
INSERT INTO G14_mov_salida (id_movimiento, mov_entrada, transporte, guia) VALUES (6, 1, 'Camioneta', 'bbb000'); 
INSERT INTO G14_mov_salida (id_movimiento, mov_entrada, transporte, guia) VALUES (7, 2, 'Camion',    'ccc222'); 
INSERT INTO G14_mov_salida (id_movimiento, mov_entrada, transporte, guia) VALUES (8, 3, 'Camion',    'ddd333'); 
INSERT INTO G14_mov_salida (id_movimiento, mov_entrada, transporte, guia) VALUES (9, 4, 'Camion',    'eee444');

---TABLA G14_MOV_INTERNO---
INSERT INTO G14_mov_interno ( id_movimiento, mov_interno, mov_entrada, razon, nro_posicion, nro_estanteria, nro_fila) VALUES ( 10, NULL, 0, NULL,          0, 0, 0);
INSERT INTO G14_mov_interno ( id_movimiento, mov_interno, mov_entrada, razon, nro_posicion, nro_estanteria, nro_fila) VALUES ( 11, NULL, 1, 'Reubicacion', 1, 1, 1);
INSERT INTO G14_mov_interno ( id_movimiento, mov_interno, mov_entrada, razon, nro_posicion, nro_estanteria, nro_fila) VALUES ( 12, NULL, 2, NULL,          2, 2, 2);
INSERT INTO G14_mov_interno ( id_movimiento, mov_interno, mov_entrada, razon, nro_posicion, nro_estanteria, nro_fila) VALUES ( 13, NULL, 3, 'Reubicacion', 3, 3, 3);
INSERT INTO G14_mov_interno ( id_movimiento, mov_interno, mov_entrada, razon, nro_posicion, nro_estanteria, nro_fila) VALUES ( 14, NULL, 4, 'Reubicacion', 4, 4, 4);

INSERT INTO G14_mov_interno ( id_movimiento, mov_interno, mov_entrada, razon, nro_posicion, nro_estanteria, nro_fila) VALUES ( 15, 10, 0, NULL,          0, 0, 0);
INSERT INTO G14_mov_interno ( id_movimiento, mov_interno, mov_entrada, razon, nro_posicion, nro_estanteria, nro_fila) VALUES ( 16, 11, 1, 'Reubicacion', 1, 1, 1);
INSERT INTO G14_mov_interno ( id_movimiento, mov_interno, mov_entrada, razon, nro_posicion, nro_estanteria, nro_fila) VALUES ( 17, 12, 2, NULL,          2, 2, 2);
INSERT INTO G14_mov_interno ( id_movimiento, mov_interno, mov_entrada, razon, nro_posicion, nro_estanteria, nro_fila) VALUES ( 18, 13, 3, 'Reubicacion', 3, 3, 3);
INSERT INTO G14_mov_interno ( id_movimiento, mov_interno, mov_entrada, razon, nro_posicion, nro_estanteria, nro_fila) VALUES ( 19, 14, 4, 'Reubicacion', 4, 4, 4);