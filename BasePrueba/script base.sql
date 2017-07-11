CREATE DATABASE bd_UDLInscripcionPruebas  COLLATE utf8_bin;
-- ------------------------------------------------------ --
	-- drop DATABASE bd_UDLInscripcionPruebas
    -- DROP TABLE RETICULA;
-- ------------------------------------------------------ --

USE bd_UDLInscripcionPruebas;

-- ------------------------------------------------------ --
	-- Create table catUsuarios
    -- DROP TABLE catUsuarios;
-- ------------------------------------------------------ --

CREATE TABLE catUsuarios ( 
  id INT(11) NOT NULL AUTO_INCREMENT, 
  nombre VARCHAR(100) NOT NULL, 
  usuario VARCHAR(50) NOT NULL, 
  email VARCHAR(50) NOT NULL, 
  pass_word VARCHAR(20) NOT NULL, 
  privilegio int NOT NULL,
  PRIMARY KEY  (id) 
);

 -- SELECT * FROM catUsuarios
 -- TRUNCATE TABLE catusuarios;
 -- INSERT INTO catUsuarios (nombre, usuario, email, pass_word, privilegio) VALUES ('Mario Hernández Ramirez','mhernandez', 'mhernandez@itgam.com.mx', 'a', 1);
 -- INSERT INTO catUsuarios (nombre, usuario, email, pass_word, privilegio) VALUES ('a','a', 'a@itgam.com.mx', 'a', 1);
-- ------------------------------------------------------ --
-- Create table catReticula
-- SELECT * FROM catreticula;
-- ------------------------------------------------------ --
CREATE TABLE catReticula (
	Id int auto_increment,
    Licenciatura varchar (70),
    Materia varchar (50),
    Clave varchar (8),
	Seriacion varchar (7),
    HrDocentes int (3),
    HrIndependientes int (3),
    Creditos float,
    Instalaciones varchar (5),
    TipoBloque int (2),
    primary key (Id)
);
-- ------------------------------------------------------ --
	-- Create table catReporteHistorico
    -- SELECT * FROM catReporteHistorico
    -- TRUNCATE TABLE catReporteHistorico;
-- ------------------------------------------------------ --

CREATE TABLE catReporteHistorico (
	Id int auto_increment,
    NomCarrera varchar (100),
    Grupo varchar (8),
	Matricula varchar (7),
    Alumno varchar (100),
    Delegacion varchar (200),
    Edad int (2),
    EscuelaProcedencia varchar (200),
    Ciclo int (3),
    Tipo varchar (20),
    Materia varchar (150),
    CalFinal float,
    primary key (Id)
);

-- ------------------------------------------------------ --
	-- Create table catReporteConcentrado
-- ------------------------------------------------------ --

CREATE TABLE catReporteConcentrado(
	Id int auto_increment,
    Ciclo int (3),
    NomCarrera varchar (100),
    Grupo varchar (8),
	Matricula varchar (7),
    Alumno varchar (100),
    Reprobadas int (2),
    Avance varchar (6),
    Promedio float,
    Cursos int (2),
    Titulo varchar (100),
    primary key (Id)
);

-- ------------------------------------------------------ --
	-- Insert records to table catReporteHistorico
-- ------------------------------------------------------ --

/* INSERT INTO catReporteHistorico (NomCarrera, Grupo, Matricula,Alumno,Delegacion,Edad,EscuelaProcedencia,Ciclo,Tipo,Materia,CalFinal) VALUES
(
	"Ingenieria en Tecnologias de la Información y Comunicaciones",
    "1028_AE2",
    "A134301",
    "Mario Hernández Ramírez",
    "Gustavo A. Madero",
    28,
    "Centro de estudios tecnico y tecnologicos No. 54",
    161,
    "Ordinario",
    "Sistemas Operativos en Red",
    9.9
),(
	"Ingenieria en Tecnologias de la Información y Comunicaciones",
    "1028_AE2",
    "A134301",
    "Mario Hernández Ramírez",
    "Gustavo A. Madero",
    28,
    "Centro de estudios tecnico y tecnologicos No. 54",
    161,
    "Ordinario",
    "Programación de Aplicaciones Web",
    9.9
),(
	"Ingenieria en Tecnologias de la Información y Comunicaciones",
    "1028_AE2",
    "A134301",
    "Mario Hernández Ramírez",
    "Gustavo A. Madero",
    28,
    "Centro de estudios tecnico y tecnologicos No. 54",
    161,
    "Ordinario",
    "Programación de Servicios Web",
    9.9
),(
	"Ingenieria en Tecnologias de la Información y Comunicaciones",
    "1028_AE2",
    "A134301",
    "Mario Hernández Ramírez",
    "Gustavo A. Madero",
    28,
    "Centro de estudios tecnico y tecnologicos No. 54",
    161,
    "Ordinario",
    "Sistemas Manejadores de Base de Datos",
    9.9
),(
	"Ingenieria en Tecnologias de la Información y Comunicaciones",
    "1028_AE2",
    "A134301",
    "Mario Hernández Ramírez",
    "Gustavo A. Madero",
    28,
    "Centro de estudios tecnico y tecnologicos No. 54",
    161,
    "Ordinario",
    "Liderazgo",
    9.9
),(
	"Ingenieria en Tecnologias de la Información y Comunicaciones",
    "1028_AE2",
    "A134302",
    "Cruz Ortega Jovany",
    "Gustavo A. Madero",
    24,
    "Colegio de Bachilleres No. 9",
    161,
    "Ordinario",
    "Sistemas Operativos en Red",
    9.9
),(
	"Ingenieria en Tecnologias de la Información y Comunicaciones",
    "1028_AE2",
    "A134302",
    "Cruz Ortega Jovany",
    "Gustavo A. Madero",
    24,
    "Colegio de Bachilleres No. 9",
    161,
    "Ordinario",
    "Programación de Aplicaciones Web",
    9.9
),(
	"Ingenieria en Tecnologias de la Información y Comunicaciones",
    "1028_AE2",
    "A134302",
    "Cruz Ortega Jovany",
    "Gustavo A. Madero",
    24,
    "Colegio de Bachilleres No. 9",
    161,
    "Ordinario",
    "Programación de Servicios Web",
    9.9
),(
	"Ingenieria en Tecnologias de la Información y Comunicaciones",
    "1028_AE2",
    "A134302",
    "Cruz Ortega Jovany",
    "Gustavo A. Madero",
    24,
    "Colegio de Bachilleres No. 9",
    161,
    "Ordinario",
    "Sistemas Manejadores de Base de Datos",
    9.9
),(
	"Ingenieria en Tecnologias de la Información y Comunicaciones",
    "1028_AE2",
    "A134302",
    "Cruz Ortega Jovany",
    "Gustavo A. Madero",
    24,
    "Colegio de Bachilleres No. 9",
    161,
    "Ordinario",
    "Liderazgo",
    9.9
),(
	"Ingenieria en Tecnologias de la Información y Comunicaciones",
    "1028_AE2",
    "A134303",
    "Ana Karen López Chávez",
    "Gustavo A. Madero",
    24,
    "Colegio de Bachilleres No. 9",
    161,
    "Ordinario",
    "Sistemas Operativos en Red",
    9.9
),(
	"Ingenieria en Tecnologias de la Información y Comunicaciones",
    "1028_AE2",
    "A134303",
    "Ana Karen López Chávez",
    "Gustavo A. Madero",
    24,
    "Colegio de Bachilleres No. 9",
    161,
    "Ordinario",
    "Programación de Aplicaciones Web",
    9.9
),(
	"Ingenieria en Tecnologias de la Información y Comunicaciones",
    "1028_AE2",
    "A134303",
    "Ana Karen López Chávez",
    "Gustavo A. Madero",
    24,
    "Colegio de Bachilleres No. 9",
    161,
    "Ordinario",
    "Programación de Servicios Web",
    9.9
),(
	"Ingenieria en Tecnologias de la Información y Comunicaciones",
    "1028_AE2",
    "A134303",
    "Ana Karen López Chávez",
    "Gustavo A. Madero",
    24,
    "Colegio de Bachilleres No. 9",
    161,
    "Ordinario",
    "Sistemas Manejadores de Base de Datos",
    9.9
),(
	"Ingenieria en Tecnologias de la Información y Comunicaciones",
    "1028_AE2",
    "A134303",
    "Ana Karen López Chávez",
    "Gustavo A. Madero",
    24,
    "Colegio de Bachilleres No. 9",
    161,
    "Ordinario",
    "Liderazgo",
    9.9
),(
	"Ingenieria en Tecnologias de la Información y Comunicaciones",
    "1028_AE2",
    "A134304",
    "Carlos Alberto Máquez Máquez",
    "Poligonos 3",
    24,
    "Colegio de Bachilleres No. 9",
    161,
    "Ordinario",
    "Sistemas Operativos en Red",
    9.9
),(
	"Ingenieria en Tecnologias de la Información y Comunicaciones",
    "1028_AE2",
    "A134304",
    "Carlos Alberto Máquez Máquez",
    "Gustavo A. Madero",
    24,
    "Colegio de Bachilleres No. 9",
    161,
    "Ordinario",
    "Programación de Aplicaciones Web",
    9.9
),(
	"Ingenieria en Tecnologias de la Información y Comunicaciones",
    "1028_AE2",
    "A134304",
    "Carlos Alberto Máquez Máquez",
    "Gustavo A. Madero",
    24,
    "Colegio de Bachilleres No. 9",
    161,
    "Ordinario",
    "Programación de Servicios Web",
    9.9
),(
	"Ingenieria en Tecnologias de la Información y Comunicaciones",
    "1028_AE2",
    "A134304",
    "Carlos Alberto Máquez Máquez",
    "Gustavo A. Madero",
    24,
    "Colegio de Bachilleres No. 9",
    161,
    "Ordinario",
    "Sistemas Manejadores de Base de Datos",
    9.9
),(
	"Ingenieria en Tecnologias de la Información y Comunicaciones",
    "1028_AE2",
    "A134304",
    "Carlos Alberto Máquez Máquez",
    "Gustavo A. Madero",
    24,
    "Colegio de Bachilleres No. 9",
    161,
    "Ordinario",
    "Liderazgo",
    9.9
);

-- ------------------------------------------------------ --
	-- Insert records to table catReporteConcentrado
-- ------------------------------------------------------ --

INSERT INTO catReporteConcentrado(Ciclo, NomCarrera, Grupo, Matricula, Alumno, Reprobadas, Avance, Promedio, Cursos, Titulo) VALUES
(
	161,
	"Ingenieria en Tecnologias de la Información y Comunicaciones",
    "1028_AE2",
    "A134301",
    "Mario Hernández Ramírez",
    0,
    "87.9%",    
    9.9,
    1,
    ""
),(
	161,
	"Ingenieria en Tecnologias de la Información y Comunicaciones",
    "1028_AE2",
    "A134302",
    "Cruz Ortea Jovany",
    0,
    "9.9%",    
    9.9,
    2,
    ""
),(
	161,
	"Ingenieria en Tecnologias de la Información y Comunicaciones",
    "1028_AE2",
    "A134303",
    "Ana Karen López Chávez",
    0,
    "9.4%",    
    9.9,
    3,
    ""
),(
	161,
	"Ingenieria en Tecnologias de la Información y Comunicaciones",
    "1028_AE2",
    "A134304",
    "Márquez Márquez Carlos Alberto ",
    0,
    "9.4%",    
    9.9,
    5,
    ""
);*/