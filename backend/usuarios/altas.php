<?php
include ('../conexionmysql.php');
$nombre=$_POST["nombre"];
$pass=$_POST['pass'];
$rol=$_POST["rol"];
session_start();
$idus=$_SESSION['id'];
$accion='Dar de alta usuario '.$id;
$query="INSERT INTO users (user,pass,rol)VALUES('$nombre','$pass','$rol')";
mysqli_query($connection,$query);
$query="INSERT INTO log (id_usuario,accion) VALUES ('$idus','$accion')" ; 
mysqli_query($connection,$query);
mysqli_close($connection);
header('location: /nomitec/views/usuarios/usuarios.php');
?>