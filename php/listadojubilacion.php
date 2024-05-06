<?php
// listadojubilacion.php
require_once('conn.php');

// Procesar el formulario solo si se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["year"])) {
    // Obtener el año seleccionado
    $selectedYear = $_POST["year"];
    //se extrae el periodo de tiempo
    $exactStartDate = date("Y-m-d", strtotime("$selectedYear-01-01 -30 years"));
    $exactEndDate = date("Y-m-d", strtotime("$selectedYear-12-31 -30 years"));


    // Consulta SQL para obtener funcionarios con 25 años de servicio
    $sql = "SELECT 
    fnccid,
    fncnop,
    fncnos,
    fncapp,
    fncaps,
    fncfin FROM tbmfnc WHERE fncfin BETWEEN '$exactStartDate' AND '$exactEndDate'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mostrar los resultados
        
        echo '<div class="table-responsive custom-table ">';
        echo '<table id="myTable" class="custom-table table-responsive">';
        echo '<thead>';
        echo '<tr>';
        echo '<th class="text-center">Cédula</th>';
        echo '<th class="text-center">Primer Nombre</th>';
        echo '<th class="text-center">Segundo Nombre</th>';
        echo '<th class="text-center">Primer Apellido</th>';
        echo '<th class="text-center">Segundo Apellido</th>';
    
        echo '<th class="text-center">Fecha Inicio</th>';
        echo '<th></th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
           
            echo '<td class="text-center">' . $row['fnccid'] . '</td>';
            echo '<td class="text-center">' . $row['fncnop'] . '</td>';
            echo '<td class="text-center">' . $row['fncnos'] . '</td>';
            echo '<td class="text-center">' . $row['fncapp'] . '</td>';
            echo '<td class="text-center">' . $row['fncaps'] . '</td>';
         
            echo '<td class="text-center">' . $row['fncfin'] . '</td>';
            echo '<td class="text-center">';
            
          
            
            echo '</td>';
            echo '</tr>';
        }
        echo "</tbody>";
        echo "</table>";


       
        // Agrega esta línea al final de tu formulario actual
        echo "<div class='text-center'>";
        echo "<form action='./php/listadojubilados.php' method='post'>";
        echo "<input type='hidden' name='year' value='$selectedYear'>";
        echo "<input type='submit' class='btn btn-primary' value='Exportar a PDF'>";
        echo "</form>";
        echo "</div>";

    } else {
        echo "<p>No se encontraron funcionarios con exactamente 30 años de servicio.</p>";
    }
}




// Cerrar la conexión a la base de datos
$conn->close();
?>
