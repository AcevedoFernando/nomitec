<?php
include ('../conexionmysql.php');


$nombre=$_POST["nombre"];
$id_nivel=$_POST['id_nivel'];
$ape_pat=$_POST["ape_pat"];
$ape_mat=$_POST["ape_mat"];
$rfc=$_POST["rfc"];
$curp=$_POST["curp"];
$nss=$_POST["nss"];
$id_contrato=$_POST["id_contrato"];



$query="INSERT INTO empleado (nombre,id_nivel,rfc,ape_pat,ape_mat,curp,nss,id_contrato,status)VALUES('$nombre','$id_nivel','$rfc','$ape_pat','$ape_mat','$curp','$nss','$id_contrato','habilitado')";

mysqli_query($connection,$query);

$query= mysqli_query($connection,"SELECT MAX(id) AS id FROM empleado");
if ($row = mysqli_fetch_row($query)) 
{
  $id = trim($row[0]);
}

mysqli_close($connection);
header('location: /nomitec/views/empleados/domicilio.php?id='.$id);

?>