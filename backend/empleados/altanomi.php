<?php
include ('../conexionmysql.php');

$id=$_GET['id'];
$id_puesto=$_POST["id_puesto"];
$sueldo=$_POST["sueldo"];
$horas=$_POST["horas"];
$query="INSERT INTO trabajador (id,id_puesto,sueldo,horas) VALUES ('$id','$id_puesto','$sueldo','$horas')";
mysqli_query($connection,$query);