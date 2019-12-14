<?php
include ('../conexionmysql.php');

$id_nomina = $_POST['id_nomina'];
$id_trabajador = $_POST['id_trabajador'];
$dias_lab = $_POST['dias_lab'];
$horas_extra = $_POST['horas_extra'];

$query = "SELECT * FROM trabajador WHERE id='$id_trabajador'";
$result = mysqli_query($connection, $query);
$array = mysqli_fetch_array($result);
$sueldo = $array['sueldo'];
$horas = $array['horas'];
$sueldo_semanal = $sueldo*$dias_lab;
$total_deduciones = 0;

if(isset($_POST['isr'])){
    $isr = $_POST['isr'];
    $concepto = 'ISR';
    if($sueldo_semanal <= 578){
        $descuento = 0.0192;
    }else if($sueldo_semanal > 578 and $sueldo_semanal <=4910){
        $descuento = 0.0640;
    }else if($sueldo_semanal > 4910 and $sueldo_semanal <=8629){
        $descuento = 0.1088;
    }else if($sueldo_semanal > 8629 and $sueldo_semanal <=10031){
        $descuento = 0.16;
    }else if($sueldo_semanal > 10031){
        $descuento = 0.2136;
    }
    $monto = $sueldo_semanal*((-1)*$descuento);   
    $total_deduciones += $monto;  
    $query = "INSERT INTO deduccion (id_trabajador,concepto,monto,no_nomina)VALUES('$id_trabajador','$concepto','$monto','$id_nomina')";
    mysqli_query($connection, $query);    
}
if(isset($_POST['infonavit'])){
    $infonavit = $_POST['infonavit'];
    $concepto = 'INFONAVIT';
    $monto =(-1)*($sueldo*(.06));
    $total_deduciones += $monto;
    $query = "INSERT INTO deduccion (id_trabajador,concepto,monto,no_nomina)VALUES('$id_trabajador','$concepto','$monto','$id_nomina')";
    mysqli_query($connection, $query);
}
if(isset($_POST['descuento_comedor'])){
    $descuento_comedor = $_POST['descuento_comedor'];
    $concepto = 'DESCUENTO POR COMEDOR';
    $monto = -50;
    $total_deduciones += $monto;
    $query = "INSERT INTO deduccion (id_trabajador,concepto,monto,no_nomina)VALUES('$id_trabajador','$concepto','$monto','$id_nomina')";
    mysqli_query($connection, $query);
}
if(isset($_POST['cuota_sindical'])){
    $cuota_sindical = $_POST['cuota_sindical'];    
    $concepto = 'CUOTA SINDICAL';
    $monto = -20;
    $total_deduciones += $monto;
    $query = "INSERT INTO deduccion (id_trabajador,concepto,monto,no_nomina)VALUES('$id_trabajador','$concepto','$monto','$id_nomina')";
    mysqli_query($connection, $query);
}
if(isset($_POST['prima_dominical'])){
    $prima_dominical = $_POST['prima_dominical'];
    $concepto = 'PRIMA DOMINICAL';
    $monto = $sueldo*(.25);
    $total_deduciones += $monto;
    $query = "INSERT INTO deduccion (id_trabajador,concepto,monto,no_nomina)VALUES('$id_trabajador','$concepto','$monto','$id_nomina')";
    mysqli_query($connection, $query);
}
if(isset($_POST['productividad'])){
    $productividad = $_POST['productividad'];
    $concepto = 'PRODUCTIVIDAD';
    $monto = $sueldo*(.15);
    $total_deduciones += $monto;
    $query = "INSERT INTO deduccion (id_trabajador,concepto,monto,no_nomina)VALUES('$id_trabajador','$concepto','$monto','$id_nomina')";
    mysqli_query($connection, $query);
}

if($horas_extra<=8){
    $total_extras = (($sueldo/$horas)*$horas_extra)*2;
}else $total_extras = (($sueldo/$horas)*$horas_extra)*3;

$total = $total_deduciones + $total_extras + $sueldo_semanal;

$query = "UPDATE nomina SET total='$total' WHERE id='$id_nomina'";
mysqli_query($connection, $query);
mysqli_close($connection);

header('location: /nomitec/views/nominas/nominas.php');

?>