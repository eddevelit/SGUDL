<?php

$servidor="localhost";
$usuario="root";
$pass="";
$bd= "bd_UDLInscripcionPruebas";

$conexion = mysqli_connect($servidor,$usuario,$pass,$bd);
//Test de Conexión
// if($conexion)
// {
//     print "<script> alert('Conectado con exito');</script>";
// }

if(!$conexion){
    die('Error de conexion'.mysqli_connect_errno());

}