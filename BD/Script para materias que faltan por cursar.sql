/*Tabla temporal con las materias de la carrera*/ 
create temporary table sgudl.materiasCarrera 
select nombre_materia from sgudl.materias where id_materia like 'A%'; 
select * from sgudl.materiasCarrera ;
/*Tabla temporal con las materias que ha tomado el alumno*/
create temporary table sgudl.materiasCursadas
select materia from sgudl.alumnosgeneral where MATRICULA = "143675"; 
select * from sgudl.materiasCursadas;
/*Select con las materias que no han tomado*/
Select * from sgudl.materiasCarrera   where not exists 
(select 1 from sgudl.materiasCursadas where materiasCursadas.materia = materiasCarrera.nombre_materia);
/*Cambiando el character set de la bd y tablas*/
SET collation_connection = 'utf8_general_ci';
ALTER DATABASE sgudl CHARACTER SET utf8 COLLATE utf8_general_ci;
ALTER TABLE sgudl.materiasCarrera  CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;
ALTER TABLE sgudl.materiasCursadas CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;
