<?php
include ('../conexionmysql.php');


$nombre=$_POST["nombre"];
$id_nivel=$_POST['id_nivel'];
$ape_pat=$_POST["ape_pat"];
$ape_mat=$_POST["ape_mat"];
$rfc=$_POST["rfc"];
$curp=$_POST["curp"];
//$fecha_ingreso=$_POST["fecha_ingreso"];
$nss=$_POST["nss"];
$id_contrato=$_POST["id_contrato"];

if(isset($nombre)){
    header ('location: /nomitec/backend/empleados/prueba.php');
}
if(isset($id_nivel)){
    header ('location: /nomitec/backend/empleados/prueba.php');
}
if(isset($ape_pat)){
    header ('location: /nomitec/backend/empleados/prueba.php');
}
if(isset($rfc)){
    header ('location: /nomitec/backend/empleados/prueba.php');
}
if(isset($curp)){
    header ('location: /nomitec/backend/empleados/prueba.php');
}
if(isset($noape_matmbre)){
    header ('location: /nomitec/backend/empleados/prueba.php');
}
if(isset($nss)){
    header ('location: /nomitec/backend/empleados/prueba.php');
}
if(isset($id_contrato)){
    header ('location: /nomitec/backend/empleados/prueba.php');
}

$query="INSERT INTO empleado (nombre,id_nivel,rfc,ape_pat,ape_mat,curp,nss,id_contrato)VALUES('$nombre','$id_nivel','$rfc','$ape_pat','$ape_mat','$curp','$nss','$id_contrato')";

mysqli_query($connection,$query);

header('location: /nomitec/views/empleados/empleados.php');
?>