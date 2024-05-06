<?php
require_once('conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener la cédula desde la solicitud POST
    $cedula = $_POST['cid'];

    // Consulta para verificar si la cédula ya está registrada
    $sql = "SELECT * FROM tbmfnc WHERE fnccid = '$cedula'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // La cédula ya está registrada
        echo 'registrado';
    } else {
        // La cédula no está registrada
        echo 'no_registrado';
    }
} else {
    // Si la solicitud no es POST, devolver un mensaje de error o realizar otra acción según sea necesario
    echo 'error';
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
