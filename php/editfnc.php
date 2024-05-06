<?php

require_once('conn.php');

echo "Aquí todo bien.";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos del formulario y realiza la limpieza
    $cedula = mysqli_real_escape_string($conn, $_POST['cedula']);
    


    // Realizar la consulta para verificar si la cédula existe en la base de datos
    $sql = "SELECT * FROM `tbmfnc` WHERE `fnccid` = '$cedula'";
    echo "Consulta SQL: $sql<br>";

    $result = $conn->query($sql);

    if (!$result) {
        echo "Error en la consulta: " . $conn->error;
    } else {
        echo "Filas afectadas: " . $result->num_rows . "<br>";
    }

    // Verificar si hay errores en la consulta
    if (!$result) {
        echo "Error en la consulta: " . $conn->error;
        exit;
    }

    if ($result->num_rows > 0) {
        // Verificar si el nombre del campo existe en la base de datos
        $columnas = array(
            
            "fncnop",
            "fncnos",
            "fncapp",
            "fncaps",
            "fnctlf",
            "fnccor",
            "fncedd",
            "fncfdn",
            "fncgen",
            "fncfin",
            "fncest",
            "fncpso",
            "fncclr",
            "fnccbl",
            "fncojo",
            "fncnrz",
            "fncbca",
            "fncbrb",
            "fncdih",
            "fncedc",
            "fncnmc",
            "fncncc",
            "fncesc",
            "fncnpm",
            "fncncm",
            "fncesm",
            "fncnpp",
            "fncncp",
            "fncesp",
        );

        $sqlUpdate = ""; 

        if (in_array($nombreCampo, $columnas)) {
            // Debugging: Imprime la consulta SQL antes de ejecutarla
            echo "Consulta SQL para la actualización: $sqlUpdate<br>";

            $sqlUpdate = "UPDATE tbmfnc SET $nombreCampo = '$nuevoValor' WHERE `fnccid` = '$cedula'";

            if ($conn->query($sqlUpdate) === TRUE) {
                echo "Campo '$nombreCampo' actualizado correctamente.";
            } else {
                // Imprime el mensaje de error de la base de datos
                echo "Error al actualizar el campo: " . $conn->error;
            }
        } else {
            echo "Nombre de campo no válido.";
        }
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
