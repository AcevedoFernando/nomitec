<?php
include ('../conexionmysql.php');

$id=$_GET['id'];
$id_puesto=$_POST["id_puesto"];
$sueldo=$_POST["sueldo"];
$horas=$_POST["horas"];
$query="INSERT INTO trabajador (id,id_puesto,sueldo,horas) VALUES ('$id','$id_puesto','$sueldo','$horas')";
mysqli_query($connection,$query);
//**********CALCULO DEL ISR******************//
$sueldobruto=0;
$totisr=0;
$sueldoneto=0;
$sueldobruto=$horas*$sueldo;
if($sueldobruto >= 0 && $sueldobruto < 2651){
	$sueldoneto=$sueldobruto-($sueldobruto*.054);
	$totisr=$sueldobruto*.054;
}
if($sueldobruto >= 2651 && $sueldobruto < 5000){
	$sueldoneto=$sueldobruto-($sueldobruto*.060);
	$totisr=$sueldobruto*.060;
}
if($sueldobruto >= 5000 && $sueldobruto < 12000){
	$sueldoneto=$sueldobruto-($sueldobruto*.105);
	$totisr=$sueldobruto*.105;
}
if($sueldobruto >= 12000 && $sueldobruto <=20000){
	$sueldoneto=$sueldobruto-($sueldobruto*.148);
	$totisr=$sueldobruto*.148;
}
if($sueldobruto >= 20000 && $sueldobruto < 35000){
	$sueldoneto=$sueldobruto-($sueldobruto*.183);
	$totisr=$sueldobruto*.183;
}
if($sueldobruto >= 35000 && $sueldobruto <90000){
	$sueldoneto=$sueldobruto-($sueldobruto*.256);
	$totisr=$sueldobruto*.256;
}
if($sueldobruto >= 90000 && $sueldobruto <200000){
	$sueldoneto=$sueldobruto-($sueldobruto*.301);
	$totisr=$sueldobruto*.301;
}
if($sueldobruto >= 200000 && $sueldobruto <300000){
	$sueldoneto=$sueldobruto-($sueldobruto*.314);
	$totisr=$sueldobruto*.314;
}
if($sueldobruto > 300000){
	$sueldoneto=$sueldobruto-($sueldobruto*.35);
	$totisr=$sueldobruto*.35;
}
$query="INSERT INTO  (id,id_puesto,sueldo,horas) VALUES ('$id','$id_puesto','$sueldo','$horas')";
mysqli_query($connection,$query);

mysqli_close($connection);
header('location: /nomitec/views/empleados/trabajador.php?id='.$id);
?>	