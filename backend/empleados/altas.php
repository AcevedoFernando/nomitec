<?php
include ('../conexionmysql.php');


$nombre=$_POST["nombre"];
$ape_pat=$_POST["ape_pat"];
$ape_mat=$_POST["ape_mat"];
$rfc=$_POST["rfc"];
$horas=$_POST["horas"];
$curp=$_POST["curp"];
$fecha_ingreso=$_POST["fecha_ingreso"];
$nss=$_POST["nss"];
$id_contrado=$_POST["id_contrato"];

$query="INSERT INTO empleado (nombre,id_nivel,rfc,ape_pat,ape_mat,
curp,nss,id_contrato)VALUES('$nombre','$id_nivel','$rfc','$ape_pat','$ape_mat','$curp','$nss','$id_contrato')";
mysqli_query($connection,$query);

header('location: /nomitec/views/empleados/empleados.php');
?>