<?php
include '../../web.config/conection.php';
include '../requiere.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>UDL Sistema</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href="http:/www.udlondres.com/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="../Content/Vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https:/cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https:/cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../Content/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../Content/css/skins/skin-udl.css">
  <link rel="stylesheet" href="../Content/Vendor/plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="../Content/Vendor/plugins/morris/morris.css">
  <link rel="stylesheet" href="../Content/Vendor/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="../Content/Vendor/plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="../Content/Vendor/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../Content/Vendor/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
   <!--Datatable-->
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
	<script type="text/javascript" src="/media/js/site.js?_=fdce5da0aafc74f877db6a1772eccba9">
	</script>
	<script type="text/javascript" src="/media/js/dynamic.php?comments-page=examples%2Fbasic_init%2Fzero_configuration.html" async>
	</script>
	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.3.js">
	</script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="../resources/demo.js">
	</script>
   <script type="text/javascript" class="init">
        $(document).ready(function() {
            listarA();
        } );
            var listarA = function(){
                var table = $("#alumnos").DataTable({
                        "ajax":{
                            "method":"POST",
                            "url":"../../web.config/consulta-Conta.php"
                        },
                        "columns":[
                            {"data":"MATRICULA"},
                            {"data":"ALUMNO"},
                            {"data":"GRUPO"},
                            {"data":"CICLO"},
                            {"data":"MATERIA"},
                            {"data":"CALFINAL"}
                            
                        ]
                });
            }
	</script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="Content/img/logo.png" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>U</b>DL</span>
      <img src="../Content/img/logo.png" alt="" style="height:50px">
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Navegacion</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../Content/img/logo.png" class="user-image" alt="User Image">
              <span class="hidden-xs">UDL Gestion Académica</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                <p>
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">Menú</li>
          <li class="active treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Principal</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
               <li class="active"><a href="../index.php"><i class="fa fa-circle-o"></i> Catalogos</a></li>
              <li><a href="../FiltroAlumnos.php"><i class="fa fa-circle-o"></i> Filtro de alumnos</a></li>
              <li><a href="./filtro.php"><i class="fa fa-circle-o"></i> Filtro por Carrera</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="../ImportarExcel.php">
              <i class="fa fa-files-o"></i>
              <span>Actualizacion de BD</span>
              <span class="pull-right-container">
                <span class="label label-primary pull-right"></span>
              </span>
            </a>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-red">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="text-center">
       Contaduria
        <small></small>
      </h1>
    </section>
     <hr style="width: 67%" >
    <!-- Start page -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
       <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Lic.</h3>
              <p>Mercadotecnia</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="./1-Merca.php" class="small-box-footer">Filtrar<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Lic.<sup style="font-size: 20px"></sup></h3>

              <p>Finanzas</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="./2-Finan.php" class="small-box-footer">Filtrar<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Lic.</h3>

              <p>Adm. Empresas</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="./3-Adm-Emp.php" class="small-box-footer">Filtrar<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Lic.</h3>

              <p>Contaduria</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="./4-Conta.php" class="small-box-footer">Filtrar<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- start -->
        <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>
              <h3 class="box-title">Todo los Alumnos</h3>
              <table id="alumnos" class="display" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>Matricula</th>
                          <th>Alumno</th>
                          <th>GRUPO</th>
                          <th>Cliclo</th>
                          <th>Materia</th>
                          <th>Calificación</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                            <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                           <th></th>
                          <th></th>
                      </tr>
                  </tfoot>
                  <tbody>
                      <tr>
                          <td>#</td>
                          <td>#</td>
                          <td>#</td>
                          <td>#</td>
                          <td>#</td>
                          <td>#</td>
                      </tr>
                  </tbody>
              </table>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            </div>
            <!-- /.box-body -->
          </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->

        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-12 connectedSortable"> 
          <!-- Map box -->
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <!-- tools box -->
              <!-- /. tools -->
              <i class="glyphicon glyphicon-education"></i>
              <h3 class="box-title">
                Mapa curricular
              </h3>
            </div>
              <div class="box-body">
                <form action="" method="post">
                    <div class=" form-group pull-right" >
                        <div class="col-md-6">
                          <input type="text" name="txtbus" class="form-control" placeholder ="no Control">
                        </div>
                          <div class="col-md-6">
                        <button type="submit" name="btn1" value="Buscar"  class="btn btn-primary pull-center"><i class="glyphicon glyphicon-search"></i> Buscar alumno</button>
                        </div>
                      </div>
                    </form>
                <div id="#" style="height: 250px; width: 100%;">
                <div class="knob-label">
                    <table class="table table-hover">
                     <thead>
                            <th>Matricula</th>
                            <th>Nombre</th>
                            <th>Carrera</th>
                            <th>Avance curricular</th>
                            <th>Materias Faltantes</th>
                            <th>Grupo</th>
                      </thead>
                              <?php
                                  if(isset($_POST["btn1"])){
                                    $btn=$_POST["btn1"];
                                    $bus=$_POST["txtbus"];
                                    if($btn=="Buscar"){
                                              $fila=array();
                                              $filaM=array();
                                              $filaC=array();

                                              $filaR=array();
                                              $filaR1=array();
                                              $filaC2=array();
                                              //segundo print
                                              $result_array = array();//numero de materias cursadas
                                              $j=0;
                                              $i=0;
                                      // Programa: Conteo de materias cursadas ........
                                      // Valores obtenidos : numero de materias cursadas ......
                                            // $sentencia = "SELECT DescMateria FROM materias where creditos = 5 ";
                                            //     if(!($resultado = @mysqli_query($con, $sentencia))) 
                                        
                                 
                                                $jConteo=0;
                                                $conte = "SELECT MATERIA FROM alumnosgeneral where MATRICULA = '$bus'";

                                                if(!($contResultado = @mysqli_query($con, $conte))) 
                                                { echo "<p>Error al ejecutar la sentencia <b>$conte</b>: "
                                                . mysqli_error($con); echo '</p>'; exit; }
                                                while($conteotabl =  mysqli_fetch_array($contResultado, MYSQLI_NUM)) { 
                                                  $jConteo++;
                                                  $conteotab[$jConteo]=$conteotabl;
                              
                                               }
                                                
                          

                                              $sentencia = "SELECT * FROM alumnosgeneral where matricula = '$bus'";
                                                  if(!($resultado = @mysqli_query($con, $sentencia))) 
                                                  { echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: "
                                                  . mysqli_error($con); echo '</p>'; exit; }
                                                  while($fila = mysqli_fetch_assoc($resultado)) { 
                                                   echo "<tr>";
                                                              $reg=  utf8_encode($fila['ALUMNO']);
                                                              $reg1= $fila['MATRICULA'];
                                                              $reg2= $fila['NOMCAR'];
                                                              $reg3= $fila['GRUPO'];
                                               
                                                  } 
                                                  $a=" <td  class='active'>";
                                                  $aa=" <td  class='success'>";
                                                  $b="</td>";
                                          
                                                  echo "$a $reg1 $b ";
                                                  echo "$aa $reg $b ";
                                                  echo "$a $reg2 $b ";
                                                  echo $aa;
                                                    echo count($conteotab);
                                                  echo  $b;
                                                  echo "$a  $b ";
                                                  echo "$aa $reg3 $b ";
                                                 
                                                  //  echo $aa;
                                                  //   echo "$falta";
                                                  // echo  $b;
                                                  echo '</tr>';
                                         ///....................
                                     // FIN CONSULTA DATOS ALUMNO
                                      
                                            }
                                           //  mysqli_close($con); //cerrar conexion
                                        }
                                ?>
                            <!-- Aplicadas en las celdas (<td> o <th>) -->
                            </tr>
                          </tbody>
                    </table>
              </div>
            <!-- /.box-body-->
            <!--Materias cursadas-->
             <div class="box-footer no-border">
              <div class="row">
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div class="knob-label">
                   <table class="table table-hover"><h3>Materias Cursadas</h3>
                    <thead>
                          <th>Materia</th>
                    </thead>
                        <tbody>
                          <!-- Aplicadas en las celdas (<td> o <th>) -->
                             <?php
                                $a=" <td  class='active'>";
                                $aa=" <td  class='success'>";
                                $aaaa= " <td  class='info'>";
                                $b="</td>";
                                if(isset($_POST["btn1"])){
                                  $btn=$_POST["btn1"];
                                  $bus=$_POST["txtbus"];
                                  if($btn=="Buscar"){
                                                $NumMatCur=0;
                                                $contadorM=0;
                                                $array_materias=array();
                                                $array_temp=array();
                                                $jMer=0;
                                                $sentencia = "SELECT MATERIA FROM alumnosgeneral where MATRICULA = '$bus'";

                                                if(!($resultado = @mysqli_query($con, $sentencia))) 
                                                { echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: "
                                                . mysqli_error($con); echo '</p>'; exit; }
                                                while($fila =  mysqli_fetch_array($resultado, MYSQLI_NUM)) { 
                                                  $jMer++;
                                                  $result_array[$jMer]=$fila;
                                                  $tr = "<tr>";
                                                  $trc="</tr>";
                                                  echo $tr.$aa;
                                                  echo utf8_encode($fila[0]);
                                                  echo $b.$trc;
                                               }
                                                $NumMatCur= count($result_array); 
                                                 echo"<h3 id='coutMaterias'>";
                                                   echo $NumMatCur;
                                                 echo"</h3><hr>";                         
                                          }
                                      }
                              ?>
                        </tbody>
                    </table>
                  </div>
                </div>
                <!-- ./col -->
                <!--Materias reprobadas-->
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div id="#"></div>
                  <div class="knob-label">
                    <table class="table table-hover"><h3>Materias reprobadas</h3>
                    <thead>
                          <th>Materia</th>
                          <th>Cuatrimestre</th>
                    </thead>
                        <tbody>
                          <!-- Aplicadas en las celdas (<td> o <th>) -->
                          <tr>
                               <?php
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
                                                   
                                                $array_Rep= array();
                                                $sentenciaR = "SELECT materia FROM alumnosgeneral where matricula = '$bus' and calfinal <=5";
                                                //$SentenciaS = "";

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
                                ?>
                         
                          </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
                <!-- ./col -->
                <!--Materias por cursar-->
                <div class="col-xs-4 text-center">
                  <div id="#"></div>
                  <div class="knob-label">
                   <table class="table table-hover"><h3>Materias por cursar</h3>
                    <thead>
                          <th>Materia</th>
                          <th>Cuatrimestre</th>
                    </thead>
                        <tbody>
                          <!-- Aplicadas en las celdas (<td> o <th>) -->
                          <tr>
                              <?php
                             // header('cotent-type:application/json; charset=utf-8');
    
                                if(isset($_POST["btn1"])){
                                  $btn=$_POST["btn1"];
                                  $bus=$_POST["txtbus"];
                                  if($btn=="Buscar"){
                                    //Creacion de tablas temporales 
                                    $materiasCarrera = "create temporary table sgudl.materiasCarrera 
                                    select nombre_materia, semestre_materia from sgudl.materias where id_materia like 'C%' ORDER BY semestre_materia;";
                                    if (!$con->query($materiasCarrera))
                                    {
                                        echo "Falló la creación de la tabla: (" . $con->errno . ") " . $con->error;
                                    }

                                    $materiasCursadas = "create temporary table sgudl.materiasCursadas
                                    select materia from sgudl.alumnosgeneral where MATRICULA = '$bus'";
                                    if (!$con->query($materiasCursadas))
                                    {
                                        echo "Falló la creación de la tabla: (" . $con->errno . ") " . $con->error;
                                    }

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
                                    //Se imprimen materias por cursar
                                    $NumMatCursar = 0;
                                    while ($fila2 = $resultadoPorCursar->fetch_assoc()) {
                                      $NumMatCursar++;
                                      echo $aaaa;
                                      echo utf8_encode($fila2['nombre_materia']);
                                      echo $b;
                                      echo $aaaa;
                                      echo utf8_encode($fila2['semestre_materia'])."°"; 
                                      echo $b.$trc; 
                                    }
                                    echo "<h3>";
                                    echo $NumMatCursar;
                                    echo "</h3> <hr>" ;   
                                  }
                                }
                              ?>
                         
                          </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->

          <!-- solid sales graph -->
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
    </section>
    <!-- End page -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.7
    </div>
    <strong class="text-center">Copyright &copy; 2016 <a href="#">Sistemas de Gesion UDL</a>.</strong> Itgam
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../Content/Vendor/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https:/code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="../Content/Vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https:/cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../Content/Vendor/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="../Content/Vendor/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../Content/Vendor/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../Content/Vendor/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../Content/Vendor/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https:/cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../Content/Vendor/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../Content/Vendor/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../Content/Vendor/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../Content/Vendor/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../Content/Vendor/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../Content/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../Content/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../Content/js/demo.js"></script>
</body>
</html>

     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
	<style type="text/css" class="init">

	</style>
	<script type="text/javascript" src="/media/js/site.js?_=fdce5da0aafc74f877db6a1772eccba9">
	</script>
	<script type="text/javascript" src="/media/js/dynamic.php?comments-page=examples%2Fbasic_init%2Fzero_configuration.html" async>
	</script>
	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.3.js">
	</script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="../resources/demo.js">
	</script>




