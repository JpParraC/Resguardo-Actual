<?php
session_start();
require_once('./php/conn.php');
$admin_id = $_SESSION['id'];

// Consulta SQL para obtener los datos del administrador desde la tabla tbtayu
$admin_sql = "SELECT * FROM tbtayu WHERE id_usuario = '$admin_id'";
$admin_result = $conn->query($admin_sql);

if ($admin_result === false) {
    // Manejar el error en la consulta si es necesario
    die("Error en la consulta SQL: " . $conn->error);
}

// Obtener los datos del administrador
$admin_data = $admin_result->fetch_assoc();

// Consulta SQL para obtener los datos del administrador desde las tablas tbtayu y tbmfnc
$sql = "SELECT tbmfnc.*, tbtayu.* 
        FROM tbtayu 
        JOIN tbmfnc ON tbtayu.id_cedula = tbmfnc.fnccid 
        WHERE tbtayu.id_usuario = '$admin_id'";

$result = $conn->query($sql);

if ($result === false) {
    // Manejar el error en la consulta si es necesario
    die("Error en la consulta SQL: " . $conn->error);
}
// Obtener los datos del administrador desde la segunda consulta
$admin = $result->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Listado de Jubilación</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper"> <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="index.html">
                        <h1>POLITÁCHIRA</h1>
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="index.html">Dashboard 1</a>
                            </li>
                            <li>
                                <a href="index2.html">Dashboard 2</a>
                            </li>
                            <li>
                                <a href="index3.html">Dashboard 3</a>
                            </li>
                            <li>
                                <a href="index4.html">Dashboard 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="funcionarios.php">
                            <i class="fas fa-user"></i>Funcionarios</a>
                    </li>
                    <li>
                        <a href="aggfuncionario.php">
                            <i class="fas fa-user"></i>Agregar Funcionario</a>
                    </li>
                    <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-folder"></i>Administrar</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="./editarfnc.php">Editar Funcionario</a>
                                    </li>
                                  <li>
                                        <a href="editcomando.php">Listado Personal</a>
                                    </li>
                                    
                                </ul>
                            </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-tachometer-alt"></i>Distribución</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="./comando.php">Comandos</a>
                            </li>
                            <li>
                                <a href="./listadocmdo.php">Listado Personal</a>
                            </li>
                            <li>
                                <a href="./aggcomando.php">Agregar Comando</a>
                            </li>
                            <li>
                                <a href="./aggpersonalcpp.php">Agregar Funcionario a CPP</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                                <a href="./jubilaciones.php">
                                    <i class="fas fa-chart-bar"></i>Listado de Jubilación</a>
                    </li>
                    <li>
                                <a href="faltas.html">
                                    <i class="fas fa-table"></i> Amonestaciones</a>
                    </li>
                    <li>
                                <a href="./solicitudes.php">
                                    <i class="fas fa-handshake"></i>Solicitudes</a>
                    </li>
                            
                    <li>
                                <a href="./hsolicitudes.php">
                                    <i class="fas fa-file"></i>Historico Solicitud</a>
                    </li>
                    <li>
                                <a href="./ascensos.php">
                                    <i class="fas fa-file"></i>Lista de Ascensos</a>
                    </li>
                    
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="#">
                <img src="images/icon/logopltdash.png" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="index.html">Dashboard 1</a>
                            </li>
                            <li>
                                <a href="index2.html">Dashboard 2</a>
                            </li>
                            <li>
                                <a href="index3.html">Dashboard 3</a>
                            </li>
                            <li>
                                <a href="index4.html">Dashboard 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="funcionarios.php">
                            <i class="fas fa-user"></i>Funcionarios</a>
                    </li>
                    <li>
                        <a href="aggfuncionario.php">
                            <i class="fas fa-user"></i>Agregar Funcionario</a>
                    </li>
                    <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-folder"></i>Administrar</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="./editarfnc.php">Editar Funcionario</a>
                                    </li>
                                  <li>
                                        <a href="editcomando.php">Listado Personal</a>
                                    </li>
                                    
                                </ul>
                            </li>

                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-map-marker-alt"></i>Distribución</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="./comando.php">Comandos</a>
                            </li>
                            <li>
                                <a href="./listadocmdo.php">Listado Personal</a>
                            </li>
                            <li>
                                <a href="./aggcomando.php">Agregar Comando</a>
                            </li>
                            <li>
                                <a href="./aggpersonalcpp.php">Agregar funcioanrio a CPP</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                                <a href="./jubilaciones.php">
                                <i class="fas fa-chart-bar"></i>Listado de Jubilación</a>
                    </li>
                    <li>
                                <a href="faltas.html">
                                    <i class="fas fa-table"></i> Amonestaciones</a>
                    </li>
                    <li>
                                <a href="./solicitudes.php">
                                    <i class="fas fa-handshake"></i>Solicitudes</a>
                    </li>
                    <li>
                                <a href="./hsolicitudes.php">
                                    <i class="fas fa-file"></i>Historico Solicitud</a>
                     </li>
                     <li>
                                <a href="./ascensos.php">
                                    <i class="fas fa-file"></i>Lista de Ascensos</a>
                    </li>
                 
                    
                </ul>
            </nav>
        </div>
    </aside>

    <!-- PAGE CONTAINER-->

    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <div class="header-button">
                            <div class="account-wrap" style="margin-left: 1000px;">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="image">
                                        <img src="images/icon/icono.avif"   />
                                    </div>


                                    <div class="content">
                                        <a class="js-acc-btn" href="#"></a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="images/icon/icono.avif"  />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="name">
                                                    <a href="#"><?php echo $admin['fncnop']?></a>
                                                </h5>
                                                <span class="email"><?php echo $admin['fnccor']?></span>
                                            </div>
                                        </div>
                                      
                                       
                                        <div class="account-dropdown__footer">
                                            <a href="./home.php">
                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
            <!-- END HEADER DESKTOP-->

            <div class="main-content">
                <div class="section__content section__content--p30 ">
                    <div class="container-fluid ">
                        <div class="row">
                            <div class="col-md-12">
                                
                                <div class="map-data m-b-40 bg-dark">
                                    <h3 class="title-3 m-b-30 text-white" >
                                        <i class="fas fa-chart-pie text-white"></i>Listado Jubilación</h3>
                                    
                                       
                                      
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="yearForm">
                                            <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                                <select class="js-select2 au-select-dark" name="year" form="yearForm">
                                                    <option selected="selected">Año: </option>
                                                    <?php
                                                    for ($year = 2024; $year <= 2035; $year++) {
                                                        echo "<option value=\"$year\">$year</option>";
                                                    }
                                                    ?>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                            <input type="submit" class="btn btn-primary" value="Buscar">
                                        </form>

                                        <table class="table-responsive" id="listado">
                                            <tbody>
                                                <?php
                                                // Incluye el archivo listadojubilacion.php para obtener los datos
                                                include('./php/listadojubilacion.php');

                                            
                                                ?>
                                            </tbody>
                                        </table>



                                   
                                 


                                    
                                </div>
                                

                                 
                            </div>

                            
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>
    <script src="vendor/vector-map/jquery.vmap.brazil.js"></script>
    <script src="vendor/vector-map/jquery.vmap.europe.js"></script>
    <script src="vendor/vector-map/jquery.vmap.france.js"></script>
    <script src="vendor/vector-map/jquery.vmap.germany.js"></script>
    <script src="vendor/vector-map/jquery.vmap.russia.js"></script>
    <script src="vendor/vector-map/jquery.vmap.usa.js"></script>

    <script src="ruta/a/jquery.js"></script>
    <script src="ruta/a/dataTables.js"></script>


    <!-- Main JS-->
    <script src="js/main.js"></script>

   
</body>

</html>
<!-- end document-->
