 <?php  
  include 'NormalizarBD.php'; 
 $connect = mysqli_connect("localhost", "root", "", "sg_udl");
 $null = "";
 $docHTML ="<!DOCTYPE html>  
                        <html>
                            <body>  
                                <input type='submit' onclick = 'Enviar();' value='Regresar' /> 
                                <script>
                                    function Enviar()
                                    {
                                        location='./index.php'
                                    }
                                </script> 
                            </body>  
                        </html>";
 if(isset($_POST["submit"]))  
 {  
      if($_FILES['file']['name'])  
      {  
           try{
               $filename = explode('.',$_FILES['file']['name']);  
           if($filename[1] == 'csv')  
           {  
                $row = 0;
                $handle = fopen($_FILES['file']['tmp_name'], "r");  
                while($data = fgetcsv($handle))  
                {    $row ++;          
                     $item1 = mysqli_real_escape_string($connect, $data[0]);
                     $item2 = mysqli_real_escape_string($connect, $data[1]);  
                     $item3 = mysqli_real_escape_string($connect, $data[2]);
                     $item4 = mysqli_real_escape_string($connect, $data[3]); 
                     $item5 = mysqli_real_escape_string($connect, $data[4]); 
                     $item6 = mysqli_real_escape_string($connect, $data[5]); 
                     $item7 = mysqli_real_escape_string($connect, $data[6]); 
                     $item8 = mysqli_real_escape_string($connect, $data[7]); 
                     $item9 = mysqli_real_escape_string($connect, $data[8]); 
                     $item10 = mysqli_real_escape_string($connect, $data[9]); 
                     $item11 = mysqli_real_escape_string($connect, $data[10]);

                     if(!($item1 === "NOMCARR" && $item2 === "GRUPO" && $item3 === "MATRICULA" && $item4 === "ALUMNO" && $item5 === "DELEGACION" && $item6 === "EDAD" && $item7 === "ESCUELA DE PROCEDENCIA" && $item8 === "Ciclo" && $item9 ==="Tipo" && $item10 === "Materia"  && $item11 === "CalFinal" ))
                     {
                        if(!($item1 === $null && $item2 === $null && $item3 === $null && $item4 === $null  && $item5 === $null  && $item6 === $null && $item7 === $null && $item7 === $null && $item8 === $null && $item8 === $null && $item9 === $null && $item10 === $null))
                        {
                                
                            $ColA = mb_convert_case(normaliza($item1), MB_CASE_TITLE);
                            $ColB = $item2;
                            $ColC = $item3;
                            $ColD = mb_convert_case(normaliza($item4), MB_CASE_TITLE);
                            $ColE = mb_convert_case(normaliza($item5), MB_CASE_TITLE);
                            $ColF = $item6;
                            $ColG = mb_convert_case(normaliza($item7), MB_CASE_TITLE);
                            $ColH = $item8;
                            $ColI = $item9;
                            $ColJ = mb_convert_case(normaliza($item10), MB_CASE_TITLE);
                            $ColK = $item11;

                            $sql="INSERT into catReporteHistorico(NomCarrera, Grupo, Matricula, Alumno, Delegacion, Edad, EscuelaProcedencia,Ciclo,Tipo,Materia,CalFinal) values ('$ColA','$ColB','$ColC','$ColD','$ColE','$ColF','$ColG','$ColH','$ColI','$ColJ','$ColK')";                    
                            mysqli_query($connect, $sql);  
                        }
                     }
                }  
                fclose($handle);
                print  '<script>alert ("Sea han cargado los registros de correctamente en la Base de Datos.")</script>';
           }
           }catch (Exception $e){
               echo 'Excepción capturada: ',  $e->getMessage(), "\n";
           }
      }  
 }  
 ?>  