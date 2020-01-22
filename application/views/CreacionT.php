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

</head>

<body>
  <!--==========================
  Header Section
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>

      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="http://localhost/SWIDDI/ControlAdmin">inicio</a></li>
          <li><a href="http://localhost/SWIDDI/ControlTrabajos">Crear categorias</a></li>
          <li><a href="http://localhost/SWIDDI/ControlCreacion">Crear trabajos</a></li>
          <li><a href="http://localhost/SWIDDI/ControlUsuarios">Pagina de usuario</a></li>
          <li><a href="http://localhost/SWIDDI">salir</a></li>
        </ul>
      </nav>

    </div>
  </header>

  <div class="col-md-12">

    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Nombra tu categoria</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Escribe el nombre de la categoria de un empleo que deseas crear</p>
          </div>
        </div>


      </div>
      <div class="form">
        <form action="http://localhost/SWIDDI/ControlTrabajos/crearT" class="form_contact" method="post">
          <div class="form-group">

            <input style="width: 50%;margin-left:25%; text-align:center; border-color: turquoise;" type="text" class="form-control" id="NombreCategoria" name="NombreCategoria" placeholder="Nombre de la categotia" required>
            <div class="invalid-feedback">
            </div>
            <br>
            <div class="text-center"><button type="submit" class="btn btn-primary">Guardar categorias</button></div>
        </form>
      </div>
    </section>
  </div>

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