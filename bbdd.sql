DROP DATABASE IF EXISTS `DAI`;
CREATE DATABASE DAI;

USE  DAI;

DROP TABLE IF EXISTS `PARTICULAR`;
CREATE TABLE PARTICULAR(
  `codigo` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `rut` VARCHAR(45) NOT NULL UNIQUE,
  `password`VARCHAR(15) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `email` VARCHAR(100) NOT NULL UNIQUE,
  `telefono` VARCHAR(20) NOT NULL
);

DROP TABLE IF EXISTS `EMPRESA`;
CREATE TABLE EMPRESA(
  `codigo` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `password`VARCHAR(15) NOT NULL,
  `rutEmpresa` VARCHAR(30) NOT NULL UNIQUE
);

DROP TABLE IF EXISTS `EMPLEADO`;
CREATE TABLE `EMPLEADO` (
  `rutEmpleado` VARCHAR(10) PRIMARY KEY NOT NULL,
  `nombreEmpleado` VARCHAR(50) NOT NULL,
  `categoria` CHAR NOT NULL
);

DROP TABLE IF EXISTS `CONTACTO`;
CREATE TABLE CONTACTO(
	`rutContacto` VARCHAR(10) PRIMARY KEY NOT NULL,
  `nombreContacto` VARCHAR(30) NOT NULL,
  `emailContacto` VARCHAR(45) NOT NULL,
  `telefonoContacto` VARCHAR(15) ,
  `Empresa_codigo` VARCHAR(10) NOT NULL
);


DROP TABLE IF EXISTS `ANALISISMUESTRAS`;
CREATE TABLE ANALISISMUESTRAS(
	`idAnalisisMuestras` INT PRIMARY KEY NOT NULL,
  `fechaRecepcion` DATE NOT NULL,
  `cantidadMuestra` INT NOT NULL,
  `codigoRandom` VARCHAR(10) NOT NULL,
  `rutUsuario` VARCHAR(10) NOT NULL
);

DROP TABLE IF EXISTS `RESULTADOANALISIS`;
CREATE TABLE RESULTADOANALISIS(
	`idTipoAnalisis` INT NOT NULL,
  `idAnalisisMuestras` INT NOT NULL,
  `fechaRegistro` DATE NOT NULL,
  `PPM` INT NOT NULL,
  `estado` BIT NOT NULL,
  `rutEmpleadoAnalista` VARCHAR(10)
);

DROP TABLE IF EXISTS `TELEFONO`;
CREATE TABLE TELEFONO(
	`idTelefono` INT PRIMARY KEY NOT NULL,
  `numeroTelefono` VARCHAR(20) NOT NULL,
  `Particular_codigoParticular` VARCHAR(10) NOT NULL
);
