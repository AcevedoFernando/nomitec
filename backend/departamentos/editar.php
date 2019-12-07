<?php
include ('../conexionmysql.php');

$id=$_GET['id_dep'];
$id_empleado=$_POST['id_empleado'];

$query="UPDATE departamentos SET jefe='$id_empleado' WHERE id='$id'";

mysqli_query($connection,$query);
mysqli_close($connection);
header('location: /nomitec/views/departamentos/departamentos.php');


?>