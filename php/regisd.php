<?php
require_once('conn.php');

// Verifica si el formulario se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos del formulario y realiza la limpieza
    $cedula = mysqli_real_escape_string($conn, $_POST['cid']);
    $nombre = mysqli_real_escape_string($conn, $_POST['primernombre']);
    $apellido = mysqli_real_escape_string($conn, $_POST['primerapellido']);
    $correo = mysqli_real_escape_string($conn, $_POST['correo']);
    $contraseña = mysqli_real_escape_string($conn, $_POST['contraseña']);
    
    // Estado inicial
    $estado = '1';

    // Prepara la consulta SQL con una sentencia preparada
    $sql = "INSERT INTO `tbdslc` (`slccid`, `slcnop`, `slcapp`, `slccor`, `slccon`, `slcest`) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Vincula los parámetros y ejecuta la consulta preparada
    $stmt->bind_param("ssssss", $cedula, $nombre, $apellido, $correo, $contraseña, $estado);
    $stmt->execute();

    // Verifica si la consulta fue exitosa
    if ($stmt->affected_rows > 0) {
        echo "Registro exitoso";
      
        // Redirige a otra página
     
        exit(); // Asegúrate de salir del script después de la redirección
    } else {
        echo "Error al registrar: " . $stmt->error;
    }

    // Cierra la consulta preparada
    $stmt->close();
}

// Cierra la conexión
$conn->close();
?>
