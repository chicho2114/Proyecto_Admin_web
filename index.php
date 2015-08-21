<?php 
session_start();
    include("BD_controller.php");
   $_SESSION["id_usuario"];
   $_SESSION["tipo_usuario"];
   $_SESSION["nombre_usuario"];

 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perfil de administrador</title>

    <!-- Bootstrap Core CSS -->
    <link href="admcss/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admcss/css/sb-admin.css" rel="stylesheet">



    <!-- Custom Fonts -->
    <link href="admcss/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Barra de navegacion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Perfil de Administrador</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo  $_SESSION["nombre_usuario"]; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Salir</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-file-text-o"></i> Pagina Principal</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#users"><i class="fa fa-fw fa-list"></i> Gestionar Usuarios <i class="fa fa-fw fa-caret-down"></i></a>
                                                <ul id="users" class="collapse">
                                                    <li>
                                                        <a href="crear_usuario.php"><i class="fa fa-fw fa-users"></i> Crear Usuario</a>
                                                    </li>
                                                    <li>
                                                        <a href="modificar_usuario.php"><i class="fa fa-fw fa-edit"></i> Modificar Usuario</a>
                                                    </li>
                                                    <li>
                                                        <a href="eliminar_usuario.php"><i class="fa fa-fw fa-times"></i> Eliminar Usuario</a>
                                                    </li>
                                                </ul>

                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#materias"><i class="fa fa-fw fa-list"></i> Gestionar Materias <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="materias" class="collapse">
                            <li>
                                <a href="crear_materia.php"><i class="fa fa-fw fa-plus-square-o"></i> Crear Materia</a>
                            </li>
                            <li>
                                <a href="modificar_materia.php"><i class="fa fa-fw fa-edit"></i> Modificar Materia</a>
                            </li>
                            <li>
                                <a href="modificar_materia.php"><i class="fa fa-fw fa-times"></i> Eliminar Materia</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="modificar_grupo.php"><i class="fa fa-fw fa-comments-o"></i> Gestionar Grupos</a>
                    </li>
                    <li>
                        <a href="gestionar_publicacion.php"><i class="fa fa-fw fa-eye"></i> Gestionar Publicaciones</a>
                    </li>
                    <li>
                        <a href="gestionar_puntaje.php"><i class="fa fa-fw fa-gears"></i> Gestionar Puntaje</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< COMIENZO CONTENIDO DE LA CABECERA >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Bienvenido 
                            <small>Administrador</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                 <i class="fa fa-fw fa-file-text-o"></i>  Inicio
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< FINAL CONTENIDO DE LA CABECERA >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
               
                <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< COMIENZA DONDE VA EL CONTENIDO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
                <div class="row">
                    <div class="col-lg-12">

                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-users fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">1</div>
                                            <div>Crear nuevo usuario</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="crear_usuario.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">Ver en detalle</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-edit fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">2</div>
                                            <div>Modificar Usuario</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="modificar_usuario.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">Ver en detalle</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-times fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">3</div>
                                            <div>Eliminar Usuario</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="modificar_usuario.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">Ver en detalle</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-plus-square-o fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">4</div>
                                            <div>Crear Materia</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="crear_materia.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">Ver en detalle</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-edit fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">5</div>
                                            <div>Modificar Materia</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="modificar_materia.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">Ver en detalle</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-times fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">6</div>
                                            <div>Eliminar Materia</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="modificar_materia.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">Ver en detalle</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-comments-o fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">7</div>
                                            <div>Gestionar Grupo</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="modificar_grupo.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">Ver en detalle</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-eye fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">8</div>
                                            <div>Gestionar Publicacion</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="gestionar_publicacion.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">Ver en detalle</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-gears fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">9</div>
                                            <div>Gestionar Puntos</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="gestionar_puntaje.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">Ver en detalle</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    
                    </div>
                </div>
                <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< TERMINA DONDE VA EL CONTENIDO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="admcss/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admcss/js/bootstrap.min.js"></script>

</body>

</html>
