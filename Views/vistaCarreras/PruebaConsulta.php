<form action="" method="post">
<div class=" form-group pull-right" >
    <div class="col-md-6">
      <input type="text" name="txtbus" class="form-control" placeholder ="no Control">
    </div>
      <div class="col-md-6">
    <button type="submit" name="btn1" value="Buscar" class="btn btn-primary pull-center"><i class="glyphicon glyphicon-search"></i> Buscar alumno</button>
    </div>
  </div>
</form>
<?php 
include '../../web.config/conection.php';
include '../requiere.php';
 $result_array = array();

  if(isset($_POST["btn1"])){
    $btn=$_POST["btn1"];
    $bus=$_POST["txtbus"];
    if($btn=="Buscar"){
                $r=0;
                $jR=0;
                $NumMatRepro=0;
                
                $aaa=" <td  class='danger'>";
                $tr = "<tr>";
                $trc="</tr>";
                $b="</td>";
                   
                $array_Rep= array();
                $sentenciaR = "SELECT materia FROM alumnosgeneral where matricula = '$bus' and calfinal <=5";
            

                if(!($resultadoR = @mysqli_query($con, $sentenciaR))) 
                { echo "<p>Error al ejecutar la sentencia <b>$sentenciaR</b>: "
                . mysqli_error($con); echo '</p>'; exit; }
                 echo"<thead>";
                while($filaRep =  mysqli_fetch_array($resultadoR, MYSQLI_NUM)) { 
                  $jR++;
                  $array_Rep[$jR]=$filaRep;
                 $NumMatRepro = count($array_Rep);
                 $SentenciaS = "SELECT semestre_materia FROM materias where nombre_materia = '$filaRep[0]'";
                 if(!($resultadoS = @mysqli_query($con, $SentenciaS))) 
                 { 
                  echo "<p>Error al ejecutar la sentencia <b>$SentenciaS</b>: ". mysqli_error($con); echo '</p>'; exit; 
                 }
                 $filaSemRep =  mysqli_fetch_array($resultadoS, MYSQLI_NUM);
                  echo $tr.$aaa;
                  echo utf8_encode($filaRep[0]);
                  echo $b;
                  echo $aaa;
                  echo $filaSemRep[0];
                  echo $b.$trc;
               }
               echo "<h3>";
                echo $NumMatRepro;
               echo "</h3> <hr>" ;
               if( $NumMatRepro==0)
                {
                   echo $tr.$aaa;
                  echo "Cero reprobadas";
                  echo $b.$trc;
                }
           }
           //  mysqli_close($con); //cerrar conexion
        }
$aa=" <td  class='success'>";
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
         if(isset($_POST["btn1"])){
                                  $btn=$_POST["btn1"];
                                  $bus=$_POST["txtbus"];
                                  if($btn=="Buscar"){
                                                $j=0;
                                                $contadorM=0;
                                                $array_materias=array();
                                                $array_temp=array();
                                                $sentenciaM = "SELECT nombre_materia  FROM materias where (id_materia like 'M%') ";
                                               
                                                if(!($resultado = @mysqli_query($con, $sentenciaM))) 
                                                { echo "<p>Error al ejecutar la sentencia <b>$sentenciaM</b>: "
                                                . mysqli_error($con); echo '</p>'; exit; }
                                                while($fila =  mysqli_fetch_array($resultado, MYSQLI_NUM)) { 
                                                   $j++;
                                                  $array_materias[$j]=$fila;
                                                  $falta= count($array_materias);
                                            }
                                               $array_juice=array();
                                               $TamañoC =count($result_array);
                                               $TamañoM =count($array_materias);
                                               $TamañoJ =count($array_juice);
                                                $t=0;
                                                $inic=0;
                                                for ($t=$inic ; $t<=$TamañoJ; $t++){                                            
                                                $tr = "<tr>";
                                                $trc="</tr>";
                                                }    
                                      $result_arrayTo = array();
                                      $j2=0;
                                      $i2=0;
                                      $var_temp='';
                                      $consultaR="SELECT nombre_materia FROM materias where (id_materia like 'M%') ";
                                      $resultadoR = mysqli_query($con,$consultaR);
                                      while ($filaR = mysqli_fetch_array($resultadoR, MYSQLI_NUM)) {  
                                        //Se guardan los valores de la consulta de la materia en tabla materias
                                        $filaR1[$j2]= $filaR;
                                         $j2++;
                                        }
                                        $con1=0;
                                        $con2=0;
                                        $consultaC = "SELECT MATERIA FROM alumnosgeneral where MATRICULA = '$bus'";
                                        $resultadoC = mysqli_query($con,$consultaC);
                                        while ($filaC = mysqli_fetch_array($resultadoC, MYSQLI_NUM)) {
                                          $con1++;
                                          $con2++;
                                          $mas ="";
                                          $mas = $filaC[0];
                                          $filaC2[$i2]= $filaC;
                                           $i2++;
                                        }
                                        $inic = count($filaC2);
                                        //Se comparan los arreglos 
                                        $result_arrayTo= array_diff_key($filaR1,$filaC2);
                                         $Tamaño =count($result_arrayTo);
                                         //Se imprime el total de materias por cursar 
                                          echo "<h3>";
                                                echo $Tamaño;
                                          echo "</h3> <hr>";
                                          $t=0;
                                          $tconteo=0;
                                          $inic++;
                                          $falta--;
                                          //echo "<br> $inic";
                                          for ($t=$inic; $t<=$falta; $t++){
                                           echo $tr.$aa; 
                                           $varte=array();
                                            //print_r(json_encode($result_arrayTo[$t])) ; imprime los que no tiene acentos
                                           //varte contiene las materias a cursar depues de la comparacion 
                                           $varte = array_map("utf8_encode", $result_arrayTo[$t]); 
                                           //print_r($result_arrayTo[$t]); si funciona
                                           // print_r( $varte );// si funciona pero le falta  jsonencode
                                           $compara = utf8_encode($varte[0]);
                                            $SentenciaS = "SELECT semestre_materia FROM materias where nombre_materia = '$compara'";
							                 if(!($resultadoS = @mysqli_query($con, $SentenciaS))) 
							                 { 
							                  echo "<p>Error al ejecutar la sentencia <b>$SentenciaS</b>: ". mysqli_error($con); echo '</p>'; exit; 
							                 }
							                 $filaSemRep =  mysqli_fetch_array($resultadoS, MYSQLI_NUM);
                                           //Se imprimen las variables a cursar
                                            echo $varte[0];
                                            echo $b;
                                            echo $aa;
                                            echo $filaSemRep[0];
                                            //echo $varte;
                                             //echo json_encode($varte); //impreme con valores Auditor\u00eda 
                                             echo $b.$trc;             
                                          }    
                                    }
                                }

?>