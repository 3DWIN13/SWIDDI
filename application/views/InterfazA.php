<?php
/*foreach ($sysobjects as $key) {
   #code...
  var_dump($key);
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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src='main.js'></script>

    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <style type="text/css">
		
		</style>

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
        <li class="menu-active"><a href="http://localhost/SWIDDI/ControlAdmin">inicio</a></li>
        <li><a href="http://localhost/SWIDDI/ControlTrabajos">Crear categorias</a></li>
          <li><a href="http://localhost/SWIDDI/ControlCreacion">Crear trabajos</a></li>
          <li><a href="http://localhost/SWIDDI/ControlUsuarios">Pagina de usuario</a></li>
          <li><a href="http://localhost/SWIDDI">salir</a></li>
        </ul>
      </nav>
      
    </div>
  </header>
 
  <?php
  
  /***************
   * 
   * 
   * ********************** */

  $data = array();

  /*$datos['sysobjects'] = $this->Modelo->cargar2();*/
  
  

  $datos = array();

  $datos['swiddi1'] = $this->Modelo->cargar();
  foreach ($datos['swiddi1'] as $key){ ?>
  <br>
    <br>
    <h2 style="text-align: center; border:1px solid;"> <?=$key->Tables_in_swiddi1?> </h2>
    
    
    <div class="container">
  <div class="row align-items-center">
    <div class="col" style="border:1px solid;backgroud:#111">
      # 
    </div>
    <div class="col" style="border:1px solid;backgroud:#111">
    Location
    </div>
    <div class="col" style="border:1px solid;backgroud:#111">
    Position
    </div>
    <div class="col" style="border:1px solid;backgroud:#111">
    Company
    </div>
    <div class="col" style="border:1px solid;backgroud:#111">
    Description
    </div>
    <div class="col" style="border:1px solid;backgroud:#111">
    How to apply
    </div>
    <div class="col" style="border:1px solid;backgroud:#111">
    Category
    </div>
  </div>
</div>

<?php
  $data['objects'] = $this->Modelo->cargar2($key ->Tables_in_swiddi1);
  foreach ($data['objects'] as $key){
  
  ?>
 
 <div class="container">
  <div class="row align-items-center">
    <div class="col">
    <?=$key->id?>
    </div>
    <div class="col">
    <?=$key->location?>
    </div>
    <div class="col">
    <?=$key->position?>
    </div>
    <div class="col">
    <?=$key->company?>
    </div>
    <div class="col">
    <?=$key->description?>
    </div>
    <div class="col">
    <?=$key->howtoapply?>
    </div>
    <div class="col">
    <?=$key->category?>
    </div>
  </div>
</div>


<?php } ?>
   <?php } ?>

    
   
   


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