
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nomitec";
$id=$_GET['id'];

// Creamos la conexion con la bd
$conn = mysqli_connect($servername, $username, $password, $dbname);
// checamos conexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// instruccion para borrar el empleado que necesitamos borrar
$sql = "DELETE FROM empleado WHERE id='$id'";
//comprobacion de que se halla borrado el empleado
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
header('location: /nomitec/views/empleados/empleados.php?id='.$id);
?>