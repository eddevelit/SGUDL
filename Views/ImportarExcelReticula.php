<?php
 		session_start();
		$conexion = mysql_connect("localhost","root","");
    mysql_query("SET NAMES 'UTF8'");
		mysql_select_db("sg_udl",$conexion);


     //
    // define('DB_SERVER','localhost'); 
    //   define('DB_NAME','sg_udl'); 
    //   define('DB_USER','root'); 
    //   define('DB_PASS',''); 

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href="http://www.udlondres.com/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="../Content/Vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../Content/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../Content/css/skins/skin-udl.css">
  <link rel="stylesheet" href="../Content/css/them-custom.css">
  <link rel="stylesheet" href="../Content/Vendor/plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="../Content/Vendor/plugins/morris/morris.css">
  <link rel="stylesheet" href="../Content/Vendor/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="../Content/Vendor/plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="../Content/Vendor/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../Content/Vendor/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
 

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
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>

          <!-- Notifications: style can be found in dropdown.less -->


                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">UDL gestion de CArgas academicas</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
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
                    <a href="#">Correo</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="" class="btn btn-default btn-flat">Salir</a>
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
             <li class="active"><a href="./index.php"><i class="fa fa-circle-o"></i> Catalogos</a></li>
              <li><a href="./FiltroAlumnos.php"><i class="fa fa-circle-o"></i> Filtro de alumnos</a></li>
              <li><a href="./vistaCarreras/filtro.php"><i class="fa fa-circle-o"></i> Filtro por Carrera</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="./ImportarExcel.php">
            <i class="fa fa-files-o"></i>
            <span>Actualizar BD</span>
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="text-center">
        Incorporar Reticulas
      </h1>

    </section>

    <!-- Start page -->
   <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header">
              <!--<h3 class="box-title">Importar Excel</h3>-->
              <hr class="col-xs-12 line-heading">
            </div>
            <div class="box-body">
              <form action="" method="post" enctype="multipart/form-data" name="form1">
                <div class="form-group">
                    <p> &nbsp&nbsp&nbsp&nbspCargar archivo en formato .xlsx ó .xls:</p>
                </div>
                <div class="col-md-6">
                  <input type="file" name="archivo" id="archivo" class="btn btn-default">
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <strong>Desea Actualizar la BD</strong>
                    <label><input type="radio" name="radio" value="s"  checked/>Sí</label>
                    <label><input type="radio" name="radio" value="n" />No</label>
                    <input type="submit" name="button" id="button" class="btn btn-primary" value="Actualizar">
                  </div>
                </div>
                 
            </form>
            </div>
            <hr>
            <p class="text-center">
                  <small >Antes de ingresar verifique que se cuente con una extención ".xlsx ó .xls" el archivo.</small>
            </p>
          </div>

        </div>
      </div>
<?php
	if(isset($_POST['radio'])){
		//subir la imagen del articulo
		$nameEXCEL = $_FILES['archivo']['name'];
		$tmpEXCEL = $_FILES['archivo']['tmp_name'];
		$extEXCEL = pathinfo($nameEXCEL);
		$urlnueva = "xls/UDL.xlsx";

		if(is_uploaded_file($tmpEXCEL)){
			copy($tmpEXCEL,$urlnueva);
			if($_POST['radio']=='s'  && empty($_POST['archivo'])){
				echo ' <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Éxito!</strong> <br>
                    Se han cargado todos los registros del Excel a la base de datos.
               </div>';
			}
			if($_POST['radio']=='n'  && empty($_POST['archivo'])) {
				echo ' <div class="alert alert-info alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Éxito!</strong> <br>
                    Se han cargado todos los registros del Excel.
               </div>';
			}
      

		}
   
	}
  
?>
<?php 
  if(isset($_POST['button']) && !empty($_POST['archivo']) && $_POST['radio']!= 'n')
  {
    echo ' <div class="alert alert-warning alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Alerta!</strong> <br>
                  No se ha cargado ningún archivo.
            </div>';
  }
  if(isset($_POST['button']) && !empty($_POST['archivo']) && $_POST['radio']!= 's')
  {
    echo ' <div class="alert alert-warning alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Alerta!</strong> <br>
                  No se ha cargado ningún archivo.
            </div>';
  }
?>
  <div class="box"> 
    <div class="box box-body">
    <table id="alumnos" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
      <thead>
        	<tr class="info">
            	<th class="text-center">Materia</th>
              <th class="text-center">Clave</th>
              <th class="text-center">Tipo de bloque</th>
              <th class="text-center">Creditos</th>
               <th class="text-center">Intalaciones</th>
              <th class="text-center">Horas Docente</th>
              <th class="text-center">Horas Indepen</th>
            </tr>
      </thead>
      <tbody>
          <?php

              if(isset($_POST['radio'])){
                
                require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';

                $objPHPExcel = PHPExcel_IOFactory::load('xls/UDL.xlsx');
                $objHoja=$objPHPExcel->getActiveSheet()->toArray(null,true,true,true,true,true,true);
                foreach ($objHoja as $iIndice=>$objCelda) {

                    $DescMateria    = $objCelda['A'];
                    $Clave          = $objCelda['B'];
                    $HorDoc         = $objCelda['C'];
                    $HorInd         = $objCelda['D'];
                    $Creditos       = $objCelda['E'];
                    $Instalaciones  = $objCelda['F'];
                    $TipoBloque     = $objCelda['G'];
                    						



                    if($DescMateria != 'Materia' && $Clave != 'CLAVE' && $HorDoc != 'HORAS Docente' &&	 $HorInd != 'Horas Independientes' && $Creditos != 'CREDITOS' && $Instalaciones != 'INSTALACIONES'
                      && $TipoBloque != 'Tipo Bloque' )
                    {
                       if ($_FILES['archivo']['size'] != 0)
                       {
                            echo '
                                <tr>
                                 <td>'.$DescMateria.'</td>
                                  <td>'.$Clave.'</td>
                                  <td>'.$TipoBloque.'</td>
                                  <td>'.$Creditos.'</td>
                                  <td>'.$Instalaciones.'</td>
                                  <td>'.$HorDoc.'</td>
                                  <td>'.$HorInd.'</td>

                                </tr>
                            ';
                       }
                        
                    }
                   
                  if ($_FILES['archivo']['size'] != 0)
                  {
                    if($_POST['radio']=='s'){
                        $sql="INSERT INTO materias
                                       (Clave  , TipoBloque , Creditos , Instalaciones , DescMateria , HorDoc , HorInd)
                              VALUES ('$Clave','$TipoBloque','$Creditos','$Instalaciones','$DescMateria','$HorDoc','$HorInd')";
                              mysql_query($sql);                    
                    }
                  }
                  
                }                
              }               
            ?>
        </tbody>
      </table>
  </div>
  </div>
    </section>

    <!-- End page -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.7
    </div>
    <strong class="text-center">Copyright &copy; 2016 <a href="#">Sistema de Gestion UDL</a>.</strong> All rights
    reserved.
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script>  
$('#button').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Botón que activó el modo modal
  var recipient = button.data('whatever') // Extrae información de datos- * atributos
   // Si es necesario, puede iniciar una solicitud AJAX aquí (y luego hacer la actualización en una devolución de llamada).
   // Actualizar el contenido del modal. Usaremos jQuery aquí, pero podrías usar una biblioteca de enlace de datos u otros métodos.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap4.min.js"></script>
<script src="../Content/Vendor/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="../Content/Vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../Content/Vendor/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="../Content/Vendor/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../Content/Vendor/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../Content/Vendor/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../Content/Vendor/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
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