<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nomitec";
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Tabla users
$id=$_GET['id'];
$user=$_POST['user'];
$rol=$_POST['rol'];
$pass=$_POST['pass'];
//Obtenemos el id del usuario que está realizando cambios
session_start();
$idus=$_SESSION['id'];
$accion='Editar datos del usuario '.$id;
$query="UPDATE users SET user='$user',pass='$pass',rol='$rol' WHERE id='$id'";
if (mysqli_query($conn, $query)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
$query="INSERT INTO log (id_usuario,accion) VALUES ('$idus','$accion')" ; 
mysqli_query($conn,$query);
mysqli_close($conn);
header('location: /nomitec/views/usuarios/usuarios.php');
?>