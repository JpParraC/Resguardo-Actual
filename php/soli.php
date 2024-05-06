<?php
ob_start();
require_once('conn.php');

// Función para confirmar la acción
function confirmarAccion($conn, $id) {
    $sqlObtenerDatos = "SELECT * FROM tbdslc WHERE slccid = '$id'";
    $resultObtenerDatos = $conn->query($sqlObtenerDatos);

    if (!$resultObtenerDatos) {
        die("Error al obtener datos: " . $conn->error);
    }

    $row = $resultObtenerDatos->fetch_assoc();
    $estadoActual = $row['slcest'];

    if ($estadoActual == 1) { // Estado pendiente
        // Actualizar estado a confirmado (2) en tbdslc
        $sqlActualizarEstado = "UPDATE tbdslc SET slcest = 2 WHERE slccid = '$id'";
        ejecutarConsulta($conn, $sqlActualizarEstado, "Error al actualizar estado");

        // Insertar datos en tbmfnc
        $sqlInsertarTbmfnc =  "INSERT INTO `tbmfnc` (`fnccid`,`fncnop`, `fncapp`, `fnccor`) VALUES (
            '{$row['slccid']}',
            '{$row['slcnop']}',
            '{$row['slcapp']}',
            '{$row['slccor']}'
        )";
        ejecutarConsulta($conn, $sqlInsertarTbmfnc, "Error al insertar en tbmfnc");

        // Insertar datos en tbtayu
        $sqlInsertarTbtayu =  "INSERT INTO `tbtayu` ( `id_cedula`,`id_usuario`, `ayucon`) VALUES (
            '{$row['slccid']}',
            '2',
            '{$row['slccon']}'
        )";
        ejecutarConsulta($conn, $sqlInsertarTbtayu, "Error al insertar en tbtayu");
    }
}

// Función para eliminar la acción
function eliminarAccion($conn, $id) {
    // Actualizar estado a rechazado (0) en tbdslc
    $sqlActualizarEstado = "UPDATE tbdslc SET slcest = 0 WHERE slccid = '$id'";
    ejecutarConsulta($conn, $sqlActualizarEstado, "Error al actualizar estado");
}

// Función para ejecutar consultas y manejar errores
function ejecutarConsulta($conn, $sql, $errorMsg) {
    $result = $conn->query($sql);
    if (!$result) {
        die($errorMsg . ": " . $conn->error);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['accion'], $_POST['confirmarID'])) {
        $id = htmlspecialchars($_POST['confirmarID'], ENT_QUOTES, 'UTF-8');

        if ($_POST['accion'] == 'confirmar') {
            confirmarAccion($conn, $id);
        } elseif ($_POST['accion'] == 'eliminar') {
            eliminarAccion($conn, $id);
            header("Location: ../solicitudes.php");
            exit(); 
        }
    }
}

//funcion para el estado de la slicitud
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



// Consulta SQL para obtener los datos de la tabla tbdslc


$sqlObtenerDatos = "SELECT * FROM `tbdslc` WHERE slcest=1 ";
$resultObtenerDatos = $conn->query($sqlObtenerDatos);

// Verifica si hay errores en la consulta
if (!$resultObtenerDatos) {
    die("Error en la consulta: " . $conn->error);
}


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
    echo '<th class="text-center">Opciones</th>';
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
        echo '<td class="text-center">';

        echo '<div class="btn-group">';
        // Botón de Confirmar
        echo '<button class="btn btn-success" onclick="confirmarAccion(' . $row['slccid'] . ')">Confirmar</button>';
        // Botón de Eliminar
        echo '<button class="btn btn-danger" onclick="eliminarAccion(' . $row['slccid'] . ')">Eliminar</button>';
        echo '</div>';

        echo '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
} else {
    echo '<p class="text-center">No hay datos disponibles</p>';
}
?>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });

    function confirmarAccion(id) {
    enviarAccion('confirmar', id);
    }

    function eliminarAccion(id) {
    enviarAccion('eliminar', id);
    }

function enviarAccion(accion, id) {
    if (confirm("¿Estás seguro de " + accion + " esta acción?")) {
        // Crea un formulario oculto y establece los valores necesarios
        var form = document.createElement("form");
        form.method = "post";
        form.action = "./php/soli.php";

        // Campo oculto para la acción
        var accionInput = document.createElement("input");
        accionInput.type = "hidden";
        accionInput.name = "accion";
        accionInput.value = accion;
        form.appendChild(accionInput);

        // Campo oculto para el ID
        var confirmarID = document.createElement("input");
        confirmarID.type = "hidden";
        confirmarID.name = "confirmarID"; // Usa el mismo nombre para ambas acciones
        confirmarID.value = id;
        form.appendChild(confirmarID);

        // Agrega el formulario al cuerpo del documento
        document.body.appendChild(form);

        // Envía el formulario
        form.submit();
     
    }
        

}


</script>
