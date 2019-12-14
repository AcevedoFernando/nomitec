<?php
include ('../conexionmysql.php');

$razon_social = $_POST['razon_social'];        
$rfc = $_POST['rfc'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];                       
$calle = $_POST['calle'];
$colonia = $_POST['colonia'];
$municipio = $_POST['municipio'];
$estado = $_POST['estado'];
$cp = $_POST['cp'];
$numero_interior = $_POST['numero_interior'];
$numero_exterior = $_POST['numero_exterior'];

$query = "UPDATE datos_empresa SET razon_social='$razon_social',rfc='$rfc', telefono='$telefono',
email='$email', calle='$calle', colonia='$colonia', municipio='$municipio', estado='$estado', cp='$cp',
numero_interior='$numero_interior', numero_exterior='$numero_exterior'";

mysqli_query($connection, $query);
mysqli_close($connection);

header('location: /nomitec/views/empresa/empresa.php');

?>