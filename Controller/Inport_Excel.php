 <?php  
 $connect = mysqli_connect("localhost", "root","", "bd_UDLInscripcionPruebas");
 $null = "";
 $docHTML ="<!DOCTYPE html>  
                        <html>
                            <body>  
                                <input type='submit' onclick = 'Enviar();' value='Regresar' /> 
                                <script>
                                    function Enviar()
                                    {
                                        location='../Views/index.php'
                                    }
                                </script> 
                            </body>  
                        </html>";
 if(isset($_POST["submit"]))  
 {  
      if($_FILES['file']['name'])  
      {  
           $filename = explode('.',$_FILES['file']['name']);  
           if($filename[1] == 'csv')  
           {  
                $handle = fopen($_FILES['file']['tmp_name'], "r");  
                while($data = fgetcsv($handle))  
                {                 
                     $item1 = mysqli_real_escape_string($connect, $data[0]);
                     $item2 = mysqli_real_escape_string($connect, $data[1]);  
                     $item3 = mysqli_real_escape_string($connect, $data[2]); 
                     $item4 = mysqli_real_escape_string($connect, $data[3]);
                     $item5 = mysqli_real_escape_string($connect, $data[4]);
                     $item6 = mysqli_real_escape_string($connect, $data[5]);
                     $item7 = mysqli_real_escape_string($connect, $data[6]);
                     $item8 = mysqli_real_escape_string($connect, $data[7]);
                     $item9 = mysqli_real_escape_string($connect, $data[8]);

                     if(!($item1 === "Licenciatura" && $item2 === "BloqueBásico" && $item3 === "Clave" && $item4 === "Seriación" && $item5 === "HrDocente" && $item6 === "HrIndependiente" && $item7 === "Créditos"  && $item8 === "Instalaciones" && $item9 === "TipoBloque"))
                     {
                         if(!($item1 === $null && $item2 === $null && $item3 === $null && $item4 === $null && $item5 === $null && $item6 === $null && $item7 === $null && $item8 === $null && $item9 === $null))
                         {       
                    $Licenciatura  = mb_convert_case($item1, MB_CASE_TITLE);
                    $Materia = mb_convert_case($item2, MB_CASE_TITLE);
                    $Clave  = mb_convert_case($item3, MB_CASE_TITLE);
                    $Seriación  = mb_convert_case($item4, MB_CASE_TITLE);
                    $HrDocente = mb_convert_case($item5, MB_CASE_TITLE);
                    $HrIndependiente  = mb_convert_case($item6, MB_CASE_TITLE);
                    $Créditos  = mb_convert_case($item7, MB_CASE_TITLE);
                    $Instalaciones  = mb_convert_case($item8, MB_CASE_TITLE);
                    $TipoBloque  = mb_convert_case($item9, MB_CASE_TITLE);
                    $sql="INSERT into Reticula(Licenciatura,Materia, Clave, Seriacion, HrDocente,HrIndependiente,Creditos,Instalaciones,TipoBloque) values('$Licenciatura','$Materia','$Clave','$Seriación','$HrDocente','$HrIndependiente','$Créditos','$Instalaciones','$TipoBloque')";  
                    mysqli_query($connect, $sql);  
                        }
                     }
                }  
                fclose($handle);
                print  $docHTML;
           }  
      }  
 }  
 ?>  