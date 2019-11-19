
<!-- Menu de navegacion -->
<header>
       <nav class="navbar navbar-expand-md border border-primary fixed-top" style="background-color:#bcdee2">                                   
               <a class="navbar-brand" href="#"><img src="../resources/logont.png" class="img-thumbnail"alt="" width="90" height="90"></a>                   
               
               <ul class="navbar-nav mr-auto"> 

                   <li class="nav-item dropdown mr-3 ml-3"> 
                       <a class="nav-link dropdown-toggle border border-primary rounded" data-toggle="dropdown" 
                       href="#" role="button" aria-haspopup="true" aria-expanded="false">Empleados</a>
                       <div class="dropdown-menu">
                           <?php if($_SESSION['rol']<=2){ ?>
                           <a class="dropdown-item" href="#">Registrar empleado</a>
                           <a class="dropdown-item" href="#">Eliminar empleado</a>
                           <a class="dropdown-item" href="#">Cambiar estatus de empleado</a>
                           <?php } ?>
                           <a class="dropdown-item" href="#">Prestamos</a>
                           <a class="dropdown-item" href="#">Lista de empleados</a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item" href="#">Imprimir Nominas</a>
                       </div>
                   </li>
                    
                   <li class="nav-item dropdown mr-3 ml-3">
                       <a class="nav-link dropdown-toggle border border-primary rounded" data-toggle="dropdown" 
                       href="#" role="button" aria-haspopup="true" aria-expanded="false">Deducciones Salariales</a>
                       <div class="dropdown-menu">     
                           <?php if($_SESSION['rol']<=2){ ?>                       
                           <a class="dropdown-item" href="#">Agregar deducción</a>
                           <a class="dropdown-item" href="#">Editar deduccion</a> 
                           <div class="dropdown-divider"></div>
                           <?php } ?>                                                  
                           <a class="dropdown-item" href="#">Lista de deducciones</a>
                       </div>
                   </li>
                    <?php if($_SESSION['rol']<=2){?>
                   <li class="nav-item dropdown mr-3 ml-3">
                       <a class="nav-link dropdown-toggle  border border-primary rounded" data-toggle="dropdown" 
                       href="#" role="button" aria-haspopup="true" aria-expanded="false">Administrar</a>
                       <div class="dropdown-menu">   
                           <?php if($_SESSION['rol']==1){?>                         
                           <a class="dropdown-item" href="#">Agregar Usuarios</a>
                           <a class="dropdown-item" href="#">Editar Usuarios</a>   
                           <div class="dropdown-divider"></div>  
                           <?php } ?>                                                  
                           <a class="dropdown-item" href="#">Lista de usuarios</a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item" href="#">Aréas o Departamentos</a>
                       </div>
                   </li>
                    <?php } ?>


                   <li class="nav-item mr-3 ml-3  border border-primary rounded">
                        <a class="nav-link" href="#">Reportes</a>
                    </li>  

                    <li class="nav-item mr-3 ml-3  border border-primary rounded">
                        <a class="nav-link" href="../backend/sesiones/cerrarsesion.php" data-toggle="tooltip" data-placement="bottom" title="Cerrar Sesión"><span class="oi oi-account-logout"></span></a>
                    </li>                   
           </ul>    
           <p class="text-muted mr-3">© UFO Tecnologies</p>       
       </nav>
</header> 
<br><br><br><br><br>



