<?php
require_once('conn.php');


// Consulta SQL para obtener los datos de la tabla tbmfnc
$sqlObtenerDatos = "SELECT * FROM `tbmcmd`";
$resultObtenerDatos = mysqli_query($conn, $sqlObtenerDatos);

// Verifica si hay errores en la consulta
if (!$resultObtenerDatos) {
    die("Error en la consulta: " . $conn->error);
}


// Muestra los datos en la tabla
if (mysqli_num_rows($resultObtenerDatos)> 0) {
    echo '<div class="table-responsive table-responsive-data2">';
    echo '<table id="myTable" class="table table-striped table-data2">';
    echo '<thead>';
    echo '<tr>';
    echo '<th class="text-center">Codigo Comando</th>';
    echo '<th class="text-center">Nombre</th>';
    echo '<th class="text-center">Direccion</th>';
    echo '<th></th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    while ($row = $resultObtenerDatos->fetch_assoc()) {
        echo '<tr>';
        echo '<td class="text-center">' . $row['cmdcod'] . '</td>';
        echo '<td class="text-center">' . $row['cmdnom'] . '</td>';
        echo '<td class="text-center">' . $row['cmddes'] . '</td>';
        echo '<td class="text-center">';
      
        echo '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
} else {
    echo '<p class="text-center">No hay datos disponibles</p>';
}

// Cierra la conexión a la base de datos
$conn->close();
?>
