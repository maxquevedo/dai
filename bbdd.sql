/*CREATE DATABASE DAI;
*/
/*USE  DAI;*/

DROP TABLE IF EXISTS `EMPRESA`;
CREATE TABLE EMPRESA(
	`codigoEmpresa` INT PRIMARY KEY NOT NULL,
  `rutEmpresa` VARCHAR(30) NOT NULL,
  `direccionEmpresa` VARCHAR(50) NOT NULL
);
DROP TABLE IF EXISTS `EMPLEADO`;
CREATE TABLE EMPLEADO(
`rutEmpleado` VARCHAR(10) PRIMARY KEY NOT NULL,
`nombreEmpleado` VARCHAR(50) NOT NULL,
`categoria` VARCHAR(1) NOT NULL
);
DROP TABLE IF EXISTS `PARTICULAR`
CREATE TABLE PARTICULAR(
	`codigoParticular` INT PRIMARY KEY NOT NULL,
  `rutParticular` VARCHAR(45) NOT NULL,
  `nombreParticular` VARCHAR(45) NOT NULL,
  `direccionParticular` VARCHAR(45) NOT NULL,
  `emailParticular` VARCHAR(100) NOT NULL
);

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `codigoUsuario` varchar(10) NOT NULL,
  `nombreUsuario` varchar(30) NOT NULL,
  `TipoUsuario` varchar(15) NOT NULL,
	`passwordUsuario`VARCHAR(15) NOT NULL;
  `EstadoUsuario` char(3) DEFAULT 'INH',
  PRIMARY KEY (`codigoUsuario`)
	CONSTRAINT usuario_empresa_fk FOREING KEY (codigoUsuario) REFERENCES EMPRESA(codigoEmpresa);
	CONSTRAINT usuario_particular_fk FOREING KEY (codigoUsuario) REFERENCES PARTICULAR(codigoParticular);
);
DROP TABLE IF EXISTS `CONTACTO`
CREATE TABLE CONTACTO(
	`rutContacto` VARCHAR(10) PRIMARY KEY NOT NULL,
  `nombreContacto` VARCHAR(30) NOT NULL,
  `emailContacto` VARCHAR(45) NOT NULL,
  `telefonoContacto` VARCHAR(15) ,
  `Empresa_codigoEmpresa` INT NOT NULL,
  CONSTRAINT contacto_empresa_fk FOREIGN KEY (Empresa_codigoEmpresa) REFERENCES EMPRESA(codigoEmpresa)
);
DROP TABLE IF EXISTS `TELEFONO`
CREATE TABLE TELEFONO(
	`idTelefono` INT PRIMARY KEY NOT NULL,
    `numeroTelefono` VARCHAR(20) NOT NULL,
    `Particular_codigoParticular` INT NOT NULL,
    CONSTRAINT TELEFONO_PARTICULAR_FK FOREIGN KEY (Particular_codigoParticular) REFERENCES PARTICULAR(codigoParticular)
);

DROP TABLE IF EXISTS `TIPOANALISIS`
CREATE TABLE TIPOANALISIS(
`	idTipoAnalisis` INT PRIMARY KEY NOT NULL,
    `nombre` VARCHAR(45) NOT NULL
);

DROP TABLE IF EXISTS `ANALISISMUESTRAS`
CREATE TABLE ANALISISMUESTRAS(
	`idAnalisisMuestras` INT PRIMARY KEY NOT NULL,
    `fechaRecepcion` DATE NOT NULL,
    `temperaturaMuestra` DECIMAL(3,1) NOT NULL,
    `cantidadMuestra` INT NOT NULL,
    `Empresa_codigoEmpresa` INT NOT NULL,
    `Particular_codigoParticular` INT NOT NULL,
    `rutEmpleadoRecibe` VARCHAR(10) NOT NULL,
    CONSTRAINT EMPRESA_ANALISIS_FK FOREIGN KEY (Empresa_codigoEmpresa) REFERENCES EMPRESA(codigoEmpresa),
    CONSTRAINT PARTICULAR_ANALISIS_FK FOREIGN KEY (Particular_codigoParticular) REFERENCES PARTICULAR(codigoParticular),
    CONSTRAINT EMPLEADO_ANALISIS_FK FOREIGN KEY (rutEmpleadoRecibe) REFERENCES EMPLEADO(rutEmpleado)
);

DROP TABLE IF EXISTS `RESULTADOANALISIS`
CREATE TABLE RESULTADOANALISIS(
	`idTipoAnalisis` INT NOT NULL,
    `idAnalisisMuestras` INT NOT NULL,
    `fechaRegistro` DATE NOT NULL,
    `PPM` INT NOT NULL,
    `estado` BIT NOT NULL,
    `rutEmpleadoAnalista` VARCHAR(10),
	CONSTRAINT RESULTADO_TIPO_FK FOREIGN KEY (idTipoAnalisis) REFERENCES TIPOANALISIS(idTipoAnalisis),
    CONSTRAINT RESULTADO_ANALISIS_FK FOREIGN KEY (idAnalisisMuestras) REFERENCES ANALISISMUESTRAs(idAnalisisMuestras),
    CONSTRAINT RESULTADO_EMPLEADO_FK FOREIGN KEY (rutEmpleadoAnalista) REFERENCES EMPLEADO(rutEmpleado)
);
