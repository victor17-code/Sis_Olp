<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Gestion de usuarios
            <small>Panel de control</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li><a href="#">Tablero</a></li>
        </ol>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <button class="btn btn-success" data-toggle="modal" data-target="#modalAgregarUsuario">
                    Nuevo Usuario
                </button>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
                    <thead>
                        <tr>
                            <th style="width: 3px;">#</th>
                            <th>Nombres</th>
                            <th>Usuario</th>
                            <th>Foto</th>
                            <th>Pefil</th>
                            <th>Estado</th>
                            <th>Ultimo login</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Victor Eusebio Soto</td>
                            <td>admin</td>
                            <td>no hay</td>
                            <td>Administrador</td>
                            <td><button class="btn btn-success btn-xs">Activo</button></td>
                            <td>12-12-2023</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </section>
</div>

<!-- ===============
MODALRISTRO DE USUARIOS
============= -->

<div id="modalAgregarUsuario" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">

            <form role="form" method="post" enctype="multipart/form-data">

                <div class="modal-header" style="background: #3c8dbc; color:white;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Agregar Usario</h4>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control input-lg" name="nuevoNombre"
                                    placeholder="Apellidos y Nombres" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input type="text" class="form-control input-lg" name="nuevoUsuario"
                                    placeholder="Ingrese usuario" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control input-lg" name="nuevoPassword"
                                    placeholder="Contraseña" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                <select class="form-control input-lg" name="nuevoPerfil" id="">
                                    <option value="">Seleccionar</option>
                                    <option value="Administrador">Administrador</option>
                                    <option value="Especial">Especial</option>
                                    <option value="Vendedor">Vendedor</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="panel">SUBIR FOTO</div>
                            <input type="file" id="nuevaFoto" name="nuevaFoto">
                            <p class="help-block">Peso maximo de la foto 200MB</p>
                            <img src="vistas/img/plantilla/fondo-login.jpg" class="img-thumbnail" width="100px">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>

                <?php
                $crearUsuario = new ControladorUsuarios();
                $crearUsuario->ctrCrearUsuario();
                ?>

            </form>

        </div>
    </div>
</div>