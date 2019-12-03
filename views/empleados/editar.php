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
        
        $ide=$_GET['id'];           
                    
        include ('../conexionmysql.php');
        $query="SELECT * FROM empleado WHERE id='$ide'";
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

        $query="SELECT * FROM domicilios WHERE id='$id'";
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));               
            $obj=mysqli_fetch_array($result);  
            $calle=$obj['calle'];
            $colonia=$obj['colonia'];
            $estado=$obj['id_estado'];
            $numero_exterior=$obj['numero_exterior'];
            $numero_interior=$obj['numero_interior'];
            $cp=$obj['cp'];
            $municipio=$obj['municipio'];

        //Datos Laborales
        $query="SELECT * FROM trabajador WHERE id='$id'";
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));               
            $obj=mysqli_fetch_array($result);
            $id_puesto=$obj['id_puesto'];
            $sueldo=$obj['sueldo'];
            $horas=$obj['horas'];
        
        $query="SELECT * FROM puesto WHERE id='$id_puesto'";
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));               
            $obj=mysqli_fetch_array($result);
            $nombre_puesto=$obj['name'];
            $id_dep=$obj['id_departamentos'];

        $query="SELECT * FROM departamentos WHERE id='$id_dep'";
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));               
                $obj=mysqli_fetch_array($result);             
                $departamento=$obj['name'];
                $jefe=$obj['jefe'];

        $query="SELECT * FROM empleado WHERE id='$jefe'";
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));               
            $obj=mysqli_fetch_array($result);
            $nombre_jefe=$obj['nombre'];
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
    <div class="container-fluid justify-content-center border border-primary rounded">   
                <div class="row justify-content-center">
                    <div class="col justify-content-center">
                        <br>
                        <h3><span class="oi oi-book"></span>Datos Personales</h3>                        
                    </div>                            
                </div>
            <form action="/nomitec/backend/empleados/editar.php?id=<?php echo $id ?>" method="post">
                <div class="row">                    
                    <div class="col-6 form-group">                                            
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control text-center" value="<?php echo $nombre; ?>">
                        </div>
                        <div class="form-group">
                            <label>Apellido Paterno</label>
                            <input type="text" name="ape_pat" class="form-control text-center" value="<?php echo $ape_pat; ?>">
                        </div>
                        <div class="form-group">
                            <label>Apellido Materno</label>
                            <input type="text" name="ape_mat" class="form-control text-center" value="<?php echo $ape_mat; ?>">
                        </div>                                                                                               
                        <div class="form-group">
                            <label for="rfc">RFC</label>                                                                                                                                                                                      
                            <input type="text" name="rfc" class="form-control text-center" value="<?php echo $rfc ?>">
                        </div>
                    </div>
                    <div class="col-6">                        
                        <div class="form-group">
                            <label for="curp">CURP</label>
                            <input type="text" name="curp" class="form-control text-center" value="<?php echo $curp ?>">
                        </div>
                        <div class="form-group">
                            <label for="nss">NSS</label>
                            <input type="text" name="nss" class="form-control text-center" value="<?php echo $nss ?>">
                        </div>                    
                        <div class="form-group">
                            <label for="contrato">Contrato</label>                   
                            <select class="form-control text-center" name="contrato">
                                <?php
                                    include ('../conexionmysql.php');
                                     $query="SELECT * FROM contrato WHERE id='$contrato'";
                                     $res=mysqli_query($connection,$query);
                                     $array=mysqli_fetch_array($res);
                                        $nc=$array['name'];
                                ?>
                                <option value="<?php echo $contrato ?>"><?php echo $nc ?></option>
                                   <?php                                                                         

                                    $query="SELECT * FROM contrato WHERE id!='$contrato'";
                                    $res=mysqli_query($connection,$query);
                                    while($array=mysqli_fetch_array($res)){
                                        $id_contrato=$array['id'];
                                        $nc=$array['name'];                                    
                                        echo '<option value="'.$id_contrato.'">'.$nc.'</option>';                                    
                                    }  
                                    mysqli_close($connection);                                
                                    ?>                          
                            </select>                    
                        </div>
                        <div class="form-group">
                            <label for="nivelEstudios">Nivel de estudios</label>
                            <select class="form-control" name="id_nivel"> 
                                <?php
                                    include ('../conexionmysql.php');
                                     $query="SELECT * FROM nivel WHERE id='$nivel'";
                                     $res=mysqli_query($connection,$query);
                                     $array=mysqli_fetch_array($res);
                                        $nn=$array['name'];
                                ?>
                                <option value="<?php echo $nivel ?>"><?php echo $nn ?></option>
                                   <?php                                                                         

                                    $query="SELECT * FROM nivel WHERE id!='$nivel'";
                                    $res=mysqli_query($connection,$query);
                                    while($array=mysqli_fetch_array($res)){
                                        $idnivel=$array['id'];
                                        $nameniv=$array['name'];                                    
                                        echo '<option value="'.$idnivel.'">'.$nameniv.'</option>';                                    
                                    }  
                                    mysqli_close($connection);                                
                                    ?>                           
                            </select>
                        </div>
                    </div>                   
                        <br>                    
                </div>
                <div class="row justify-content-center">
                    <div class="col justify-content-center">                       
                        <h3><span class="oi oi-book"></span>Domicilio</h3>                        
                    </div>                            
                </div>
                <div class="row">
                    <div class="col-6">                       
                        <div class="form-group">
                            <label for="calle">Calle</label>
                            <input type="text" name="calle" class="form-control text-center" value="<?php echo $calle ?>">
                        </div>
                        <div class="form-group">
                            <label for="numero_exterior">Numero Exterior</label>
                            <input type="text" name="numero_exterior" class="form-control text-center" value="<?php echo $numero_exterior ?>">
                        </div>
                        <div class="form-group">
                            <label for="numero_interior">Numero Interior</label>
                            <input type="text" name="numero_interior" class="form-control text-center" value="<?php echo $numero_interior ?>">
                        </div>
                        <div class="form-group">
                            <label for="colonia">Colonia</label>
                            <input type="text" name="colonia" class="form-control text-center" value="<?php echo $colonia ?>">
                        </div>                                                                   
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="municipio">Municipio</label>
                            <input type="text" name="municipio" class="form-control text-center" value="<?php echo $municipio ?>">
                        </div>
                        <div class="form-group">
                            <label>Estado</label>                   
                            <select class="form-control text-center" name="id_estado">
                                <?php
                                    include ('../conexionmysql.php');
                                     $query="SELECT * FROM estado WHERE id='$estado'";
                                     $res=mysqli_query($connection,$query);
                                     $array=mysqli_fetch_array($res);
                                        $ne=strtoupper($array['name']);
                                ?>
                                <option value="<?php echo $estado ?>"><?php echo $ne ?></option>
                                   <?php                                                                         

                                    $query="SELECT * FROM estado WHERE id!='$estado'";
                                    $res=mysqli_query($connection,$query);
                                    while($array=mysqli_fetch_array($res)){
                                        $id_estado=$array['id'];
                                        $ne= strtoupper($array['name']);                                    
                                        echo '<option value="'.$id_estado.'">'.$ne.'</option>';                                    
                                    }  
                                    mysqli_close($connection);                                
                                    ?>                          
                            </select>                    
                        </div>
                        <div class="form-group">
                            <label for="cp">Codigo Postal</label>
                            <input type="text" name="cp" class="form-control text-center" value="<?php echo $cp ?>">
                        </div> 
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col justify-content-center">
                        <br>
                        <h3><span class="oi oi-book"></span>Datos Laborales</h3>                        
                    </div>                            
                </div>
                <div class="row">
                    <div class="col-6">                       
                        <div class="form-group">
                            <label>Puesto</label>
                                <select class="form-control" name="id_puesto" required>
                                    <?php
                                        include ('../conexionmysql.php');
                                        $query="SELECT * FROM puesto WHERE id='$id_puesto'";
                                        $res=mysqli_query($connection,$query);                                                                                              
                                        $array=mysqli_fetch_array($res);                                 
                                        $idp=$array['id'];
                                        $np=$array['name'];                                
                                        $dep=$array['id_departamentos']; 

                                        $query2="SELECT * FROM departamentos";
                                        $res2=mysqli_query($connection,$query2);
                                        while($array2=mysqli_fetch_array($res2)){

                                            if($array2['id']==$dep){
                                                $nombredep=$array2['name'];                                                                     
                                            }

                                        }
                                    ?>
                                    <option value="<?php echo $idp; ?>"><?php echo $np.' - '.$nombredep; ?></option>                                    
                                    <?php                                         
                                        $query="SELECT * FROM puesto WHERE id!='$id_puesto'";
                                        $res=mysqli_query($connection,$query);                                                                                              
                                        while($array=mysqli_fetch_array($res)){                                 
                                        $idp=$array['id'];
                                        $np=$array['name'];                                
                                        $dep=$array['id_departamentos']; 

                                        $query2="SELECT * FROM departamentos";
                                        $res2=mysqli_query($connection,$query2);
                                        while($array2=mysqli_fetch_array($res2)){

                                            if($array2['id']==$dep){
                                                $nombredep=$array2['name'];                                                                     
                                            }

                                        } 
                                          echo '<option value="'.$idp.'">'.$np.' - '.$nombredep.'</option>';
                                        } 
                                        mysqli_close($connection);                                                            
                                    ?>                                                                                                       
                                </select>                            
                        </div>
                        <div class="form-group">
                            <label>Sueldo Diario</label>
                            <input type="text" name="sueldo" class="form-control text-center" value="<?php echo $sueldo ?>">
                        </div>                                                                                          
                    </div>
                    <div class="col-6">                        
                        <div class="form-group">
                            <label for="estado" >Jefe Directo</label>
                            <input type="text" class="form-control text-center" value="<?php echo $nombre_jefe ?>" disabled>
                        </div> 
                        <div class="form-group">
                            <label for="colonia">Horas Diarias</label>
                            <input type="text" name="horas"class="form-control text-center" value="<?php echo $horas ?>">
                        </div>                       
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-6">
                        <button class="form-control btn btn-success my-3" type="submit">Guardar</button>                    
                    </div>
                </div>
            </form>       
    </div>               
</div>

<?php
    include ('../../layouts/footer.php');
?>
</body>
</html>