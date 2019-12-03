
<?php
 include ('../conexionmysql.php');

$idemp=$_GET['id'];
$accion='Dar de baja empleado '.$idemp;
$sql = "DELETE FROM empleado WHERE id='$idemp'";
session_start();
$id=$_SESSION['id'];
//comprobacion de que se halla borrado el empleado
if (mysqli_query($connection, $sql)) {
    echo "Record deleted successfully";
}
$query="INSERT INTO log (id_usuario,accion) VALUES ('$id','$accion')" ; 
mysqli_query($connection,$query);
mysqli_close($connection);
header('location: /nomitec/views/empleados/empleados.php');
?>