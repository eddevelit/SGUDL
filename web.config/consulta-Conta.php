<?php
 
 include 'conection.php';

$consulta="SELECT * FROM alumnosgeneral where NOMCAR = 'CONTADURIA'";
$resultado = mysqli_query($con,$consulta);

if(!$resultado){
    die("error");
}else{
while($data = mysqli_fetch_assoc($resultado)){
            $arreglo["data"][]= array_map("utf8_encode", $data);
        }
    
        echo json_encode($arreglo);
}
mysqli_free_result($resultado);
mysqli_close($con);