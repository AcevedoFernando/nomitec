<?php

$host="localhost";
$usermysql="root";
$passmysql="";

$connection = mysqli_connect($host,$usermysql,$passmysql);
if (!$connection){
    die("Conexion fallida" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'nomitec');
if (!$select_db){
    die("Seleccion de base de datos fallida" . mysqli_error($connection));
}

?>