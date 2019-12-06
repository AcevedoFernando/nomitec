<?php

    require ('../conexionmysql.php');

    $query = "SELECT * FROM nomina";

    $resultado = mysqli_query($connection,$query);                            
    while($array = mysqli_fetch_array($resultado)){        
    $id = $array['id'];
    $id_trabajador = $array['id_trabajador'];    
    $fecha = $array['fecha'];
    $total = $array['total'];

    $query2 = "SELECT * FROM empleado WHERE id='$id_trabajador'";    
    $resultado2 = mysqli_query($connection,$query2);                            
    $array2 = mysqli_fetch_array($resultado2);
    $nombre_trabajador = $array2['nombre'];
    $ape_pat = $array2['ape_pat'];
    $ape_mat = $array2['ape_mat'];

    ?>
          
    <tr>
            <td>
                <?php echo $id; ?>
            </td>  
            <td>                                                                          
                <?php echo $id_trabajador; ?>
            </td>
            <td>                                                                          
                <?php echo $nombre_trabajador." ".$ape_pat." ".$ape_mat; ?>
            </td>            
            <td>   
                <?php echo $total; ?>                                                                                        
            </td>
            <td>                                                                            
            <?php echo $fecha; ?>
            </td>
            <td>
                <div class="col">                                                                            
                    <button class="btn btn-success text-right" type="button" onclick="location.href='/nomitec/views/nominas/ver.php?id=<?php echo $id; ?>'">
                        Ver
                    </button>
                    <button class="btn btn-primary" type="button" onclick="location.href='/nomitec/views/nominas/imprimir.php?id=<?php echo $id; ?>'">
                        Editar
                    </button>
                    <button class="btn btn-warning" type="button" onclick="location.href='/nomitec/views/nominas/imprimir.php?id=<?php echo $id; ?>'">
                        Imprimir
                    </button>
                    <button class="btn btn-danger" type="button" onclick="location.href='/nomitec/views/nominas/eliminar.php?id=<?php echo $id; ?>'">
                        Eliminar
                    </button>                                            
                </div>
            </td>
        </div>                                                           
    </tr>        
                            
<?php                            
   }
    mysqli_close($connection);
?>