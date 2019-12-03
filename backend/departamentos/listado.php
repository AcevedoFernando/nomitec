<?php

    require ('../conexionmysql.php');

    $query = "SELECT * FROM departamentos";

    $resultado = mysqli_query($connection,$query);                            
    while($array = mysqli_fetch_array($resultado)){        
    $id = $array['id'];
    $name = $array['name'];
    $jefe = $array['jefe'];   

    ?>
          
    <tr>
            <td>
                <?php echo $id; ?>
            </td>  
            <td>                                                                          
                <?php echo $name; ?>
            </td>
            <td>                                                                            
                <?php echo $jefe; ?>
            </td>
            <td>
                <div class="col">                                                                            
                    <button class="btn btn-success text-right" type="button" onclick="location.href='/nomitec/views/departamentos/ver.php?id=<?php echo $id; ?>'">
                        Ver
                    </button>
                    <button class="btn btn-primary" type="button" onclick="location.href='/nomitec/views/departamentos/editar.php?id=<?php echo $id; ?>'">
                        Editar
                    </button>
                    <button class="btn btn-danger" type="button" onclick="location.href='/nomitec/views/departamentos/baja.php?id=<?php echo $id; ?>'">
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