DROP DATABASE IF EXISTS `DAI`;
CREATE DATABASE DAI DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;

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
	`idAnalisisMuestras` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `tipoAnalisis` VARCHAR(20) NOT NULL,
  `medida` VARCHAR(20) NOT NULL,
  `fechaRecepcion` VARCHAR(20) NOT NULL,
  `cantidadMuestra` INT NOT NULL,
  `codigoRandom` VARCHAR(10) NOT NULL,
  `rutUsuario` VARCHAR(10) NOT NULL
);


INSERT INTO PARTICULAR VALUES('',"12345678","1234","Ejemplo Perez","Av Siempre Viva","ejemplo@gmail.com","1234567");
INSERT INTO EMPRESA VALUES('','123','123');
INSERT INTO CONTACTO VALUES('123','CONTACTO','contacto@contacto.com','123','123');