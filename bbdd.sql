/*CREATE DATABASE DAI;
*/
USE  DAI;

CREATE TABLE EMPRESA(
	codigoEmpresa INT PRIMARY KEY NOT NULL,
    rutEmpresa VARCHAR(30) NOT NULL,
    passwordEmpresa VARCHAR(10) NOT NULL,
    direccionEmpresa VARCHAR(50) NOT NULL
);

CREATE TABLE CONTACTO(
	rutContacto VARCHAR(10) PRIMARY KEY NOT NULL,
    nombreContacto VARCHAR(30) NOT NULL,
    emailContacto VARCHAR(45) NOT NULL,
    telefonoContacto VARCHAR(15) ,
    Empresa_codigoEmpresa INT NOT NULL,
    CONSTRAINT contacto_empresa_fk FOREIGN KEY (Empresa_codigoEmpresa) REFERENCES EMPRESA(codigoEmpresa)
);

CREATE TABLE PARTICULAR(
	codigoParticular INT PRIMARY KEY NOT NULL,
    rutParticular VARCHAR(45) NOT NULL,
    passwordParticular VARCHAR(45) NOT NULL,
    nombreParticular VARCHAR(45) NOT NULL,
    direccionParticular VARCHAR(45) NOT NULL,
    emailParticular VARCHAR(100) NOT NULL
);

CREATE TABLE TELEFONO(
	idTelefono INT PRIMARY KEY NOT NULL,
    numeroTelefono VARCHAR(20) NOT NULL,
    Particular_codigoParticular INT NOT NULL,
    CONSTRAINT TELEFONO_PARTICULAR_FK FOREIGN KEY (Particular_codigoParticular) REFERENCES PARTICULAR(codigoParticular)
);

CREATE TABLE EMPLEADO(
	rutEmpleado VARCHAR(10) PRIMARY KEY NOT NULL,
    nombreEmpleado VARCHAR(50) NOT NULL,
    passwordEmpleado VARCHAR(10) NOT NULL,
    categoria VARCHAR(1) NOT NULL
);

CREATE TABLE TIPOANALISIS(
	idTipoAnalisis INT PRIMARY KEY NOT NULL,
    nombre VARCHAR(45) NOT NULL
);

CREATE TABLE ANALISISMUESTRAS(
	idAnalisisMuestras INT PRIMARY KEY NOT NULL,
    fechaRecepcion DATE NOT NULL,
    temperaturaMuestra DECIMAL(3,1) NOT NULL,
    cantidadMuestra INT NOT NULL,
    Empresa_codigoEmpresa INT NOT NULL,
    Particular_codigoParticular INT NOT NULL,
    rutEmpleadoRecibe VARCHAR(10) NOT NULL,
    CONSTRAINT EMPRESA_ANALISIS_FK FOREIGN KEY (Empresa_codigoEmpresa) REFERENCES EMPRESA(codigoEmpresa),
    CONSTRAINT PARTICULAR_ANALISIS_FK FOREIGN KEY (Particular_codigoParticular) REFERENCES PARTICULAR(codigoParticular),
    CONSTRAINT EMPLEADO_ANALISIS_FK FOREIGN KEY (rutEmpleadoRecibe) REFERENCES EMPLEADO(rutEmpleado)
);

CREATE TABLE RESULTADOANALISIS(
	idTipoAnalisis INT NOT NULL,
    idAnalisisMuestras INT NOT NULL,
    fechaRegistro DATE NOT NULL,
    PPM INT NOT NULL,
    estado BIT NOT NULL,
    rutEmpleadoAnalista VARCHAR(10),
	CONSTRAINT RESULTADO_TIPO_FK FOREIGN KEY (idTipoAnalisis) REFERENCES TIPOANALISIS(idTipoAnalisis),
    CONSTRAINT RESULTADO_ANALISIS_FK FOREIGN KEY (idAnalisisMuestras) REFERENCES ANALISISMUESTRAs(idAnalisisMuestras),
    CONSTRAINT RESULTADO_EMPLEADO_FK FOREIGN KEY (rutEmpleadoAnalista) REFERENCES EMPLEADO(rutEmpleado)
);
