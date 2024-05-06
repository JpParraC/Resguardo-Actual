<?php 
echo '<header class="header-mobile d-block d-lg-none">';
echo '    <div class="header-mobile__bar">';
echo '        <div class="container-fluid">';
echo '            <div class="header-mobile-inner">';
echo '                <a class="logo" href="index.html">';
echo '                    <h1>POLITÁCHIRA</h1>';
echo '                </a>';
echo '                <button class="hamburger hamburger--slider" type="button">';
echo '                    <span class="hamburger-box">';
echo '                        <span class="hamburger-inner"></span>';
echo '                    </span>';
echo '                </button>';
echo '            </div>';
echo '        </div>';
echo '    </div>';
echo '    <nav class="navbar-mobile">';
echo '        <div class="container-fluid">';
echo '            <ul class="navbar-mobile__list list-unstyled">';
require_once('conn.php');

// Iniciar sesión si no está iniciada
if (!isset($_SESSION)) {
    session_start();
}

// Verificar si el usuario está autenticado
if (isset($_SESSION['cedula'])) {
    // Obtener el identificador del usuario de la sesión
    $user = $_SESSION['cedula'];

    // Consulta SQL para obtener los códigos de pantalla asociados al usuario
    $sql = "SELECT panide FROM tbtpyf WHERE fnccid = '$user'";

    // Ejecutar la consulta
    $resultado = mysqli_query($conn, $sql);

    // Verificar si la consulta tuvo éxito
    if ($resultado) {
        // Iterar sobre los resultados y construir el menú dinámico
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $panide = $fila['panide'];
            // Comparar los valores directos de panide con valores específicos y mostrar el elemento del menú correspondiente
            if ($panide == 1) {
                echo '<li class="nav-item"><a class="nav-link  " href="./funcionarios.php"><i class="fas fa-user mr-2"></i>Funcionarios</a></li>';
            } elseif ($panide == 2) {
                echo '<li class="nav-item"><a class="nav-link " href="./comando.php"><i class="fas fa-user mr-2"></i>Comando</a></li>';
            } elseif ($panide == 3) {
                echo '<li ><a href="./aggfuncionario.php"><i class="fas fa-user"></i>Agregar Funcionario</a></li>';
            } elseif ($panide == 5) {
                echo '<li class="has-sub">';
                echo '    <a class="js-arrow" href="#">';
                echo '        <i class="fas fa-tachometer-alt"></i>Administrar</a>';
                echo '    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">';
                echo '        <li>';
                echo '            <a href="./editarfnc.php">Editar Funcionario</a>';
                echo '        </li>';
                echo '        <li>';
                echo '            <a href="./editcomando.php">Listado Personal</a>';
                echo '        </li>';
                echo '    </ul>';
                echo '</li>';
            } elseif ($panide == 6) {
                echo '<li class="has-sub">';
                echo '    <a class="js-arrow" href="#">';
                echo '        <i class="fas fa-map-marker-alt"></i>Distribución</a>';
                echo '    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">';
                echo '        <li>';
                echo '            <a href="./comando.php">Comandos</a>';
                echo '        </li>';
                echo '        <li>';
                echo '            <a href="./listadocmdo1.php">Listado Personal</a>';
                echo '        </li>';
                echo '        <li>';
                echo '            <a href="./aggcomando.php">Agregar Comando</a>';
                echo '        </li>';
                echo '        <li>';
                echo '            <a href="./aggpersonalcpp.php">Agregar Funcionario a CPP</a>';
                echo '        </li>';
                echo '    </ul>';
                echo '</li>';
            } elseif ($panide == 7) {
                echo '<li>';
                echo '    <a href="./jubilaciones.php">';
                echo '        <i class="fas fa-chart-bar"></i>Listado de Jubilación</a>';
                echo '</li>';
            } elseif ($panide == 8) {
                echo '<li>';
                echo '    <a href="faltas.html">';
                echo '        <i class="fas fa-table"></i>Amonestaciones</a>';
                echo '</li>';
            } elseif ($panide == 9) {
                echo '<li>';
                echo '    <a href="./solicitudes.php">';
                echo '        <i class="fas fa-handshake"></i>Solicitudes</a>';
                echo '</li>';
            } elseif ($panide == 10) {
                echo '<li>';
                echo '    <a href="./hsolicitudes.php">';
                echo '        <i class="fas fa-file"></i>Historico Solicitud</a>';
                echo '</li>';
            } elseif ($panide == 11) {
                echo '<li>';
                echo '    <a href="./ascensos.php">';
                echo '        <i class="fas fa-file"></i>Lista de Ascensos</a>';
                echo '</li>';
            }
            // Puedes agregar más condicionales para otros valores de panide si es necesario
        }
    } else {
        // En caso de error en la consulta
        echo "Error en la consulta: " . mysqli_error($conn);
    }

    // Liberar el resultado y cerrar la conexión
    mysqli_free_result($resultado);
    mysqli_close($conn);
} else {
    // Si el usuario no está autenticado, mostrar un mensaje de error o redirigir a la página de inicio de sesión
    echo "Error: El usuario no está autenticado.";
}
echo '           </ul>';
echo '        </div>';
echo '    </nav>';
echo '</header>';
?>
