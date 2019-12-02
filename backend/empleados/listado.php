<?php

    require ('../conexionmysql.php');

    $query = "SELECT * FROM empleado";

    $resultado = mysqli_query($connection,$query);                            
    while($array = mysqli_fetch_array($resultado)){        
    $id = $array['id'];
    $nombre = $array['nombre'];
    $ape_pat = $array['ape_pat'];
    $ape_mat = $array['ape_mat'];
    $status = $array['status'];

    ?>
          
    <tr>
            <td>
                <?php echo $id; ?>
            </td>  
            <td>                                                                          
                <?php echo $nombre; ?>
            </td>
            <td>                                                                            
                <?php echo $ape_pat; ?>
            </td>
            <td>                                                                            
                <?php echo $ape_mat; ?>
            </td>
            <td>                                                                            
                <?php echo $status; ?>
            </td>
            <td>
                <div class="col">                                                                            
                    <button class="btn btn-success text-right" type="button" onclick="location.href='/nomitec/views/empleados/ver.php?id=<?php echo $id; ?>'">
                        Ver
                    </button>
                    <button class="btn btn-primary" type="button" onclick="location.href='/nomitec/views/empleados/editar.php?id=<?php echo $id; ?>'">
                        Editar
                    </button>
                    <button class="btn btn-danger" type="button" onclick="location.href='/nomitec/views/empleados/baja.php?id=<?php echo $id; ?>'">
                        Dar de Baja
                    </button>                                            
                </div>
            </td>
        </div>                                                           
    </tr>        
                            
<?php                            
   }
    mysqli_close($connection);
?>