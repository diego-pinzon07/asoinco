<!-- Vista de iniciar sesion -->
<div class="card-group letra1 ">
    <div class="card centrar bg-light">

        <div class="card-body">
            <!-- <h5 class="card-title letra3 padin1">DIEGO SEBASTIAN PINZÓN GONZALEZ</h5> -->
            <p class="card-text letra3 padin1"><?php echo "" . $user->getRolName();?><br>
            <?php echo "" . $user->getUserName()?>&nbsp;<?php echo "" . $user->getUserLastName(); ?>
            
        </p>
            <a href="?c=Logout">
                <i class="fas fa-power-off"></i>
            </a>
        </div>
    </div>
    <div class="card">
        
        <div class="card-body bg-light">
            
            <p class="letra3">El Sistema de Información fue creado con el fin de Gestionar los Procesos y dar Cumplimiento a las Actividades de una manera más práctica y sencilla.</p>
            <p class="letra3">
                Para cualquier inquietud comunícate con El Equipo De Soporte al Correo Electrónico soporte@asoinco.com
            </p>
        </div>
    </div>

    <div class="card-group">
        <div class="card">
            <div class="card-body bg-light">
                <h5 class="card-title centrar mod letra4"><b>Gestión de Procesos</b></h5>
                <div class="card-group bg-light">
                    <div class="card">
                        <div class="card-body bg-light">

                            <h5 class="card-title centrar letra3 "><b>CALIDAD HUMANA</b></h5>

                            

                            <!-- Página para registrar beneficiarios y mirarlos en la lista -->
                            

                            <a href="?c=Roles&a=registrarRoles" class="btn btn-primary padin1">CREAR ROL</a>

                            <a href="?c=Roles&a=consultarRoles" class="btn btn-primary padin1"> LISTA DE ROLES</a>
                            <a href="?c=Users&a=registrarUsuarios" class="btn btn-primary padin1"> CREAR USUARIO</a>
                            <!-- <a href="?c=users&a=consultarUsuarios" class="btn btn-primary"> Lista De Usuarios</a> -->
                            <a href="?c=Users&a=consultarUsuarios" class="btn btn-primary padin1"> LISTA DE USUARIOS</a>

                            <a href="?c=Users&a=consultarAspirante" class="btn btn-primary padin1">LISTA ASPIRANTES</a>

                            <a href="?c=Users&a=consultarBeneficiario" class="btn btn-primary padin1">LISTA BENEFICIARIOS</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body bg-light">

                            <h5 class="card-title centrar inv1 letra3"><b>INVENTARIO</b></h5>

                            <a href="?c=Categorias&a=registrarCategorias" class="btn btn-primary padin1">REGISTRAR CATEGORIA</a>

                            <a href="?c=Categorias&a=consultarCategoria" class="btn btn-primary padin1">CONSULTAR CATEGORIA</a>

                            <a href="?c=Productos&a=registrarProductos" class="btn btn-primary padin1">REGISTRAR PRODUCTOS</a>

                            <a href="?c=Productos&a=consultarProducto" class="btn btn-primary padin1">CONSULTAR PRODUCTOS</a>
                            
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body bg-light">
                            <h5 class="card-title centrar letra3"><b>INFORMES</b></h5>

                            <a href="?c=Roles&a=consultarRolesReporte" class="btn btn-primary padin1">ROLES REGISTRADOS</a>

                            <a href="?c=Users&a=consultarEmpleados" class="btn btn-primary padin1">USUARIOS REGISTRADOS</a>

                            <a href="?c=Productos&a=consultarProductoReporte" class="btn btn-primary padin1">PRODUCTOS REGISTRADOS</a>

                            <a href="?c=Categorias&a=consultarCategoriasReporte" class="btn btn-primary padin1">CATEGORIAS REGISTRADAS</a>

                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>