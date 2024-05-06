<?php 
// exportar_pdf.php

// Incluir la biblioteca FPDF
require('C:\xampp\htdocs\politachira\lib\fpdf186\fpdf.php');  // Ajusta la ruta según tu estructura de archivos

require_once('conn.php');


class PDF extends FPDF
{
    public $selectedYear; // Propiedad para almacenar el año seleccionado

    // Cabecera de página
    function Header()
    {   
        $this->Image('../images/logo.png', 10, 8, 17); // Ajusta la ruta y las coordenadas según tu necesidad
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 20, 'Listado Funcionarios POLITACHIRA ' . $this->selectedYear, 0, 1, 'C');
    }

    // Pie de página
    function Footer()
    {
        $this->SetY(-10);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo() , 0, 0, 'C');

        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $hoy = date('d/m/Y');
        $this->Cell(0, 10, utf8_decode($hoy), 0, 0, 'C');
    }

    function TablaContenido($header, $data)
    {
       
        $this->SetTextColor(255, 255, 255);
        $this->SetDrawColor(163, 163, 163);
        $this->SetFont('Arial', 'B', 9);

        foreach ($header as $col) {
            $this->Cell(31.5, 8, utf8_decode($col), 1, 0, 'C', 1);
        }
        $this->Ln();

        $this->SetTextColor(0, 0, 0);

        $i = 0; // Añadir esta línea para inicializar $i

        foreach ($data as $row) {
            foreach ($row as $col) {
                $this->Cell(31.5, 8, utf8_decode($col),  1, 0, 'C');
                $i++; // Incrementar $i en cada iteración
            }
            $this->Ln();
        }
    }
}

// Crear instancia de PDF
$pdf = new PDF();
$pdf->AddPage();

// Consulta SQL para obtener funcionarios con 25 años de servicio
$sql = "SELECT * FROM `tbmfnc`;";

// Realizar la consulta a la base de datos
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Definir encabezados
    $header = array('Cédula', 'Primer Nombre', 'Segundo Nombre', 'Primer Apellido', 'Segundo Apellido',  'Fecha de Nacimiento');

    // Crear un array para almacenar los datos
    $data = array();

    // Llenar el array con los datos de la consulta
    while ($row = $result->fetch_assoc()) {
        $data[] = array(
            $row['fnccid'],
            $row['fncnop'],
            $row['fncnos'],
            $row['fncapp'],
            $row['fncaps'],
            $row['fncfdn']
        );
    }

    // Llamar a la función TablaContenido para generar la tabla
    $pdf->TablaContenido($header, $data);
} else {
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, 'No se encontraron datos', 0, 1, 'C');
}

// Salida del PDF
$pdf->Output('Listadofuncionarios.pdf', 'I');
?>

