-- //Crear base de datos de biblioteca
-- //Crear tablas
-- //Usar un dominio adecuado para los atributos
-- • Dar nombre adecuado a las restricciones (clave primaria, clave
-- ajena, etc.).
-- • Declarar como tal los campos que no deban ser nulos.
-- • Añadir valores por defecto cuando lo creamos necesario.
-- • Declarar los campos como auto-numéricos cuando lo creamos
-- oportuno.

CREATE DATABASE biblioteca;
USE biblioteca;
CREATE TABLE clientes (
    `dni` varchar(9) not null,
    `nombre` varchar(50) not null,
    `apellidos` varchar(100) not null,
    `sanciones` numeric(3),
    PRIMARY KEY (`dni`)
    );

CREATE TABLE libros (
    `isbn` varchar(17) not null,
    `titulo` varchar(100) not null,
    `autor` varchar(100) not null,
    `cantidad` int not null,
    PRIMARY KEY (`isbn`)
    );

CREATE TABLE prestamo (
    `fechasalida` date,
    `isbn` varchar(17),
    `dni` varchar(9),
    PRIMARY KEY (`isbn`, `dni`)
    );