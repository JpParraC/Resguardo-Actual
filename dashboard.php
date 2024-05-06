<?php
session_start();
require_once('./php/conn.php');
$admin_id = $_SESSION['cedula'];



// Consulta SQL para obtener los datos del administrador desde la tabla tbtayu
$admin_sql = "SELECT * FROM tbtayu WHERE id_cedula = '$admin_id'";
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
        WHERE tbtayu.id_cedula = '$admin_id'";

$result = $conn->query($sql);

if ($result === false) {
    // Manejar el error en la consulta si es necesario
    die("Error en la consulta SQL: " . $conn->error);
}

// Obtener los datos del administrador desde la segunda consulta
$admin = $result->fetch_assoc();



// Resto del código de funcionarios.php
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

    <!--  libreria para buscar -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js">
    </script>


    <!-- Title Page-->
    <title>DASHBOARD</title>

    <!-- Fontfaces CSS-->
    <link href="./css/font-face.css" rel="stylesheet" media="all">
    <link href="./vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="./vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="./vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    
    <!-- Bootstrap CSS-->
    <link href="./vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="./vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="./vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="./vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="./vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="./vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="./vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="./vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">



    <!-- Main CSS-->
    <link type="text/css" href="./css/theme.css"  rel="stylesheet" media="all">

</head>

<body class="animsition">

    
<header class="header-mobile d-block d-lg-none">
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
        

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">



                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Bienvenido de Nuevo
                            <?php
                            // Verificar si $admin no es nulo antes de intentar acceder a sus elementos
                            if ($admin !== null) {
                                echo '<a href="#">' . $admin['fncnop'] . '</a>';
                            } else {
                                echo 'No se encontraron datos para el administrador.';
                            }
                            ?>

                                
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <!-- STATISTIC-->
            <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--green">
                                <?php 
                                    $sql="SELECT * FROM `tbmfnc`;";
                                    $resultado=$conn->query($sql);
                                    $Funcionario=mysqli_num_rows($resultado);
                                ?>
                                <h2 class="number"><?php echo $Funcionario;?></h2>
                                <span class="desc">Funcionarios Registrados</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--orange">
                                <?php 
                                    $sql="SELECT * FROM `tbdslc` WHERE `slcest`=1;";
                                    $resultado=$conn->query($sql);
                                    $Solicitudes=mysqli_num_rows($resultado);
                                ?>
                                <h2 class="number"><?php echo $Solicitudes;?></h2>
                                <span class="desc">Solicitudes Pendientes</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-alert-polygon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <?php 
                                    $sql="SELECT * FROM `tberng`;";
                                    $resultado=$conn->query($sql);
                                    $Rangos=mysqli_num_rows($resultado);
                                ?>
                                <h2 class="number"><?php echo $Rangos;?></h2>
                                <span class="desc">Rangos Registrados</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-account"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--red">
                                <h2 class="number">$1,060,386</h2>
                                <span class="desc">total earnings</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-money"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                        <!-- END DATA TABLE -->
                    </div>
                </div>

                
             

                <div class="modal fade" id="eliminarModal" tabindex="-1" role="dialog" aria-labelledby="eliminarModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="eliminarModalLabel">Registro Eliminado</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>El registro ha sido eliminado correctamente.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary" id="confirmarRecarga">Confirmar</button>
                            </div>
                        </div>
                    </div>
                </div>

               
                

   



            </div>
        </div>
        <div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="scrollmodalLabel">Información Completa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5 class="text-center">Imagen Referente</h5>
                        <img class="" src="media/Fl0t-C_XEAAz1hY.jpg" width="300px" alt="">
                        <h5>Nombre Completo: </h5>
                        <p>Ashly Hanneiker Torres Velandia</p>
                        <h5>Cédula: </h5>
                        <p>30056463</p>
                        <h5>Código de Funcionario: </h5>
                        <p>454654</p>
                        <h5>Télefono: </h5>
                        <p>04126759712</p>
                        <h5>Género: </h5>
                        <p> Femenino</p>
                        <h5>Correo: </h5>
                        <p>ashlytorres@gmail.com</p>
                        <h5>Edad: </h5>
                        <p> 20</p>
                        <h5>Fecha de Nacimiento: </h5>
                        <p>16/07/2003</p>
                        <h5>Años de Servicio: </h5>
                        <p>3 años</p>
                        <h5>Fecha de Inicio en la Institución: </h5>
                        <p>20/07/2020</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Confirm</button>
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



    <!-- Main JS-->
    <script src="js/main.js"></script>
<!-- Agrega esto al final de tu HTML antes de cerrar la etiqueta body -->
<script>
        $(document).ready(function () {
            // Función para actualizar la tabla con los resultados de búsqueda o datos iniciales
            function updateTable(results) {
                var tableBody = $('#myTable tbody');
                tableBody.empty(); // Limpia el contenido actual de la tabla

                // Itera sobre los resultados y agrega filas a la tabla
                $.each(results, function (index, row) {
                    var newRow = '<tr>' +
                        '<td class="text-center">' + row.fnccid + '</td>' +
                        '<td class="text-center">' + row.fncnop + '</td>' +
                        '<td class="text-center">' + row.fncnos + '</td>' +
                        '<td class="text-center">' + row.fncapp + '</td>' +
                        '<td class="text-center">' + row.fncaps + '</td>' +
                        '<td class="text-center">' + row.fncfdn + '</td>' +
                        '<td class="text-center">' +
                        '<div class="btn-group">' +
                        '<button class="btn btn-warning smallicon" data-toggle="tooltip" data-placement="top" title="Editar"><i class="zmdi zmdi-edit zmdi-hc-xs"></i></button>' +
                        '<button class="btn btn-danger smallicon" onclick="eliminarRegistro(' + row.fnccid + ')" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="zmdi zmdi-delete zmdi-hc-xs"></i></button>' +
                        '<button type="button" class="btn btn-info smallicon" data-toggle="modal" data-target="#scrollmodal" data-placement="top" title="Ver Más"><i class="zmdi zmdi-more zmdi-hc-xs"></i></button>' +
                        '</div>' +
                        '</td>' +
                        '</tr>';

                    tableBody.append(newRow);
                    
                });
            }

            // Maneja el evento de envío del formulario
            $('#searchForm').submit(function (event) {
                event.preventDefault(); // Evita que el formulario se envíe de forma convencional

                var searchTerm = $('#searchInput').val();

                // Realiza la solicitud AJAX para buscar en el servidor
                $.ajax({
                    url: './php/search.php',
                    method: 'GET',
                    data: {
                        term: searchTerm
                    },
                    dataType: 'json',
                    success: function (data) {
                        // Actualiza la tabla con los resultados de búsqueda
                        updateTable(data);
                    },
                    error: function (error) {
                        console.error('Error en la solicitud AJAX de búsqueda:', error);
                    }
                });
            });

            // Carga la tabla con los datos iniciales al cargar la página
            $.ajax({
                url: './php/obtener_datos.php',
                method: 'GET',
                dataType: 'json',
                success: function (data) {
                    // Actualiza la tabla con los datos iniciales
                    updateTable(data);
                },
                error: function (error) {
                    console.error('Error en la solicitud AJAX de obtener datos iniciales:', error);
                }
            });

            // Inicializa DataTables
            $('#myTable').DataTable({
                "columnDefs": [{
                    "targets": 0,
                    "searchable": true
                }]
            });
        });

        // Función para eliminar un registro y mostrar la ventana modal
        function eliminarRegistro(id) {
            if (confirm("¿Estás seguro de que deseas eliminar este registro?")) {
                // Establecer el valor del campo oculto con el ID y enviar el formulario mediante AJAX
                $('#eliminarRegistro').val(id);

                // Realizar la solicitud AJAX para eliminar el registro
                $.ajax({
                    url: './php/obtener_datos.php',
                    method: 'POST',
                    data: { 
                        eliminarRegistro: id
                    },
                    success: function (response) {
                        console.log(response); // Muestra la respuesta en la consola (puedes cambiar esto según tus necesidades)

                        // Muestra la ventana modal de eliminación
                        $('#eliminarModal').modal('show');
                    },
                    error: function (error) {
                        console.error('Error en la solicitud AJAX de eliminación:', error);
                    }
                });
            }
        }

        // Agrega un evento al botón "Confirmar" de la ventana modal
        $('#confirmarRecarga').click(function () {
            // Recarga la página
            location.reload();
        });
    </script>
</body>

</html>
