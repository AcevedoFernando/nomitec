<?php

    require ('../conexionmysql.php');

    $query = "SELECT * FROM users";

    $resultado = mysqli_query($connection,$query);                            
    while($array = mysqli_fetch_array($resultado)){        
    $id = $array['id'];
    $nombre = $array['user'];
    $rol = $array['rol'];

    ?>
          
    <tr>
            <td>
                <?php echo $id; ?>
            </td>  
            <td>                                                                          
                <?php echo $nombre; ?>
            </td>
            <td>                                                                            
                <?php echo $rol; ?>
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