<?php
include ('../conexionmysql.php');
$id=$_GET['id'];
$id_trabajador=$_POST["id_trabajador"];
$concepto=$_POST["concepto"];
$monto=$_POST["monto"];
$fecha=$_POST["fecha"];

switch ($concepto) {
	case 'extras':
		# code...
		break;
	case 'dominical':
		# code...
		break;
	case 'prestamo':
		# code...
		break;
	case 'infonavit':
		# code...
		break;
	default:
		# code...
		break;
}

$query="INSERT INTO deduccion (id,id_puesto,sueldo,horas) VALUES ('$id','$id_puesto','$sueldo','$horas')";
mysqli_query($connection,$query);
mysqli_close($connection);
header('location: /nomitec/views/empleados/trabajador.php?id='.$id);
?>