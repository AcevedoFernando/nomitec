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
    <title>Nomitec | Nueva nomina</title>
    
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
    ?>



    <div class="jumbotron mx-5">
            <div class="row justify-content-start">
                <form action="nominas.php">
                    <button class="ml-5 btn btn-info" type="submit">Regresar</button>                
                </form>
            </div>
            <div class="row justify-content-center"><h3 class="font-text-bold">Registro de Nomina</h3></div>      
            <hr>
            <div class="row justify-content-center">                                
                <form action="/nomitec/backend/nominas/alta.php" method="post">                    
                    <div class="form-group">
                        <label>Trabajador</label>
                        <select class="form-control" name="trabajador" id="trabajador">
                            <option value="">Seleccione una opcion</option>
                            <?php
                                include ('../conexionmysql.php');
                                $query = "SELECT * FROM empleado";
                                $result = mysqli_query($connection, $query);                                
                                while($array = mysqli_fetch_array($result)){
                                    $id_empleado = $array['id'];
                                    $nombre_empleado = $array['nombre'];
                                    $ape_pat = $array['ape_pat'];
                                    $ape_mat = $array['ape_mat'];
                            ?>
                                <option value="<?php echo $id_empleado; ?>"><?php echo $id_empleado."-".$nombre_empleado." ".$ape_pat." ".$ape_mat; ?></option>
                            <?php
                                } 
                                mysqli_close($connection);
                            ?>
                        </select>                        
                    </div>
                    <div class="form-group">
                        <label>Dias Laborados</label>
                        <input type="numeric" placeholder="......" name="dias_laborados" class="form-control">
                    </div> 
                    <div class="form-group">
                        <label>Horas Extras</label>
                        <input type="numeric" placeholder="......" name="horas_extra" class="form-control">
                    </div>  
                    <br>
                    <div class="form-group">
                       <button type="submit" class="form-control btn btn-info">Siguiente</button>
                    </div>
                </form>                              
            </div>             
    </div>

            







    <?php
        include ('../../layouts/footer.php');
    ?>
</body>
</html>