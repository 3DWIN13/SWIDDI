
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>SWIDDI</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/estilo.css" rel="stylesheet">

</head>
<body>
<div class="login-box">

<h1>Login Here</h1>
<form action="http://localhost/SWIDDI/ControlLogin/diklogin" method="POST">

<!-- USUARIO -->
<label for="username">Usuario</label>
<input type="text" name="username" id="username" placeholder="Ingrese su usuario" required>

<!-- CONTRA -->
<label for="password">Contraseña</label>
<input type="password" name="password" id="password" placeholder="Ingrese su contraseña" required> 

<!-- BOTON -->

<input type="submit"  value="Iniciar Sesion">


<a href="http://localhost/SWIDDI/ControlUsuarios?pagina=1">Pagina de usuarios</a><br>
<a href="http://localhost/SWIDDI">Volver</a>

</form>
</div>
<!--division--->
    
  <!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>ITLA GROUP</strong>. TODOS LOS DERECHOS ABIERTOS
          </div>
          <div class="credits">
           
            
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
 
 <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>

</body>

</html>