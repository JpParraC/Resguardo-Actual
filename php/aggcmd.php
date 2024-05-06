<?php
require_once('conn.php');

// Verifica si el formulario se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos del formulario y realiza la limpieza
    $codigo = mysqli_real_escape_string($conn, $_POST['cd']);
    $nombre = mysqli_real_escape_string($conn, $_POST['nn']);
    $dir = mysqli_real_escape_string($conn, $_POST['dir']);
    
    // Prepara la consulta SQL con una sentencia preparada
    $sql = "INSERT INTO `tbmcmd` (`cmdcod`, `cmdnom`, `cmddes` ) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Vincula los parámetros y ejecuta la consulta preparada
    $stmt->bind_param("sss", $codigo, $nombre, $dir);
    $stmt->execute();

    // Verifica si la consulta fue exitosa
    if ($stmt->affected_rows > 0) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar: " . $stmt->error;
    }

    // Cierra la consulta preparada
    $stmt->close();
}

// Cierra la conexión
$conn->close();
?>
