<?php
session_start();

// Destruye todas las variables de sesión
session_unset();

// Destruye la sesión
session_destroy();

// Redirige a la página de despedida
header('Location: ../home.php');
exit();
?>
