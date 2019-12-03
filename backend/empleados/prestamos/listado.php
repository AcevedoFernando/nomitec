<?php
include ('../../conexionmysql.php');

$query = "SELECT * FROM prestamo";
$resultado = mysqli_query($connection, $query);
while($array = mysqli_fetch_array($resultado)){
    $id_prestamo = $array['id'];
    $id_empleado = $array['id_empleado'];
    $monto = $array['monto'];
    $descuento = $array['descuento'];
    $status = $array['status'];

    $query = "SELECT nombre, ape_pat, ape_mat FROM empleado WHERE id='$id_empleado'";
    $resultado2 = mysqli_query($connection, $query);
    $array2 = mysqli_fetch_array($resultado2);        
    $nombre_empleado = $array2['nombre'];
    $ape_pat = $array2['ape_pat'];
    $ape_mat = $array2['ape_mat'];
?>

<tr>    
        <td>
            <?php echo " ".$id_prestamo; ?>
        </td>
        <td>
            <?php echo $nombre_empleado." ".$ape_pat." ".$ape_mat; ?>
        </td>  
        <td>
            <?php echo "$".$monto; ?>
        </td>  
        <td>
            <?php echo $descuento." %"; ?>
        </td>                             
        <td>
            <?php echo $status; ?>
        </td>                                                     
        <td>
            <div class="col">                                                                            
                <button class="btn btn-success text-right" type="button" onclick="location.href='/nomitec/views/empleados/prestamos/ver.php?id=<?php echo $id_prestamo; ?>'">
                    Ver
                </button>
                <button class="btn btn-primary" type="button" onclick="location.href='/nomitec/views/empleados/prestamos/editar.php?id=<?php echo $id_prestamo; ?>'">
                    Editar
                </button>
                <button class="btn btn-danger" type="button" onclick="location.href='/nomitec/views/empleados/prestamos/baja.php?id=<?php echo $id_prestamo; ?>'">
                    Eliminar
                </button>                                            
            </div>
        </td>
</tr>

<?php
}
mysqli_close($connection);
?>