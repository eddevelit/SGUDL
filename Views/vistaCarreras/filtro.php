<?php
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
              <span style="color:#d9534f; font-weight:900">Actualizacion de BD</span>
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
      <h1>Control panel
        <small></small>
      </h1>
    </section>
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
      
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <i class=" glyphicon glyphicon-resize-small"></i>
              <i class=" glyphicon glyphicon-search"></i>
              <h3 class="box-title">
                Busqueda ràpida
              </h3>
            </div>
            <div class="box-body">
                <div id="#" style="height: 250px; width: 100%;"> 
                 <?php include '../ViewsTables/tblAlumnosMC.php';?>              
                     <!--<form action="">
                        <div class=" form-group pull-right" >
                            <div class="col-md-6">
                              <input type="text" class="form-control" placeholder ="no Control">
                            </div>
                              <div class="col-md-6">
                            <button type="button" class="btn btn-primary pull-center"><i class="glyphicon glyphicon-search"></i> Buscar alumno</button>
                            </div>
                          </div>
                    </form>
                    <table class="table table-hover">
                            <thead>
                                  <th>Alumno <i class="glyphicon glyphicon-user"></i></th>
                                  <th>Activo <i class="glyphicon glyphicon-exclamation-sign"></i></th>
                                   <th>Grupo <i class="glyphicon glyphicon-inbox"></i></th>
                            </thead>
                                  Aplicadas en las celdas (<td> o <th>) 
                                  <tr>
                                    <td class="active">...</td>
                                    <td class="success">...</td>
                                    <td class="active">...</td>
                                
                                  </tr>
                                    <tr>
                                    <td class="active">...</td>
                                    <td class="success">...</td>
                                    <td class="active">...</td>
                                
                                  </tr>
                                </tbody>
                        </table>-->
                </div>
               </div>
            </div>
            <!-- /.box-body-->
            <div class="box-footer no-border">
              <div class="row">
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">     
                  <div class="knob-label">
                  ///tabla  
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div id="#"></div>
                  <div class="knob-label">
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center">
                  <div id="#"></div>
                  <div class="knob-label">4</div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->
          <!-- solid sales graph -->
          <div class="box box-solid bg-teal-gradient">
            <div class="box-header">
              <i class="fa fa-th"></i>
              <h3 class="box-title">Alumnos en foco rojo</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <!--<button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>-->
                </button>
              </div>
            </div>
            <div class="box-body border-radius-none">
              <div class="chart" id="line-chart" style="height: 250px;">
                    <table class="table table-hover">
                            <thead>
                                  <th>Alumno <i class="glyphicon glyphicon-user"></i></th>
                                  <th>Situacion <i class="glyphicon glyphicon-certificate"></i></th>
                                   <th>Fecha <i class="glyphicon glyphicon-calendar"></i></th>
                            </thead>
                                  <!-- Aplicadas en las celdas (<td> o <th>) -->
                                  <tr>
                                    <td class="active">...</td>
                                    <td class="success">...</td>
                                    <td class="active">...</td>
                                  </tr>
                                    <tr>
                                    <td class="active">...</td>
                                    <td class="success">...</td>
                                    <td class="active">...</td>
                                  </tr>
                                </tbody>
                        </table>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-border">   
              <div class="row">
                <div class="col-xs-6 text-center" style="border-right: 1px solid #f4f4f4">
                  <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC">
                  <div class="knob-label"><h4>Faltas</h4></div>
                </div>
                <!-- ./col -->
                <div class="col-xs-6 text-center" style="border-right: 1px solid #f4f4f4">
                  <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC">
                  <div class="knob-label"><h4>Reprovados</h4></div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
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



