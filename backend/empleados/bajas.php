
<?php

 include ('../conexionmysql.php');

$id=$_GET['id'];

// instruccion para borrar el empleado que necesitamos borrar
$sql = "DELETE FROM empleado WHERE id='$id'";
//comprobacion de que se halla borrado el empleado
if (mysqli_query($connection, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($connection);
header('location: /nomitec/views/empleados/empleados.php');
?>