<?php 

echo '<script language="javascript">alert("usuario o clave incorrecta, intente de nuevo");window.location.href="http://localhost/SWIDDI/ControlLogin"</script>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cargando</title>
    <meta http-equiv="refresh" content="2;http://localhost/SWIDDI/ControlLogin" >
    <link href="css/style.css" rel="stylesheet">

    <style type="text/css" >
   .loader,
.loader:before,
.loader:after {
  background: rgb(0, 0, 0);
  -webkit-animation: load1 1s infinite ease-in-out;
  animation: load1 1s infinite ease-in-out;
  width: 1em;
  height: 4em;
}
.loader:before,
.loader:after {
  position: absolute;
  top: 0;
  content: '';
}
.loader:before {
  left: -1.5em;
}
.loader {
  text-indent: -9999em;
  margin: 40% auto;
  position: relative;
  font-size: 11px;
  -webkit-animation-delay: 0.16s;
  animation-delay: 0.16s;
}
.loader:after {
  left: 1.5em;
  -webkit-animation-delay: 0.32s;
  animation-delay: 0.32s;
}
@-webkit-keyframes load1 {
  0%,
  80%,
  100% {
    box-shadow: 0 0 rgb(0, 0, 0);
    height: 4em;
  }
  40% {
    box-shadow: 0 -2em #030303;
    height: 5em;
  }
}
@keyframes load1 {
  0%,
  80%,
  100% {
    box-shadow: 0 0 rgb(0, 0, 0);
    height: 4em;
  }
  40% {
    box-shadow: 0 -2em #000000;
    height: 5em;
  }
}

    </style>

    <script>
    </script>
</head>
<body>
    

    <div id="contenedor" style="position: absolute; right: 50%;
    top:50%">
        <div class="loader" id="loader">Loading...</div>
</div>

</body>
</html>