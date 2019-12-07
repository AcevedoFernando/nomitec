<?php
include ('../conexionmysql.php');


$id_empleado=$_POST['id_empleado'];
$nombre=$_POST['nombre'];



$query="INSERT INTO departamentos (name,jefe)VALUES('$nombre','$id_empleado')";

mysqli_query($connection,$query);

mysqli_close($connection);
header('location: /nomitec/views/departamentos/departamentos.php?id='.$id);

?>