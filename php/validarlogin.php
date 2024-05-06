<?php
session_start();
require_once('conn.php');

// Recibir datos del formulario
$user = $_POST['cedula'];
$pass = $_POST['contra'];

// Consulta SQL para verificar el login
$sql = "SELECT * FROM tbtayu WHERE id_cedula = '$user'";
$result = $conn->query($sql);
    
if ($result === false) {
    // Error en la consulta
    die("Error en la consulta SQL: " . $conn->error);
}

if ($result->num_rows > 0) {
    // Usuario encontrado, verificar la contraseña
    $row = $result->fetch_assoc();
    $stored_password = $row['ayucon'];

    // Comparar contraseñas en texto plano
    if ($pass == $stored_password) {
        // Contraseña correcta, inicio de sesión exitoso
        // Establecer la sesión con ambos IDs del usuario
        $_SESSION['user'] = $row['id_usuario'];
        $_SESSION['cedula'] = $row['id_cedula'];

        // Verificar si el usuario es administrador
        if ($row['id_usuario'] == 1) {
            // Redirigir al administrador a funcionarios.php
            header('Location: ../dashboard.php');
            exit();
        } else {
            // Otros usuarios redirigen a dashboarduser.php
            header('Location: ../dashboarduser.php');
            exit();
        }
    } else {
        // Contraseña incorrecta
        echo "Contraseña incorrecta";
    }
} else {
    // Usuario no encontrado
    echo "Usuario no encontrado";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
