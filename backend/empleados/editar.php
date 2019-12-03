<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nomitec";
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Tabla empleado
$id=$_GET['id'];
$nombre=$_POST['nombre'];
$ape_mat=$_POST['ape_mat'];
$ape_pat=$_POST['ape_pat'];
$rfc=$_POST['rfc'];
$curp=$_POST['curp'];
$nss=$_POST['nss'];
$contrato=$_POST['contrato'];
$id_nivel=$_POST['id_nivel'];
//Tabla domicilio
$calle=$_POST['calle'];
$numero_exterior=$_POST['numero_exterior'];
$numero_interior=$_POST['numero_interior'];
$colonia=$_POST['colonia'];
$municipio=$_POST['municipio'];
$id_estado=$_POST['id_estado'];
$cp=$_POST['cp'];
//Tabla puesto
$id_puesto=$_POST['id_puesto'];
$sueldo=$_POST['sueldo'];
$horas=$_POST['horas'];
//Obtenemos el id del usuario que está realizando cambios
session_start();
$idus=$_SESSION['id'];
$accion='Editar datos del empleado '.$id;
$query="UPDATE empleado SET nombre='$nombre',id_nivel='$id_nivel',rfc='$rfc',ape_pat='$ape_pat',ape_mat='$ape_mat',curp='$curp',nss='$nss',id_contrato='$contrato' WHERE id='$id'";
if (mysqli_query($conn, $query)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
$query="UPDATE domicilios SET calle='$calle',numero_exterior='$numero_exterior',numero_interior='$numero_interior',cp='$cp',id_estado='$id_estado',municipio='$municipio',colonia='$colonia' WHERE id='$id'";
if (mysqli_query($conn, $query)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
$query2="UPDATE trabajador SET id_puesto='$id_puesto',sueldo='$sueldo',horas='$horas' WHERE id='$id'";
if (mysqli_query($conn, $query2)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
$query="INSERT INTO log (id_usuario,accion) VALUES ('$idus','$accion')" ; 
mysqli_query($conn,$query);
mysqli_close($conn);
header('location: /nomitec/views/empleados/empleados.php');
?>