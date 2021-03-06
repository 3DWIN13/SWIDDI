<?php
/*       foreach ($swiddi1 as $key) {
    //     echo $key;
         var_dump($key->Tables_in_swiddi1);
       }*/   
            ?>
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
  <link href="css/diseño.css" rel="stylesheet">

 

</head>

<body>
  <!--==========================
  Header Section
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="http://localhost/SWIDDI"><img src="img/logo.png" alt="" title="" /></img></a>

      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="http://localhost/SWIDDI/ControlAdmin">Inicio</a></li>
          <li><a href="http://localhost/SWIDDI/ControlTrabajos">Crear categorias</a></li>
          <li><a href="#">Crear trabajos</a></li>
          <li><a href="http://localhost/SWIDDI/ControlUsuarios?pagina=1">Pagina de usuario</a></li>
          <li><a href="http://localhost/SWIDDI">Salir</a></li>
        </ul>
      </nav>

    </div>
  </header>

  <div class="col-md-12">

    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <div>
              .
      </div>
            <h3 class="section-title">Creación de trabajos</h3>
            <div class="section-title-divider"></div>
            <div>
              .
      </div>
            <p class="section-description">Crea los empleos seleccionando las categorias y llenando las informaciones.</p>
          </div>
        </div>

        <div class="row">

        </div>
      </div>
      <div class="form">
        <form action="http://localhost/SWIDDI/ControlCreacion/guardar" class="form_contact" method="post">
          <div class="form-group">
            <select class="form-control" style="width: 50%; margin-left:25%; text-align:center;
            
  
            padding: 10px;
            border: 2px solid black;
            font-weight: 600;
            background-color: white;
            color:black;
            border-radius: 8px; text-align:center; border-color: turquoise;" name="cbo" id="cbo">
            

            <?php foreach($swiddi1 as $key): ?>
              <option value="<?php $c= $key->Tables_in_swiddi1;$c1=trim($c,"'"); echo $c1; ?>"><?php $c= $key->Tables_in_swiddi1;$c1=trim($c,"'");echo $c1; ?></option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="form-group">
            <input style="width: 50%; margin-left:25%; text-align:center;
            
  
  padding: 10px;
  border: 2px solid black;
  font-weight: 600;
  background-color: white;
  color:black;
  border-radius: 8px; text-align:center; border-color: turquoise;" type="text" name="location" class="form-control" id="location" placeholder="Localidad del trabajo"  required />
          </div>

          <div class="form-group">
            <input style="width: 50%; margin-left:25%; text-align:center;
            
  
            padding: 10px;
            border: 2px solid black;
            font-weight: 600;
            background-color: white;
            color:black;
            border-radius: 8px; text-align:center; border-color: turquoise;" type="text" name="position" class="form-control" id="position" placeholder="Posicion en el empleo" required />
          </div>

          <div class="form-group">
            <input style="width: 50%; margin-left:25%; text-align:center;
            
  
            padding: 10px;
            border: 2px solid black;
            font-weight: 600;
            background-color: white;
            color:black;
            border-radius: 8px; text-align:center; border-color: turquoise;" type="text" name="company" class="form-control" id="company" placeholder="Compañia que ofrece el empleo" required />
          </div>


          
          <div class="form-group">
            <input style="width: 50%; margin-left:25%; text-align:center;
            
  
            padding: 10px;
            border: 2px solid black;
            font-weight: 600;
            background-color: white;
            color:black;
            border-radius: 8px; text-align:center; border-color: turquoise;" type="text" name="howtoapply" class="form-control" id="howtoapply" placeholder="Como aplicar al trabajo" required />
          </div>

          
          
          <div class="form-group">
            <textarea style="width: 50%; margin-left:25%; text-align:center;
            
  
            padding: 10px;
            border: 2px solid black;
            font-weight: 600;
            background-color: white;
            color:black;
            border-radius: 8px; text-align:center; border-color: turquoise;" type="text" name="description" class="form-control" id="description" placeholder="Descripcion" required ></textarea>
          </div>
          
          <br>
          <div class="text-center"><button type="submit" class="btn btn-primary">Guardar trabajo</button></div>
        </form>
      </div>
    </section>
  </div>

  <!--==========================
                                                Footer  `id` int(11) NOT NULL AUTO_INCREMENT,
                                                          `location` varchar(100) NOT NULL,
                                                          `position` varchar(100) NOT NULL,
                                                          `company` varchar(100) NOT NULL,
                                                          `description` varchar(100) NOT NULL,
                                                          `howtoapply` varchar(200) NOT NULL,
                                                          `category` varchar(50) NOT NULL,
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