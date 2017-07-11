<?php 
session_start(); //session_start() crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie 
include_once "./web.config/conection.php"; //es la sentencia q usaremos para incluir el archivo de conexión a la base de datos que creamos anteriormente.
/*Función verificar_login() --> Vamos a crear una función llamada verificar_login, esta se encargara de hacer una consulta a la base de datos para saber si el usuario ingresado es correcto o no.*/

function verificar_login($user,$password,&$result) 
    { 
      $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME); 
        $sql = "SELECT * FROM user WHERE username = '$user' and thein = '$password'";
        $rec = mysqli_query($con,$sql); 
        $count = 0; 
        while($row = mysqli_fetch_array($rec)) 
        { 
            $count++; 
            $result = $row;
            echo $count; 
        } 
        if($count >= 1) 
        { 
            return 1; 
        } 
        else 
        { 
            return 0; 
        } 
    } 

/*Luego haremos una serie de condicionales que identificaran el momento en el boton de login es presionado y cuando este sea presionado llamaremos a la función verificar_login() pasandole los parámetros ingresados:*/

if(!isset($_SESSION['userid'])) //para saber si existe o no ya la variable de sesión que se va a crear cuando el usuario se logee
{ 
    if(isset($_POST['login'])) //Si la primera condición no pasa, haremos otra preguntando si el boton de login fue presionado
    { 
        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1) //Si el boton fue presionado llamamos a la función verificar_login() dentro de otra condición preguntando si resulta verdadero y le pasamos los valores ingresados como parámetros.
        { 
            /*Si el login fue correcto, registramos la variable de sesión y al mismo tiempo refrescamos la pagina index.php.*/
            $_SESSION['userid'] = $result->idusuario; 
            header("location:./Views/index.php"); 
        } 
        else 
        { 
            echo '<div class="btn btn-warning">Su usuario es incorrecto, intente nuevamente.</div>'; //Si la función verificar_login() no pasa, que se muestre un mensaje de error.
        } 
    } 
?>
<!DOCTYPE html>
<html class="color-html-template">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Universidad de Londres</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href="http://www.udlondres.com/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="Content/Vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="Content/css/AdminLTE.min.css">
  <link rel="stylesheet" href="Content/Vendor/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="Content/css/them-custom.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page color-html-template">
<div class="login-box login-paddin">
  <div class="login-box-body">
    <div class="login-logo">
    <img src="Content/img/logo.png" alt="">
  </div>
    <p class="text-left">Firmate para iniciar seción</p>

    <form action="" method="post" class="circle-border">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Usuario" name="user" tabindex="1">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <a href="#" class="pull-right olvide-contrasenia cboxElement">Recuperar contraseña</a><br>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña" name="password" tabindex="2">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8" style="display:none;">
            <label>
              <input type="checkbox"> Recordar usuarios
            </label>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <input type="submit" class="btn btn-primary btn-block btn-flat" name="login" value="Iniciar" tabindex="3"></button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
</div>
<?php 
} else { 
    // Si la variable de sesión ‘userid’ ya existe, que muestre el mensaje de saludo. 
    echo 'Su usuario ingreso correctamente.'; 
    echo '<a href="./web.config/logout.php">Logout</a>'; 
} 
?> 

<!-- Start scripts -->
<script src="../Content/Vendorplugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="../Content/Vendorbootstrap/js/bootstrap.min.js"></script>
<script src="../Content/Vendorplugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
