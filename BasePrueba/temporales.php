<?php 
//Parametros de conexión
include '../web.config/conection.php';

//Creacion de tablas temporales 
$materiasCarrera = "create temporary table sgudl.materiasCarrera 
select nombre_materia from sgudl.materias where id_materia like 'A%';";
if (!$con->query($materiasCarrera))
{
    echo "Falló la creación de la tabla: (" . $con->errno . ") " . $con->error;
}

$materiasCursadas = "create temporary table sgudl.materiasCursadas
select materia from sgudl.alumnosgeneral where MATRICULA = '143675'";
if (!$con->query($materiasCursadas))
{
    echo "Falló la creación de la tabla: (" . $con->errno . ") " . $con->error;
}


//Seleccion de campos de tabla temporal materias.Carrera 
/*
$selectCarrera = "select * from sgudl.materiasCarrera ;";
$resultado = $con->query($selectCarrera);
echo "<b>Materias carrera</b>";
while ($fila = $resultado->fetch_assoc()) {
	echo "<br>";
	echo utf8_encode($fila['nombre_materia']);
}

//Selección de campos de tabla temporal materiascursadas
$selectMalumno = "select * from sgudl.materiasCursadas;";
$resultadoAlumno = $con->query($selectMalumno);
echo "<b>Materias Alumno</b>";
while ($fila1 = $resultadoAlumno->fetch_assoc()) {
	echo "<br>";
	echo utf8_encode($fila1['materia']);
}
*/

//Cambiando set de caracteres 
if (!$con->query("SET collation_connection = 'utf8_general_ci';") ||
    !$con->query("ALTER DATABASE sgudl CHARACTER SET utf8 COLLATE utf8_general_ci;") ||
    !$con->query("ALTER TABLE sgudl.materiasCarrera  CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;")||
    !$con->query("ALTER TABLE sgudl.materiasCursadas CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;")) {
    echo "Falló el cambio de caracteres : (" . $con->errno . ") " . $con->error;
}

//Consulta de materias por tomar
$materiasPorCursar = "Select * from sgudl.materiasCarrera where not exists (select 1 from sgudl.materiasCursadas where materiasCursadas.materia = materiasCarrera.nombre_materia);";
$resultadoPorCursar = $con->query($materiasPorCursar);
/*
if (!$con->query($materiasPorCursar))
{
    echo "Falló la consulta de la tabla: (" . $con->errno . ") " . $con->error;
}
*/
echo "<b>Materias por cursar</b>";
while ($fila2 = $resultadoPorCursar->fetch_assoc()) {
	echo "<br>";
	echo utf8_encode($fila2['nombre_materia']);
}

 mysqli_close($con); 

 ?>
