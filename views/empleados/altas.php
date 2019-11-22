<?php
    require ('../../backend/sesiones/validarsesion.php');
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
            background-image: url('/nomitec/resources/fondohome.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed
        }
    </style>

</head>
<body>
    <?php
        include ('../../layouts/menu.php');
    ?>



    <div class="jumbotron mx-5">
            <div class="row justify-content-center"><h3>Registro de empleados</h3></div>      
            <hr>
            <div class="row justify-content-center">
                <form action="/nomitec/backend/empleados/altas.php" method="post">
                    <div class="col form-group">
                        <input type="text" name="nombre" placeholder="Nombre" class="form-control" required>
                        <input type="text" name="ape_pat" class="form-control" placeholder="Primer Apellido"required>
                        <input type="text" name="ape_mat" class="form-control" placeholder="Segundo Apellido" required>
                        <br>                        

                        <select class="form-control" name="id_nivel" required>
                            <option value="">Seleccione un nivel de estudios</option>
                            <?php 
                                include ('../conexionmysql.php');
                                $query="SELECT * FROM nivel";
                                $res=mysqli_query($connection,$query);                                                              
                            ?>
                            <?php while($array=mysqli_fetch_array($res)){                                 
                                $id=$array['id'];
                                $nombre=$array['name'];                                    
                            ?>                                
                            <option value="<?php echo $id ?>"><?php echo $nombre; ?></option>
                            <?php } ?>
                            <?php mysqli_close($connection); ?>
                        </select>
                        <br>                                                                                                                  
                    <input type="text" name="rfc" class="form-control" placeholder="RFC" required>
                    <input type="text" name="curp" class="form-control" placeholder="CURP" required>
                    <input type="text" name="nss" class="form-control" placeholder="NSS" required>
                    <br>                   
                    <select class="form-control" name="id_contrato" required>
                            <option value="">Seleccione un contrato</option>
                            <?php 
                                include ('../conexionmysql.php');
                                $query="SELECT * FROM contrato";
                                $res=mysqli_query($connection,$query);                                                                
                            ?>
                            <?php while($array=mysqli_fetch_array($res)){                                 
                                $id=$array['id'];
                                $nombre=$array['name'];                                    
                            ?>                                
                            <option value="<?php echo $id ?>"><?php echo $nombre; ?></option>
                            <?php } ?>
                            <?php mysqli_close($connection); ?>
                        </select>
                    <button type="submit">Guardar</button>
                    </div>
                    
                </form>                              
            </div>             
    </div>

            







    <?php
        include ('../../layouts/footer.php');
    ?>
</body>
</html>