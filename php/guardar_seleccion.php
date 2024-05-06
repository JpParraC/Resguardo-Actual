<?php 
require_once('conn.php');

// Crear un array para almacenar la respuesta
$response = array();

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    // Obtener la cédula del funcionario y las pantallas seleccionadas del formulario
    $cedula = $_POST['cdi'];
    $pantallas = isset($_POST['pantallas']) ? $_POST['pantallas'] : array();

    // Verificar si la cédula del funcionario existe en la tabla tbmfnc
    $sql_verificar_cedula = "SELECT * FROM tbmfnc WHERE fnccid = '$cedula'";
    $resultado_verificar_cedula = $conn->query($sql_verificar_cedula);
    
    if ($resultado_verificar_cedula) {
        // Verificar si se encontraron resultados
        if ($resultado_verificar_cedula->num_rows > 0) {
            // Si la cédula del funcionario existe, verificar si ya tiene acceso a las pantallas seleccionadas
            foreach ($pantallas as $pantalla) {
                $sql_verificar_pantalla = "SELECT * FROM tbtpyf WHERE fnccid = '$cedula' AND patcod = '$pantalla'";
                $resultado_verificar_pantalla = $conn->query($sql_verificar_pantalla);

                if ($resultado_verificar_pantalla->num_rows == 0) {
                    // Si no hay registros para esta combinación de cédula y pantalla, insertar en la tabla tbtpyf
                    $sql_insert = "INSERT INTO tbtpyf (fnccid, patcod) VALUES ('$cedula', '$pantalla')";
                    if ($conn->query($sql_insert) !== TRUE) {
                        $response['success'] = false;
                        $response['message'] = "Error al insertar los datos: " . $conn->error;
                        // Si hay un error, detener el procesamiento de las pantallas
                        break;
                    }
                } else {
                    // Si ya existe una entrada para esta combinación de cédula y pantalla, mostrar un mensaje de error
                    $response['success'] = false;
                    $response['message'] = "El usuario ya tiene acceso a la pantalla $pantalla.";
                    // Si hay un error, detener el procesamiento de las pantallas
                    break;
                }
            }

            // Si no hubo errores al procesar las pantallas, actualizar el campo id_usuario en la tabla tbtayu
            if (!isset($response['success'])) {
                $sql_update = "UPDATE tbtayu SET id_usuario = 1 WHERE id_cedula = '$cedula'";
                if ($conn->query($sql_update) !== TRUE) {
                    $response['success'] = false;
                    $response['message'] = "Error al actualizar el campo id_usuario: " . $conn->error;
                } else {
                    $response['success'] = true;
                    $response['message'] = "Selección de pantallas guardada correctamente.";
                }
            }
        } else {
            $response['success'] = false;
            $response['message'] = "La cédula del funcionario no existe en la base de datos.";
        }
    } else {
        $response['success'] = false;
        $response['message'] = "Error en la consulta: " . $conn->error;
    }

    // Cerrar la conexión a la base de datos
    $conn->close();

    // Devolver la respuesta como JSON
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
