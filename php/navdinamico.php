<?php
echo '<aside class="menu-sidebar d-none d-lg-block">';
echo '    <div class="logo">';
echo '        <a href="#">';
echo '            <img src="images/icon/logopltdash.png" />';
echo '        </a>';
echo '    </div>';
echo '    <div class="menu-sidebar__content js-scrollbar1">';
echo '        <nav class="navbar-sidebar">';
echo '            <ul class="list-unstyled navbar__list">';

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
            }elseif ($panide == 3) {
                echo ' <li >
                <a href="./aggfuncionario.php">
                    <i class="fas fa-user"></i>Agregar Funcionario</a>
            </li>';
            }
            elseif ($panide == 5) {
                echo ' <li class="has-sub">
                <a class="js-arrow" href="#">
                    <i class="fas fa-tachometer-alt"></i>Administrar</a>
                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                    <li>
                        <a href="./editf.php">Editar Funcionario</a>
                    </li>
                  <li>
                        <a href="./editcomando.php">Editar comando Personal</a>
                    </li>
                    
                </ul>
            </li>';
            }
            elseif ($panide == 6){
                echo '   <li class="has-sub">
                <a class="js-arrow" href="#">
                    <i class="fas fa-map-marker-alt"></i>Distribución</a>
                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                    <li>
                        <a href="./comando.php">Comandos</a>
                    </li>
                    <li>
                        <a href="./listadocmdo1.php">Listado Personal</a>
                    </li>
                    <li>
                        <a href="./aggcomando.php">Agregar Comando</a>
                    </li>
                    <li>
                        <a href="./aggpersonalcpp.php">Agregar Funcionario a CPP</a>
                    </li>
                   
                </ul>
            </li>';

            }elseif ($panide == 7){
                echo '   <li>
                <a href="./jubilaciones.php">
                    <i class="fas fa-chart-bar"></i>Listado de Jubilación</a>
            </li>';

            }
            elseif ($panide == 8){
                echo '  <li>
                <a href="faltas.html">
                    <i class="fas fa-table"></i>Amonestaciones</a>
            </li>';

            }
            elseif ($panide == 9){
                echo '<li>
                <a href="./solicitudes.php">
                    <i class="fas fa-handshake"></i>Solicitudes</a>
            </li>';

            }
            elseif ($panide == 10){
                echo '  <li>
                <a href="./hsolicitudes.php">
                    <i class="fas fa-file"></i>Historico Solicitud</a>
            </li>';

            }
            elseif ($panide == 11){
                echo ' <li>
                <a href="./ascensos.php">
                    <i class="fas fa-file"></i>Lista de Ascensos</a>
            </li>';

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

echo '            </ul>';
echo '        </nav>';
echo '    </div>';
echo '</aside>';
?>
