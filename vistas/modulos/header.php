<header class="main-header">

    <!-- LOGOTIPO -->
    <a href="vistas/index2.html" class="logo">
        <!-- LOGOTIPO MINI -->
        <span class="logo-mini">
            <img src="vistas/img/plantilla/logo-mini.png" class="img-responsive" style="padding: 5px;">
        </span>

        <span class="logo-lg">
            <img src="vistas/img/plantilla/logo-largo.jpg" class="img-responsive" style="padding: 1px 1px">
        </span>

    </a>

    <!-- BARRA DE NAVEGACION -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Tasks: style can be found in dropdown.less -->
                <li class="dropdown tasks-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>
                        <span class="label label-danger">1</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 1 tasks</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <!-- Task item -->
                                    <a href="#">
                                        <h3>
                                            Design some buttons
                                            <small class="pull-right">10%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-aqua" style="width: 20%"
                                                role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                aria-valuemax="100">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">View all tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo $_SESSION["foto"]; ?>" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?php echo $_SESSION["nombres"]; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">

                            <?php
                                  if ($_SESSION["foto"] != "") {
                                    echo '<img src="'.$_SESSION["foto"].'" class="img-circle"
                                alt="User Image">';
                            }else{
                            echo '<img src="vistas/img/usuarios/default/anonimo.png" class="img-circle"
                                alt="User Image">';
                            }
                            ?>
                            <p>
                                Victor Eusebio Soto - Web Developer
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="salir" class="btn btn-default btn-flat">Salir</a>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</header>