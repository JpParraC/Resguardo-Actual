<?php
require_once("conn.php");

// Consultar los datos de tbtfyr con INNER JOIN en tbmfnc
$queryMostrar = "SELECT tbtfyr.*, tbmfnc.fncnop, tbmfnc.fncnos, tbmfnc.fncapp, tbmfnc.fncaps FROM tbtfyr
                 INNER JOIN tbmfnc ON tbtfyr.fyrcid = tbmfnc.fnccid";

$resultMostrar = $conn->query($queryMostrar);

// Verificar si hay resultados
if ($resultMostrar !== false && $resultMostrar->num_rows > 0) {
    echo '<div class="table-responsive table-responsive-data2">';
    echo '<table id="myTable" class="table table-striped table-data2">';
    echo '<thead>';
    echo '<tr>';
    echo '<th class="text-center">Cédula</th>';
    echo '<th class="text-center">Nombres y Apellidos</th>';
    echo '<th class="text-center">Rango Actual</th>';
    echo '<th class="text-center">Rango a Ascender</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    while ($rowMostrar = $resultMostrar->fetch_assoc()) {
        echo '<tr>';
        echo '<td class="text-center">' . $rowMostrar['fyrcid'] . '</td>';
        echo '<td class="text-center">' . $rowMostrar['fncnop'] . ' ' . $rowMostrar['fncnos'] . ' ' . $rowMostrar['fncapp'] . ' ' . $rowMostrar['fncaps'] . '</td>';
        echo '<td class="text-center">' . $rowMostrar['fyrrna'] . '</td>';
        echo '<td class="text-center">' . $rowMostrar['fyrnrn'] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
} else {
    echo '<p class="text-center">No hay datos disponibles</p>';
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
