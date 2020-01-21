<?php

ini_set('display_errors','Off');
ini_set('display_startup_errors','Off');
error_reporting(0);

$username = $_POST['username'];
$password = $_POST['password'];
$sesion_login = true;

function conectarse(){
    if (!($link=mysql_connect("localhost",""))){
        echo "Error al conectare a la base de datos.";
        exit();
    }
    if (!mysql_select_db("swiddi",$link)){
        echo "Erro seleccionando la base de datos";
        exit();
    }
    return $link;
}

$con = conectarse();
$query = "SELECT * FROM admin WHERE usuario ='".$username."' AND contra = '".$password."'";
$q = mysql_query($query,$con);

try{

    if(mysql_result($q,O)){
    $result = mysql_result($q, O);

        echo "Usuario validado correctamente";

    }else{
        echo "Usuario con datos erroneos";
     }
} catch(Exception $error){
    mysql_close($con);}


