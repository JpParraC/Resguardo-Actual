<?php
require_once('conn.php');


// Consulta SQL para obtener los datos de la tabla 
$sqlObtenerDatos ="SELECT * FROM `tbdslc` WHERE slcest IN (2, 0)";
$resultObtenerDatos = mysqli_query($conn, $sqlObtenerDatos);

// Verifica si hay errores en la consulta
if (!$resultObtenerDatos) {
    die("Error en la consulta: " . $conn->error);
}

function obtenerEstadoDescriptivo($estado) {
    switch ($estado) {
        case 1:
            return 'Pendiente';
        case 2:
            return 'Aprobado';
        case 0:
            return 'Rechazado';
        default:
            return 'Desconocido';
    }
}
// Muestra los datos en la tabla
// Muestra los datos en la tabla
if ($resultObtenerDatos->num_rows > 0) {
    echo '<div class="table-responsive table-responsive-data2">';
    echo '<table id="myTable" class="table table-striped table-data2">';
    echo '<thead>';
    echo '<tr>';
    echo '<th class="text-center">Cédula</th>';
    echo '<th class="text-center">Primer Nombre</th>';
    echo '<th class="text-center">Primer Apellido</th>';
    echo '<th class="text-center">Correo</th>';
    echo '<th class="text-center">Estado</th>';
    echo '<th class="text-center">Fecha</th>';
    echo '<th></th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    while ($row = $resultObtenerDatos->fetch_assoc()) {
        echo '<tr>';
        echo '<td class="text-center">' . $row['slccid'] . '</td>';
        echo '<td class="text-center">' . $row['slcnop'] . '</td>';
        echo '<td class="text-center">' . $row['slcapp'] . '</td>';
        echo '<td class="text-center">' . $row['slccor'] . '</td>';
        echo '<td class="text-center">' . obtenerEstadoDescriptivo($row['slcest']) . '</td>';
        echo '<td class="text-center">' . $row['slcfch'] . '</td>';
        echo '<td class="text-center">';

        
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
