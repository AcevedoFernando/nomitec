<?php
include ('../../conexionmysql.php');

$id_empleado=$_POST['id_empleado'];
$monto=$_POST['monto'];
$descuento=$_POST['descuento'];
$status="Activo";
$abonado=0;

$query="INSERT INTO prestamo (id_empleado,monto,descuento,status,abonado) VALUES ('$id_empleado','$monto','$descuento','$status','$abonado')";

mysqli_query($connection,$query);
mysqli_close($connection);
header('location: /nomitec/views/empleados/prestamos/prestamos.php');

?>