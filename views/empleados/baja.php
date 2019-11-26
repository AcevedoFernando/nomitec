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
    <title>Nomitec | Dar de baja</title>
    
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
        include ('../../layouts/menu.php');
        
        $id=$_GET['id'];           
                    
        include ('../conexionmysql.php');
        $query="SELECT * FROM empleado WHERE id='$id'";
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));               
            $obj=mysqli_fetch_array($result);                                            
            $nombre=$obj['nombre'];
            $ape_pat=$obj['ape_pat'];
            $ape_mat=$obj['ape_mat'];                                                           

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
                <div class="col-12 form-group text-center">
                    <br>
                    <h2>Esta seguro en de dar de baja al empleado: <br> <?php echo $nombre.' '.$ape_pat.' '.$ape_mat; ?></h2>   
                </div>
                <div class="input-group justify-content-center">
                    <button type="button" class="input-item btn btn-danger" onclick="location.href='/nomitec/backend/empleados/bajas.php?id=<?php echo $id ?>'">Si, estoy de acuerdo </button>   
                    <button type="button" class="input-item btn btn-warning" onclick="location.href='/nomitec/views/empleados/empleados.php'">No, regresar al listado </button>   
                </div> 
                <br>
    </div>               
</div>

<?php
    include ('../../layouts/footer.php');
?>
</body>
</html>