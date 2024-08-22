create table productos (
    producto_id SERIAL,
    producto_nombre VARCHAR (50),
    producto_precio INTEGER,
    producto_situacion SMALLINT DEFAULT 1
);