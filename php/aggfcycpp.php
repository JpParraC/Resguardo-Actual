<?php
require_once('conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cedula = $conn->real_escape_string($_POST['cdi']);
    $codigoComando = $conn->real_escape_string($_POST['cpp']);
    $fchacyf = $conn->real_escape_string($_POST['fecha']); // Corregido el nombre del campo

    $verificarQuery = "SELECT fnccid FROM tbmfnc WHERE fnccid = '$cedula'";
    $verificarResult = $conn->query($verificarQuery);

    if ($verificarResult->num_rows > 0) {
        $verificarCmdQuery = "SELECT cmdcod FROM tbmcmd WHERE cmdcod = '$codigoComando'";
        $verificarCmdResult = $conn->query($verificarCmdQuery);

        if ($verificarCmdResult->num_rows > 0) {
            $insertQuery = "INSERT INTO tbtcyf (fnccid, cmdcod, cyffch) VALUES ('$cedula', '$codigoComando', '$fchacyf')";
            
            if ($conn->query($insertQuery) === TRUE) {
                echo "Datos insertados correctamente en tbtcyf.";
            } else {
                echo "Error al insertar datos en tbtcyf: " . $conn->error;
            }
        } else {
            echo "El código de comando no existe en la tabla tbmcmd.";
        }
    } else {
        echo "La cédula no existe en la tabla tbmfnc. ";
    }
    
    $conn->close();
} else {
    echo "Acceso no autorizado.";
}
?>
