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
    <title>Nomitec | Ver Empleado</title>
    
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
        
        $id=$_GET['id'];           
                    
        include ('../conexionmysql.php');
        $query="SELECT * FROM empleado WHERE id='$id'";
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));               
            $obj=mysqli_fetch_array($result);
            $id=$obj['id'];                                     
            $nombre=$obj['nombre'];
            $ape_pat=$obj['ape_pat'];
            $ape_mat=$obj['ape_mat']; 
            $contrato=$obj['id_contrato'];
            $nivel=$obj['id_nivel']; 
            $rfc=$obj['rfc'];
            $nss=$obj['nss'];
            $curp=$obj['curp'];                                                        
        mysqli_close($connection);
    ?>


<div class="jumbotron mx-5">       
    <div class="row justify-content-start">
        <form action="empleados.php">
            <button class="ml-5 btn btn-info" type="submit">Regresar</button>                
        </form>
    </div>
            <br>
    <div class="row justify-content-center border border-primary rounded bg-primary">            
                <h3>Empleado: <?php echo $id; ?> </h3>             
    </div>
    <div class="row justify-content-center border border-primary rounded">        
            
                <div class="col-6 form-group text-center">
                    <br>
                    <label for="nombre"><ins>Nombre</ins></label>
                    <input type="text" name="nombre" class="form-control text-center" value="<?php echo $nombre.' '.$ape_pat.' '.$ape_mat; ?>" disabled>
                    
                    <br>
                    <label for="nivelEstudios"><ins>Nivel de estudios</ins></label>
                    <select class="form-control" name="nivelEstudios" disabled>
                            <option><?php 
                            
                            include ('../conexionmysql.php');

                            $query="SELECT * FROM nivel WHERE id='$nivel'";
                            $res=mysqli_query($connection,$query);
                            $array=mysqli_fetch_array($res);
                            echo $array['name'];

                            ?></option>                           
                    </select>
                    <br>
                    <label for="rfc"><ins>RFC</ins></label>                                                                                                                                                                                      
                    <input type="text" name="rfc" class="form-control text-center" value="<?php echo $rfc ?>" disabled>
                    <label for="curp"><ins>CURP</ins></label>
                    <input type="text" name="curp" class="form-control text-center" value="<?php echo $curp ?>" disabled>
                    <label for="nss"><ins>NSS</ins></label>
                    <input type="text" class="form-control text-center" value="<?php echo $nss ?>" disabled>
                    <br>                    
                    <label for="contrato"><ins>Contrato</ins></label>                   
                    <select class="form-control text-center" name="contrato" disabled>
                            <option value=""><?php 
                            
                                include ('../conexionmysql.php');

                                $query="SELECT * FROM contrato WHERE id='$contrato'";
                                $res=mysqli_query($connection,$query);
                                $array=mysqli_fetch_array($res);
                                echo $array['name'];

                            ?></option>                           
                    </select>                    
                    <br>
                </div>
                      
    </div>               
</div>

<?php
    include ('../../layouts/footer.php');
?>
</body>
</html>