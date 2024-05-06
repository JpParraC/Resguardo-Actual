<?php
require_once('conn.php');

// Verificar si se ha enviado una solicitud de eliminación
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['eliminarRegistro'])) {
    $registroID = $_POST['eliminarRegistro'];

    // Crear la consulta SQL para eliminar el registro
    $sqlEliminar = "DELETE FROM `tbmfnc` WHERE fnccid = $registroID";

    // Ejecutar la consulta utilizando la conexión a tu base de datos
    $resultadoEliminar = mysqli_query($conn, $sqlEliminar);

    // Verificar si la eliminación fue exitosa
    if ($resultadoEliminar) {
        echo "Registro eliminado correctamente";
        exit; // Salir para evitar que el resto del código se ejecute después de la eliminación
    } else {
        echo "Error al eliminar el registro: " . mysqli_error($conn);
        exit; // Salir para evitar que el resto del código se ejecute después del error
    }
}

// Consulta SQL para obtener los datos de la tabla tbmfnc
$sqlObtenerDatos = "SELECT * FROM `tbmfnc`";
$resultObtenerDatos = mysqli_query($conn, $sqlObtenerDatos);

// Verifica si hay errores en la consulta
if (!$resultObtenerDatos) {
    die("Error en la consulta: " . $conn->error);
}
?>

<form id="eliminarForm" method="post">
    <input type="hidden" name="eliminarRegistro" id="eliminarRegistro">
</form>

<?php
// Muestra los datos en la tabla
if (mysqli_num_rows($resultObtenerDatos)> 0) {
    echo '<div class="table-responsive table-responsive-data2">';
    echo '<table id="myTable" class="table table-striped table-data2">';
    echo '<thead>';
    echo '<tr>';
    echo '<th class="text-center">Cédula</th>';
    echo '<th class="text-center">Primer Nombre</th>';
    echo '<th class="text-center">Segundo Nombre</th>';
    echo '<th class="text-center">Primer Apellido</th>';
    echo '<th class="text-center">Segundo Apellido</th>';
    echo '<th class="text-center">Fecha de Nacimiento</th>';
    echo '<th></th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    while ($row = $resultObtenerDatos->fetch_assoc()) {
        echo '<tr>';
        echo '<td class="text-center">' . $row['fnccid'] . '</td>';
        echo '<td class="text-center">' . $row['fncnop'] . '</td>';
        echo '<td class="text-center">' . $row['fncnos'] . '</td>';
        echo '<td class="text-center">' . $row['fncapp'] . '</td>';
        echo '<td class="text-center">' . $row['fncaps'] . '</td>';
        echo '<td class="text-center">' . $row['fncfdn'] . '</td>';
        echo '<td class="text-center">';
        
        echo '<div class="">';
        echo '<form action="./php/fncpdf.php" method="GET">';
        echo '<input type="hidden" name="id" value="' . $row['fnccid'] . '">';
        echo '<button type="submit" target="_blank" class="btn btn-primary smallicon" data-toggle="tooltip" data-placement="top" title="Descargar PDF"><i class="fas fa-file"></i></button>';
        echo '</form>';
        echo '<button class="btn btn-danger  smallicon" onclick="eliminarRegistro(' . $row['fnccid'] . ')" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash"></i></button>';
        
        
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

    function eliminarRegistro(id) {
        if (confirm("¿Estás seguro de que deseas eliminar este registro?")) {
            // Establecer el valor del campo oculto con el ID y enviar el formulario mediante AJAX
            $('#eliminarRegistro').val(id);
            $('#eliminarForm').submit();
        }
    }

    
</script>
