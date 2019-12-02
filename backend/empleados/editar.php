<?php

//Tabla empleado
$id=$_GET['id'];
$nombre=$_POST['nombre'];
$ape_mat=$_POST['ape_mat'];
$rfc=$_POST['rfc'];
$curp=$_POST['curp'];
$nss=$_POST['nss'];
$contrato=$_POST['contrato'];
$id_nivel=$_POST['id_nivel'];

//Tabla domicilio
$calle=$_POST['calle'];
$numero_exterior=$_POST['numero_exterior'];
$numero_interior=$_POST['numero_interior'];
$colonia=$_POST['colonia'];
$municipio=$_POST['municipio'];
$id_estado=$_POST['id_estado'];
$cp=$_POST['cp'];

//Tabla puesto
$id_puesto=$_POST['id_puesto'];
$sueldo=$_POST['sueldo'];
$horas=$_POST['horas'];

$query="UPDATE empleado SET ";



?>