CREATE DATABASE luxurydriving;
USE luxurydriving;

CREATE TABLE ALUMNOS(
	estadoTeorico VARCHAR(20),
   categoriaLibreta VARCHAR(20),
   documentoAlumno VARCHAR(20),
   nombre VARCHAR(50) NOT NULL,
	apellido VARCHAR(50) NOT NULL,
   username VARCHAR(50) NOT NULL,
   passwrd VARCHAR(50) NOT NULL,
   edad INT NOT NULL,
   telefono VARCHAR(50) NOT NULL,
   PRIMARY KEY(documentoAlumno)
   );

CREATE TABLE ADMINISTRADOR (
	 permisos VARCHAR(20) NOT NULL,
    documentoAdmin VARCHAR(20),
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL,
    passwrd VARCHAR(50) NOT NULL,
    edad INT NOT NULL,
    telefono VARCHAR(50) NOT NULL,
	 PRIMARY KEY(documentoAdmin)
);

CREATE TABLE INSTRUCTOR (
  	 horarios VARCHAR(50) NOT NULL,
    categoriaClases VARCHAR(50) NOT NULL,
    documentoInstructor VARCHAR(20),
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL,
    passwrd VARCHAR(50) NOT NULL,
	 edad INT NOT NULL,
    telefono VARCHAR(50) NOT NULL,
      PRIMARY KEY (documentoInstructor)
);
