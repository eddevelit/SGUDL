<!DOCTYPE html>
<html>
<head>
   <link rel="icon" href="http:/www.udlondres.com/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="../Content/Vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https:/cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https:/cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../Content/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../Content/css/skins/skin-udl.css">
  <link rel="stylesheet" href="../Content/Vendor/plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="../Content/Vendor/plugins/morris/morris.css">
   <link rel="stylesheet" href="../Content/Vendor/plugins/morris/morris.min.js">
  <link rel="stylesheet" href="../Content/Vendor/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="../Content/Vendor/plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="../Content/Vendor/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../Content/Vendor/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <?php include '../Content/Vendor/Datatables/javascript/datatable.php'; ?>
  <script type="text/javascript" src="../Content/Vendor/Datatables/javascript/js.js"></script>
  <script type="text/javascript" >
    $(document).ready(function() {
    listarB();
} );

var listarB = function(){
    var table = $("#tblAlumnosNC").DataTable({
    	"bDeferRender": true,
		"oLanguage": {
		"sLoadingRecords": "Por favor espera Cargando...",
		"sEmptyTable":"No se encontraron registros",
		"sInfo": "Mostrando registros del _START_  al _TOTAL_ <br> Total de registros: _END_",
		"sSearch": "Filtro:",
		"sLengthMenu": "Mostrar _MENU_",
		"oPaginate": {
			"sLast": "Última página",
			"sFirst": "Primera",
			"sNext": "<b>></b>",
			"sPrevious": "<b><</b>"
			}
		},
        "ajax":{
            "method":"POST",
            "url":"../web.config/consulta.php"
        },
        "columns":[
                            {"data":"MATRICULA"},
                            {"data":"ALUMNO"},
                            {"data":"GRUPO"},
                            {"data":"EDAD"},
                            {"data":"DELEGACION"},
                            {"data":"ESCPROC"},
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
              <li class="active"><a href="index.php"><i class="fa fa-circle-o"></i> Catalogos</a></li>
              <li><a href="./FiltroAlumnos.php"><i class="fa fa-circle-o"></i> Filtro de alumnos</a></li>
              <li><a href="./vistaCarreras/filtro.php"><i class="fa fa-circle-o"></i> Filtro por Carrera</a></li>
            </ul>
          +</li>
          <li class="treeview">
            <a href="ImportarExcel.php">
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="text-center" style="font:serif;">
        Filtro de Alumnos
         <hr style="#d9534f">
        <small></small>
       
      </h1 style="color:red">
    </section>
    <!-- Start page -->
   <?php //include 'ViewsTables/tblAlumnosMC.php';?>
    <div class="box box-primary">
        <div class="box-header ">
            <i class="ion ion-clipboard"></i>
            <h3 class="box-title">Alumnos <small>Materias no cursadas.</small></h3>
            <table id="tblAlumnosNC" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Metricula</th>
                          <th>Alumno</th>
                          <th>GRUPO</th>
                          <th>Edad</th>
                           <th>Delegacion</th>
                          <th>Escuela de Procedencia</th>
                          <th>Cliclo</th>
                          <th>Materia</th>
                          <th>Calificación</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
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




