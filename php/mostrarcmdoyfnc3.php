<?php
// Incluye tu archivo conn.php para la conexión
require_once('conn.php');

// Consulta SQL para obtener los datos de la tabla tbmfnc
$sql = "SELECT * FROM `tbtcyf` where `cmdcod`=3";
$result = $conn->query($sql);

// Verifica si hay errores en la consulta
if (!$result) {
    die("Error en la consulta: " . $conn->error);
}

// Muestra los datos en la tabla
if ($result->num_rows > 0) {
    echo '<div class="table-responsive  table-responsive-data2">';
    echo '<table id="myTable"  class="table table-striped table-data2">';
    echo '<thead>';
    echo '<tr>';
    echo '<th class="text-center">Cédula</th>';
    echo '<th class="text-center">Código Comando</th>';
    echo '<th class="text-center">Desde la fecha</th>';
    echo '<th></th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td class="text-center">' . $row['fnccid'] . '</td>';
        echo '<td class="text-center">' . $row['cmdcod'] . '</td>';
        echo '<td class="text-center">' . $row['cyffch'] . '</td>';
        
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

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>


