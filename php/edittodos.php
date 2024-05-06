<?php

require_once('conn.php');

echo "Aquí todo bien.";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene la cédula del formulario y realiza la limpieza
    $cedula = mysqli_real_escape_string($conn, $_POST['cedula']);

    // Realizar la consulta para verificar si la cédula existe en la base de datos
    $sql = "SELECT * FROM `tbmfnc` WHERE `fnccid` = '$cedula'";
    echo "Consulta SQL: $sql<br>";

    $result = $conn->query($sql);

    if (!$result) {
        echo "Error en la consulta: " . $conn->error;
        exit;
    }

    if ($result->num_rows > 0) {
        // Mostrar los datos en un formulario editable
        $row = $result->fetch_assoc();

        echo '<form action="./php/procesar_edicion.php" method="post">';
        echo '<input type="hidden" name="cedula" value="' . $row['fnccid'] . '">';

        echo '<div class="row">';

        // Primeras seis columnas
        echo '<div class="col-md-6">';
        foreach ($row as $columna => $valor) {
            if ($columna == 'fnccid' || $columna == 'fncnos' || $columna == 'fncaps' || $columna == 'fncfdn') {
                // Ignorar algunos campos si es necesario
                continue;
            }
            echo '<div class="form-group">';
            echo '<label for="' . $columna . '" class="form-control-label">' . $columna . '</label>';
            echo '<input type="text" id="' . $columna . '" name="' . $columna . '" value="' . $valor . '" class="form-control">';
            echo '</div>';
        }
        echo '</div>';

        // Segundas seis columnas
        echo '<div class="col-md-6">';
        foreach ($row as $columna => $valor) {
            if ($columna == 'fnccid' || $columna == 'fncnop' || $columna == 'fnctlf' || $columna == 'fnccor') {
                // Ignorar algunos campos si es necesario
                continue;
            }
            echo '<div class="form-group">';
            echo '<label for="' . $columna . '" class="form-control-label">' . $columna . '</label>';
            echo '<input type="text" id="' . $columna . '" name="' . $columna . '" value="' . $valor . '" class="form-control">';
            echo '</div>';
        }
        echo '</div>';

        echo '</div>'; // Cierre de la fila

        echo '<div class="text-center">';
        echo '<input class="btn btn-outline-success mx-auto" type="submit" value="Guardar Cambios">';
        echo '</div>';
        echo '</form>';
    } else {
        echo "No se encontró ningún registro con la cédula ingresada.";
    }

    // Manejo de errores en el entorno de desarrollo (no en producción)
    if ($conn->error) {
        echo "Error de la base de datos: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>
