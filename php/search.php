<?php
// Incluye tu archivo conn.php para la conexión
require_once('conn.php');

// Verifica si se proporcionó un término de búsqueda
if (isset($_GET['term'])) {
    $searchTerm = $_GET['term'];
    // Consulta SQL para obtener los datos filtrados por término de búsqueda
    $sql = "SELECT * FROM tbmfnc WHERE fnccid LIKE '%$searchTerm%'";
    
    $result = $conn->query($sql);

    // Verifica si hay errores en la consulta
    if (!$result) {
        die("Error en la consulta: " . $conn->error);
    }

    // Almacena los resultados en un array asociativo
    $resultsArray = array();
    while ($row = $result->fetch_assoc()) {
        $resultsArray[] = $row;
    }

    // Devuelve los resultados en formato JSON
    echo json_encode($resultsArray);
} else {
    // Si no se proporciona un término de búsqueda, devuelve un mensaje de error
    echo json_encode(array('error' => 'No se proporcionó un término de búsqueda.'));
}

// Cierra la conexión a la base de datos
$conn->close();
?>
