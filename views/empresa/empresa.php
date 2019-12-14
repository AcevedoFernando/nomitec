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

        include ('../conexionmysql.php');
        $id_empresa = 1;
        $query = "SELECT * FROM datos_empresa";
        $result = mysqli_query($connection, $query);
        $array = mysqli_fetch_array($result);
            $razon_social = $array['razon_social'];        
            $rfc = $array['rfc'];
            $telefono = $array['telefono'];
            $email = $array['email'];                       
            $calle = $array['calle'];
            $colonia = $array['colonia'];
            $municipio = $array['municipio'];
            $estado = $array['estado'];
            $cp = $array['cp'];
            $numero_interior = $array['numero_interior'];
            $numero_exterior = $array['numero_exterior'];
        


        mysqli_close($connection);

    ?>

    <div class="jumbotron mx-5">            
        <div class="row justify-content-center">
            <h3 class="font-text-bold">Datos de la empresa</h3>
        </div>      
        <hr>
        <div class="row justify-content-center">                                
            <form action="/nomitec/backend/empresa/empresa.php" method="post">                                        
                    <div class="col">
                        <div class="form-group">
                            <label>Razón Social</label>
                            <input type="text" class="form-control" name="razon_social" value="<?php echo $razon_social ?>">
                        </div>
                        <div class="form-group">
                            <label>RFC</label>
                            <input type="text" class="form-control" name="rfc" value="<?php echo $rfc ?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Teléfono</label>
                            <input type="text" class="form-control" name="telefono" value="<?php echo $telefono ?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
                        </div> 
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Calle</label>
                            <input type="text" class="form-control" name="calle" value="<?php echo $calle ?>">
                        </div>
                        <div class="form-group">
                            <label>Colonia</label>
                            <input type="text" class="form-control" name="colonia" value="<?php echo $colonia ?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Municipio</label>
                            <input type="text" class="form-control" name="municipio" value="<?php echo $municipio ?>">
                        </div>
                        <div class="form-group">
                            <label>Estado</label>
                            <input type="text" class="form-control" name="estado" value="<?php echo $estado ?>">                        
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Código Postal</label>
                            <input type="text" class="form-control" name="cp" value="<?php echo $cp ?>">
                        </div>                    
                        <div class="form-group">
                            <label>Número Exterior</label>
                            <input type="text" class="form-control" name="numero_exterior" value="<?php echo $numero_exterior ?>">
                        </div>
                        <div class="form-group">
                            <label>Número Interior</label>
                            <input type="text" class="form-control" name="numero_interior" value="<?php echo $numero_interior ?>">
                        </div>
                    </div>   
                    <div class="col">
                        <button class="btn btn-info">Guardar</button>
                    </div>            
            </form>                              
        </div>             
    </div>

    <?php
        include ('../../layouts/footer.php');
    ?>
</body>
</html>