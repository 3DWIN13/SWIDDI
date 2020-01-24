<?php
/*       foreach ($swiddi1 as $key) {
    //     echo $key;
         var_dump($key->Tables_in_swiddi1);
       }*/   
       //echo $_POST['editar'];
       $str = explode(",",$_POST['editar']);
//echo $str[1];
$str2 = $str[1];
//echo $str2;
       $datos = array();

       $str3=$str[0];
       //echo $str3;
      // echo $str2;

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
          <li><a href="#">Crear trabajos</a></li>
          <li><a href="http://localhost/SWIDDI/ControlUsuarios">Pagina de usuario</a></li>
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
            <h3 class="section-title">editor de trabajos</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Edita los Empleos cambiando las informaciones</p>
          </div>
        </div>

        <div class="row">

        </div>
      </div>
      <div class="form">
        <form action="http://localhost/SWIDDI/ControlEdit/editaruntrabajo" class="form_contact" method="post">
          <div class="form-group">
          
            
<?php foreach ($tabla as $key) {
    
 ?>
            
          </div>
          <div class="form-group">
            <input style="width:50%;margin-left:25%; text-align:center" type="text" readonly="readonly" name="tabla" class="form-control" id="tabla" value="<?=  $key->category ?>"  placeholder="categoria"   />
          </div>
            
             
          </div>
          <div class="form-group">
            <input style="width: 50%;margin-left:25%; text-align:center" type="text" name="location" class="form-control" id="location" placeholder="Localidad del trabajo"  value="<?=  $key->location ?>" required />
          </div>

          <div class="form-group">
            <input style="width: 50%;margin-left:25%; text-align:center" type="text" name="position" class="form-control" id="position" placeholder="Posicion en el empleo" value="<?=  $key->position ?>" required />
          </div>

          <div class="form-group">
            <input style="width: 50%;margin-left:25%; text-align:center" type="text" name="company" class="form-control" id="company" placeholder="Compañia que ofrece el empleo" value="<?=  $key->company ?>" required />
          </div>

          
          <div class="form-group">
            <textarea style="resize: none;width: 50%;margin-left:25%; text-align:center" type="text" name="description" class="form-control" id="description" placeholder="Descripcion" required ><?=  $key->description ?></textarea>
          </div>

          
          <div class="form-group">
            <input style="width: 50%;margin-left:25%; text-align:center" type="text" name="howtoapply" class="form-control" id="howtoapply" placeholder="Como aplicar al trabajo" value="<?=  $key->howtoapply ?>" required />
          </div>

<?php } ?>  
     <input type="hidden" value="<?php echo $str3 ?>" name="id2" id="id2">
     <input type="hidden" value="<?php echo $str2 ?>" name="tabla2" id="tabla2">
        <!--   <div class="form-group">
            <input style="width: 50%;margin-left:25%; text-align:center" type="text" name="category" class="form-control" id="category" placeholder="" required />
          </div>-->
          <br>
          <div class="text-center"><button type="submit" class="btn btn-primary">actualizar trabajo</button></div>
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