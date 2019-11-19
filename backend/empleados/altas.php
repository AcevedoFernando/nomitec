<?php
include ('../conexionmysql.php');

//$var_id=$_POST["id"];
$var_Nombre=$_POST["nombre"];
//$var_Apepat=$_POST["apepat"];
//$var_Apemat=$_POST["apemat"];
//$var_rfc=$_POST["rfc"];
$var_sueldo=$_POST["sueldo"];
$var_horas=$_POST["horas"];
//$var_password=$_POST["password"];
//$var_puesto=$_POST["puesto"];
//$var_horasExtras=$_POST["horasExt"];
//$var_sueldoBruto=$var_horas*$var_sueldo;
$query="INSERT INTO registroemp (name,sueldo,horas)VALUES('$var_Nombre','$var_sueldo','$var_horas')";
mysqli_query($connection,$query);
?>