<?php
 include ('../conexionmysql.php');

$idus=$_GET['id'];
$accion='Dar de baja usuario '.$idus;
$sql = "DELETE FROM users WHERE id='$idus'";
session_start();
$id=$_SESSION['id'];
//comprobacion de que se halla borrado el empleado
if (mysqli_query($connection, $sql)) {
    echo "Record deleted successfully";
}
$query="INSERT INTO log (id_usuario,accion) VALUES ('$id','$accion')" ; 
mysqli_query($connection,$query);
mysqli_close($connection);
header('location: /nomitec/views/usuarios/usuarios.php');
?>