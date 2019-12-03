<?php
include ('../../conexionmysql.php');

$id=$_GET['id'];
$monto=$_POST['monto'];
$descuento=$_POST['descuento'];
$abonado=$_POST['abonado'];
$status=$_POST['status'];

$query="UPDATE prestamo SET monto='$monto',descuento='$descuento',abonado='$abonado',status='$status' WHERE id='$id'";

mysqli_query($connection,$query);
mysqli_close($connection);
header('location: /nomitec/views/empleados/prestamos/prestamos.php');


?>