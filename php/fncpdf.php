<?php
    session_start();

    require('C:\xampp\htdocs\politachira\lib\fpdf186\fpdf.php');
    require_once('conn.php');

    // Obtener el ID del formulario
    $usuario_id = isset($_GET['id']) ? $_GET['id'] : null;
    
    // Validar que el ID no esté vacío y sea un número
    if ($usuario_id !== null && is_numeric($usuario_id)) {
        // Consultar la base de datos para obtener todos los datos del funcionario
        $datos_funcionario = obtenerDatosFuncionario($usuario_id);
    
        // Generar PDF con los datos obtenidos
        generarPDF($datos_funcionario);
    } else {
        // Manejar el caso en que no se proporciona un ID válido
        echo "Error: ID de usuario no válido";
    }
    
    function obtenerDatosFuncionario($usuario_id) {
        global $conn;

        // Aquí realizamos una consulta SQL para obtener todos los datos del funcionario
        $query = "SELECT * FROM tbmfnc WHERE fnccid = $usuario_id";
        $resultado = $conn->query($query);
    
        if ($resultado === false) {
            // Manejar el error en la consulta SQL
            die("Error en la consulta SQL: " . $conn->error);
        }
    
        // Obtener los datos del funcionario como un arreglo asociativo
        $datos_funcionario = $resultado->fetch_assoc();
    
        return $datos_funcionario;
    }
    
    function generarPDF($datos_funcionario) {
      global $conn;  // Crear un nuevo objeto FPDF
      $pdf = new FPDF();
      $pdf->AddPage();
  
      
      // Establecer una fuente antes de agregar texto
      $pdf->SetFont('Times', 'B', 12); // Cambiado a Times New Roman
  
      $logoPath = '../images/logotachira.png'; // Reemplaza con la ruta real de tu logo
      $pdf->Image($logoPath, 10, 10, 7,7); 
  
      $logoPath1 = '../images/logo.png'; // Reemplaza con la ruta real de tu logo
      $pdf->Image($logoPath1, 192, 10, 7,7); 
  
          // Agregar encabezado centrado
      $pdf->Cell(0, 5, 'POLICIA DEL TACHIRA ', 0, 1, 'C');
      $pdf->Cell(0, 5, 'REGISTRO DE DATOS ', 0, 1, 'C');
      
      // Agregar datos al PDF con la información del número de placa
      $pdf->Cell(50, 30, 'Numero de Placa:'.  utf8_decode($datos_funcionario['fnccod']), 0, 1);
  
  
  
  
          // Agregar recuadros para huellas dactilares
      $pdf->Rect(160, 20, 20, 20); // Recuadro izquierdo
      $pdf->Rect(180, 20, 20, 20); // Recuadro derecho
      
      
  
      $pdf->SetFont('Times', '', 12); // Cambiado a Times New Roman
  
          
  
          $ancho_celda = 200;
          $alto_celda = 10;
  
          $anchon=50;
          $a=100;
  
          // Dibujar líneas para la tabla
          $pdf->Rect(5, 50, $ancho_celda , $alto_celda); // Rectángulo alrededor de la tabla
  
          // Agregar contenido a la tabla
          $pdf->Cell($anchon, $alto_celda, 'Apellidos y Nombres | ', 0, 0, 'L');
          $pdf->Cell($a, $alto_celda, utf8_decode($datos_funcionario['fncnop']. " " . $datos_funcionario['fncnos']." " . $datos_funcionario['fncapp']). " " . $datos_funcionario['fncaps'], 0, 0, 'C');
          $pdf->Cell($anchon, $alto_celda, 'Cedula | ' . utf8_decode($datos_funcionario['fnccid']), 0, 0, 'L');
       
          $pdf->SetFont('Times', 'B', 12); // Cambiado a Times New Roman
          $pdf->Rect(5, 60, $ancho_celda, 8);
          $pdf->Cell(-200, 29, 'DATOS PERSONALES ', 0, 0, 'C'); // Cambiado el tercer parámetro de 1 a 0 para evitar el salto de línea
         
          $pdf->SetFont('Times', '', 12); // Cambiado a Times New Roman
  
          
          $pdf->Cell(80, 45, 'Fecha de Nacimiento| ' . utf8_decode($datos_funcionario['fncfdn'] . '|'), 0, 0, 'L');
          $pdf->Rect(5, 68.1, $ancho_celda, 8);
          $pdf->Cell(5, 45, 'Lugar de Nacimiento| ' . 'LOBATERA', 0, 0, 'L');
  
    
          $pdf->Rect(5, 76.1, $ancho_celda, 8);
          $pdf->Text(11, 82, utf8_decode('ESTATURA|'). " ". utf8_decode($datos_funcionario['fncest']. " cm|" ));
          $pdf->Text(60, 82, utf8_decode('PESO|'). " ". utf8_decode($datos_funcionario['fncpso']. " kg|" ));
          $pdf->Text(90, 82, utf8_decode('COLOR DE PIEL|'). " ". utf8_decode($datos_funcionario['fncclr']. "|" ));
          $pdf->Text(10, 82, utf8_decode('CABELLO|'). " ". utf8_decode($datos_funcionario['fnccbl']  ));
  
          
  
      // Salida del PDF al navegador
      $pdf->Output("informe_funcionario.pdf", 'I');
      exit();
    }
    
?>