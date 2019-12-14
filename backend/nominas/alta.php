<?php
include ('../conexionmysql.php');

$horas_extras = $_POST['horas_extra'];
$id_trabajador = $_POST['trabajador'];
$dias_laborados = $_POST['dias_laborados'];

$query = "SELECT * FROM trabajador WHERE id='$id_trabajador'";
$result = mysqli_query($connection, $query);
$array = mysqli_fetch_array($result);
$sueldo = $array['sueldo'];
$horas = $array['horas'];
$sueldo_semanal = $horas*$sueldo*$dias_laborados;

$query = "INSERT INTO nomina (id_trabajador,dias_laborados,horas_extra,sueldo_semanal) VALUE ('$id_trabajador','$dias_laborados','$horas_extras','$sueldo_semanal')";

mysqli_query($connection,$query);

$query= mysqli_query($connection,"SELECT MAX(id) AS id FROM nomina");
if ($row = mysqli_fetch_row($query)) 
{
  $id = trim($row[0]);
}

mysqli_close($connection);

header('location: /nomitec/views/nominas/deduccion.php?id='.$id.'&id_trabajador='.$id_trabajador.'&dias_lab='.$dias_laborados.'&horas_extra='.$horas_extras);

?>