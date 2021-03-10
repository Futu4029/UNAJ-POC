DROP DATABASE UNAJ_BaseDeDatos;

CREATE DATABASE UNAJ_BaseDeDatos;

\c prueba

CREATE TABLE alumno (nombre VARCHAR(30),
                     apellido VARCHAR(30),
                     tipo_documento VARCHAR(10),
                     nro_documento INT,
                     fecha_nac DATE,
                     mail VARCHAR(30),
                     carrera VARCHAR(30),
                     anio int,
                     experiencia TEXT,
                     CONSTRAINT alumno_pk PRIMARY KEY (tipo_documento, nro_documento)
                    )
;

CREATE TABLE empresa (nombre_empresa VARCHAR(30),
                      cuit INT,
                      provincia VARCHAR(30),
                      localidad VARCHAR(30),
                      direccion VARCHAR(30),
                      telefono VARCHAR(30),
                      mail VARCHAR(30),
                      CONSTRAINT empresa_pk PRIMARY KEY (nombre_empresa, cuit)
                     )
;

CREATE TABLE oferta_laboral (empresa VARCHAR(30),
                             cuit_empresa INT,
                             descripcion_puesto TEXT,
                             fecha_inicio DATE,
                             fecha_fin DATE,
                             CONSTRAINT oferta_laboral_pk PRIMARY KEY (empresa, cuit_empresa, descripcion_puesto),
                             CONSTRAINT fk_oferta_laboral FOREIGN KEY (empresa, cuit_empresa)
                             REFERENCES empresa(nombre_empresa, cuit)
                             )
;