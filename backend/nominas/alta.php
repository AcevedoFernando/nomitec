<?php
include ('../conexionmysql.php');

$horas_extras = $_POST['horas_extra'];
$trabajador = $_POST['trabajador'];
$dias_laborados = $_POST['dias_laborados'];

$query = "INSERT INTO nomina (id_trabajador,dias_laborados,horas_extra) VALUE ('$trabajador','$dias_laborados','$horas_extras')";

mysqli_query($connection,$query);

$query= mysqli_query($connection,"SELECT MAX(id) AS id FROM nomina");
if ($row = mysqli_fetch_row($query)) 
{
  $id = trim($row[0]);
}

mysqli_close($connection);

header('location: /nomitec/views/nominas/deduccion.php?id='.$id.'&id_trabajador='.$trabajador);

?>