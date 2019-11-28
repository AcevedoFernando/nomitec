<?php
include ('../conexionmysql.php');
$server="localhost";
$username="root";
$password="";
$db="nomitec";
$id=$_GET['id'];
$conn=new mysqli($server,$username,$password,$db);
$borrar=" DELETE FROM empleados WHERE id='$id'";
if ($conn->query($sql) == TRUE) {
	echo "si se borro mi rega";
}else{
	"al chile no borro".$conn->error;
}
$conn->close();
header('location: /nomitec/views/empleados/empleados.php');
?>