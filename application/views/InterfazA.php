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
table, th,td{
border: 1px solid black;
}

th, td{
    padding:15px;
}

th, td{
    text-align: left;
    
}
th{
  background-color: #5f5e5d;
  color: #ffffff;
}
td{
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
    
      <nav id="nav-menu-container">
        <ul class="nav-menu">
        <li class="menu-active"><a href="http://localhost/SWIDDI/ControlAdmin">Inicio</a></li>
        <li><a href="http://localhost/SWIDDI/ControlTrabajos">Crear categorias</a></li>
          <li><a href="http://localhost/SWIDDI/ControlCreacion">Crear trabajos</a></li>
          <li><a href="http://localhost/SWIDDI/ControlUsuarios?pagina=1">Pagina de usuario</a></li>
          <li><a href="http://localhost/SWIDDI">Salir</a></li>
        </ul>
      </nav>
      
    </div>
  </header>

  

  <section id="contact" class="col-sm-12">

  

 <form action="http://localhost/SWIDDI/ControlEdit" method="post">
  <br>
 <div class="col-md-6">
   <h3 style="margin-left:20%;"></h3> <br>
  <input style="width: 35%;
  margin-left:20%;
  padding: 10px;
  border: 2px solid black;
  font-weight: 600;
  background-color: white;
  color:black;
  border-radius: 8px;" 
  id="Massag" type="number" placeholder="Ingrese el numero de paginación" min="1" pattern="^[0-9]+" name="pag"> 
   <button name="pagi" id="pagi" 
   style="font:bold 24px Arial; text-decoration: none; color:white; border:solid 1.5px black;
   border-radius: 8px;"
   hover="background: white; color: white;" 
   class="btn btn-danger"> Enviar </button>
</div>
   <!--el boton de morejobs-->

  
   <div class="col-md-6">
   <h5 style="margin-left:20%;"></h5> <br>
  <input style="width: 38%;
  margin-left:20%;
  padding: 10px;
  border: 2px solid black;
  font-weight: 600;
  background-color: white;
  color:black;
  border-radius: 8px;" 
  id="Massag" type="number" placeholder="Ingrese el numero de registros a mostrar" min="1" pattern="^[0-9]+" name="more"> 
   <button name="more1" id="more1" 
   style="font:bold 24px Arial; text-decoration: none; color:white; border:solid 1.5px black;
   border-radius: 8px;"
   hover="background: white; color: white;" 
   class="btn btn-danger"> Enviar </button>
  </div>

  <br><br><br><br>
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
 
    
    <table id="tabla" class="center" style="width: 100%">
    <br>
    <br>
    <h2 style="text-align: center; "><?php $c= $key->Tables_in_swiddi1;$c1=trim($c,"'"); echo $c1; ?>  | <button value="<?=$key->Tables_in_swiddi1?>" type="submit" name="drop"><i class="fas fa-calendar-times"></i></button></h2> 
    
    <input type="hidden" name="cat" value="<?=$key->Tables_in_swiddi1?>">
    <div class="container">
  <div class="row align-items-center">
  
  
  <tr>
  
     <th>#</th>
 
    <th>Location</th>
    
    <th>Position</th>
   
    <th>Company</th>
    
    <th>Description</th>
  
    <th>How to apply</th>
    
    <th>Category</th>
    
   <th>Operation</th>
    
    </tr>
    
    
  

<?php
  $data['objects'] = $this->Modelo->cargar2($key ->Tables_in_swiddi1);
  foreach ($data['objects'] as $key){
  
  ?>
 
 
  <tr>
  
  
    <td><?=$key->id?></td>
    
    <td><?=$key->location?></td>
    
    <td><?=$key->position?></td>
    
    <td><?=$key->company?></td>
   
    <td><?=$key->description?></td>
    
    <td><?=$key->howtoapply?></td>
    
    <td><?=$key->category?></td>
   
    
   
    <td><button value="<?=$key->id,',', $key->category?>" type="submit" name="editar"><i class="fas fa-edit"></i></button> | <button value="<?=$key->id,',', $key->category?>" type="submit" name="dell"><i class="fas fa-user-times"></i></button></td>
    
   </tr>
   </div>
</div>

<?php } ?>
   <?php } ?>
   
  
</table>
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