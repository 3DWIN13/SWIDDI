<?php

$data = array();

//$datos['sysobjects'] = $this->Modelo->cargar2();


$i = 0;
$datos = array();

$datos['swiddi1'] = $this->Modelo->cargar();
foreach ($datos['swiddi1'] as $key) {
  // echo $key;
  // var_dump($key ->Tables_in_swiddi1);
  // $data = array();
  $i++;
  $data['objects'] = $this->Modelo->cargar2($key->Tables_in_swiddi1);
  foreach ($data['objects'] as $key) {
    # code...
    //var_dump($key);



  }
  //var_dump($data);
  //var_dump($datos);
}

$configB;

if (isset($_COOKIE["saladita"])) {
  $configA = $_COOKIE["saladita"];
} else {
  $configA = 2;
}


$p = $i / $configA;

$paginas = ceil($p);
//echo $paginas;
/*$ditis = array();
		$ditis['swidi']=$this->Modelo->cargar5();

		//var_dump($ditis);

  foreach ($ditis['swidi'] as $key) {
    echo $key->TABLE_NAME;
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
  <link href="css/estilos.css" rel="stylesheet">

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
  <link href="css/diseño.css" rel="stylesheet">

  <style type="text/css">
    table,
    th,
    td {
      border: 1px solid black;
    }

    th,
    td {
      padding: 15px;
    }

    th,
    td {
      text-align: left;

    }

    th {
      background-color: #5f5e5d;
      color: #ffffff;
    }

    td {
      background-color: #c7c4c4;
    }
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
      <?php

      ?>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="http://localhost/SWIDDI/ControlUsuarios?pagina=1">Inicio</a></li>
          <li class="menu-has-children"><a href="">Busqueda</a>
            <ul>
              <?php foreach ($swiddi1 as $key) : ?>
                <li id="elvalor" name="elvalor" value="<?php $c = $key->Tables_in_swiddi1;
                                                        $c1 = trim($c, "'");
                                                        echo $c1; ?>"><a href="ControlPlantilla2?envio=<?php $c = $key->Tables_in_swiddi1;
                                                                    $c1 = trim($c, "'");
                                                                    echo $c1; ?>"><?php $c = $key->Tables_in_swiddi1;
                                                                                                                      $c1 = trim($c, "'");
                                                                                                                      echo $c1; ?></a></li>
              <?php endforeach ?>
            </ul>

          </li>
          <li><a href="http://localhost/SWIDDI">Salir</a></li>
        </ul>
      </nav>

    </div>
  </header>
  <br><br>
  <section id="contact">

    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <div>
            .
          </div>
          <h3 class="section-title">Busca tu trabajo ideal</h3>
          <div>
            .
          </div>

          <div class="section-title-divider"></div>

          <div>
            .
          </div>

          <p class="section-description">Seleccione la casilla "more information" para entrar en más detalles.</p>

        </div>
      </div>

      <form action="ControlPlantilla" method="post">

        <div class="col-sm-8" style="margin-left: 17%">

          <?php

          /***************
           * 
           * 
           * ********************** */

          $data = array();

          /*$datos['sysobjects'] = $this->Modelo->cargar2();*/


          $iniciar = ($_GET['pagina'] - 1) * $configA;

          //echo $iniciar;
          $ditis = array();
          $ditis['swidi'] = $this->Modelo->cargar5($iniciar, $configA);

          //var_dump($ditis);

          foreach ($ditis['swidi'] as $key) { ?>

            <table id="tabla" class="egt" style="width: 100%">


              <br>
              <br>

              <h2 style="text-align: center; "><?php $c = $key->TABLE_NAME;
                                                $c1 = trim($c, "'");
                                                echo $c1; ?></h2>

              <input type="hidden" name="cat" value="<?= $key->TABLE_NAME ?>">

              
              <a href="ControlPlantilla2?envio=<?php $c = $key->TABLE_NAME;
                                                $c1 = trim($c, "'");
                                                echo $c1; ?>" class="alert-link">more jobs</a>
             

              <div class="container">
                <div class="row align-items-center">

                  <tr>

                    <th>Location </th>


                    <th>Position</th>

                    <th>Company</th>

                    <th>More information</th>


                  </tr>


                  <?php

                  

if (isset($_COOKIE["oreo"])) {
  $configB = $_COOKIE["oreo"];
} else {
  $configB = 3;
}

                  $data['objects'] = $this->Modelo->cargar4($key->TABLE_NAME,$configB);
                  foreach ($data['objects'] as $key) {

                  ?>

                    <tr>


                      <td><?= $key->location ?></td>

                      <td><?= $key->position ?></td>

                      <td><?= $key->company ?></td>




                      <td><button value="<?= $key->id, ',', $key->category ?>" type="submit" name="editar"><i class="fas fa-info-circle"></i></button></td>
                    </tr>
                </div>
              </div>



              


            <?php } ?>

            
           
          <?php } ?>
            </table>

            <!--==========================
  pagiinacion
============================-->

            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item <?= $_GET['pagina'] <= '1' ? 'disabled' : '' ?>">
                  <a class="page-link" href="http://localhost/SWIDDI/ControlUsuarios?pagina=<?= $_GET['pagina'] - 1 ?>">
                    <th>Previous</th>
                  </a>
                </li>

                <?php for ($i = 0; $i < $paginas; $i++) : ?>

                  <li class="page-item <?php echo $_GET['pagina'] == $i + 1 ? 'active' : '' ?>">
                    <a class="page-link" href="http://localhost/SWIDDI/ControlUsuarios?pagina=<?= $i + 1 ?>">
                      <?= $i + 1 ?>
                    </a>
                  </li>

                <?php endfor ?>

                <li class="page-item <?= $_GET['pagina'] >= $paginas ? 'disabled' : '' ?>">
                  <a class="page-link" href="http://localhost/SWIDDI/ControlUsuarios?pagina=<?= $_GET['pagina'] + 1 ?>">
                    Next
                  </a>
                </li>
              </ul>
            </nav>

            

            <!--==========================
  pagiinacion
============================-->


            </nav>
        </div>

      </form>


  </section>



  <!--==========================
  Footer
============================-->

  <footer id="footer" style="margin-top: 20%">
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