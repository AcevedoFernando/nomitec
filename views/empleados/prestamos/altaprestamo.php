<?php
    require ('../../../backend/sesiones/validarsesion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/home.css">
    <link href="../../open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Nomitec | Registrar Empleado</title>
    
    <style>
        body {
            background-image: url('/nomitec/resources/home.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>

</head>
<body>
    <?php
        include ('../../../layouts/menu.php');
    ?>



    <div class="jumbotron mx-5">
            <div class="row justify-content-start">
                <form action="prestamos.php">
                    <button class="ml-5 btn btn-info" type="submit">Regresar</button>                
                </form>
            </div>
            <div class="row justify-content-center"><h3 class="font-text-bold">Registro de prestamo</h3></div>      
            <hr>
            <div class="row justify-content-center">                                
                <form action="/nomitec/backend/empleados/prestamos/altas.php" method="post">
                    <div class="col form-group text-center">
                    <h5><em>Datos</em></h5>                                
                        <select class="form-control" name="id_empleado" required>
                            <option value="">Seleccione un empleado</option>
                            <?php 
                                include ('../../conexionmysql.php');
                                $query = "SELECT *  FROM empleado";
                                $res = mysqli_query($connection,$query);                                                                                         
                                while($array=mysqli_fetch_array($res)){                                 
                                $id = $array['id'];
                                $nombre = $array['nombre'];
                                $ape_pat = $array['ape_pat'];
                                $ape_mat = $array['ape_mat'];                                    
                            ?>                                
                            <option value="<?php echo $id ?>"><?php echo $id."-".$nombre." ".$ape_pat." ".$ape_mat; ?></option>
                            <?php } ?>
                            <?php mysqli_close($connection); ?>
                        </select>
                        <input type="text" name="monto" class="form-control" placeholder="Monto" required>
                        <input type="text" name="descuento" class="form-control" placeholder="Descuento"required>                                                               
                        <br>                                                                                                                                     
                    <button type="submit" class="btn btn-success form-control">Registrar</button>
                    </div>                    
                </form>                              
            </div>             
    </div>

    <?php
        include ('../../../layouts/footer.php');
    ?>
</body>
</html>