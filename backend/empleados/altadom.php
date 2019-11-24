<?php

include ('../conexionmysql.php');

$id=$_GET['id'];
$calle=$_POST["calle"];
$numero_exterior=$_POST['numero_exterior'];
$numero_interior=$_POST["numero_interior"];
$cp=$_POST["cp"];
$colonia=$_POST["colonia"];
$id_estado=$_POST["id_estado"];
$municipio=$_POST["municipio"];

$query="INSERT INTO domicilios (id,calle,numero_exterior,numero_interior,cp,colonia,id_estado,municipio) VALUES ('$id','$calle','$numero_exterior','$numero_interior','$cp','$colonia','$id_estado','$municipio')";

mysqli_query($connection,$query);
mysqli_close($connection);

header('location: /nomitec/views/empleados/trabajador.php?id='.$id);

?>