<?php
require_once('conn.php');

// Verifica si el formulario se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos del formulario y realiza la limpieza
    $cedula = mysqli_real_escape_string($conn, $_POST['cdi']);
    $es = mysqli_real_escape_string($conn, $_POST['es']);
    $nombre = mysqli_real_escape_string($conn, $_POST['ppnombre']);
    $nombred = mysqli_real_escape_string($conn, $_POST['ssnombre']);
    $apellido = mysqli_real_escape_string($conn, $_POST['ppapellido']);
    $apellidod = mysqli_real_escape_string($conn, $_POST['ssapellido']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $np = mysqli_real_escape_string($conn, $_POST['np']);
    $tdd = mysqli_real_escape_string($conn, $_POST['tdd']);
    $fdi = mysqli_real_escape_string($conn, $_POST['fdi']);
    $cor = isset($_POST['cor']) ? mysqli_real_escape_string($conn, $_POST['cor']) : "";
    $tlf = mysqli_real_escape_string($conn, $_POST['tlf']);
    $peso = mysqli_real_escape_string($conn, $_POST['peso']);
    $altura = mysqli_real_escape_string($conn, $_POST['altura']);
    $cdp = mysqli_real_escape_string($conn, $_POST['cdp']);
    $cdc = mysqli_real_escape_string($conn, $_POST['cdc']);
    $tpn = mysqli_real_escape_string($conn, $_POST['tpn']);
    $tbd = isset($_POST['tbd']) ? mysqli_real_escape_string($conn, $_POST['tbd']) : "";
    $tdbr = mysqli_real_escape_string($conn, $_POST['tdbr']);
    $mnptch = mysqli_real_escape_string($conn, $_POST['mnptch']);
    $prq = mysqli_real_escape_string($conn, $_POST['prq']);
    $ddh = mysqli_real_escape_string($conn, $_POST['ddh']);
    $ndc = mysqli_real_escape_string($conn, $_POST['ndc']);
    $cidcyg = mysqli_real_escape_string($conn, $_POST['cidcyg']);
    $ndcyg = mysqli_real_escape_string($conn, $_POST['ndcyg']);
    $nombreconyugue= mysqli_real_escape_string($conn, $_POST['nombreconyugue']);
    $estcyg= mysqli_real_escape_string($conn, $_POST['estcyg']);
    $cedulamadre= mysqli_real_escape_string($conn, $_POST['cedulamadre']);
    $ndcmdr= mysqli_real_escape_string($conn, $_POST['ndcmdr']);
    $nombremadre= mysqli_real_escape_string($conn, $_POST['nombremadre']);
    $estmadre= mysqli_real_escape_string($conn, $_POST['estmadre']);
    $cedulapadre= mysqli_real_escape_string($conn, $_POST['cedulapadre']);
    $ndcpadre= mysqli_real_escape_string($conn, $_POST['ndcpadre']);
    $nombrepadre= mysqli_real_escape_string($conn, $_POST['nombrepadre']);
    $estpadre= mysqli_real_escape_string($conn, $_POST['estpadre']);
    

    // Prepara la consulta SQL con una sentencia preparada
    $sql = "INSERT INTO `tbmfnc` (`fnccid`,`fncedc`, `fncnop`, `fncnos`, `fncapp`, `fncaps`, `fncgen`, `fncfdn`,`fnccod`,`fncdoc`, `fncfin`,`fnccor`,`fnctlf`,`fncpso`,`fncest`,`fncclr`,`fnccbl`,`fncnrz`,`fncbca`,`fncbrb`,`fncmun`,`fncprq`,`fncdih`,`fncndc`,`fncciy`,`fncncc`,`fncnmc`,`fncesc`,`fnccdm`, `fncncm`,`fncnpm`,`fncesm`,`fnccdp`,`fncncp`,`fncnpp`,`fncesp`) VALUES (?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);

    // Verifica si la preparación de la consulta fue exitosa
    if ($stmt === false) {
        echo "Error en la preparación de la consulta: " . $conn->error;
    } else {
        // Vincula los parámetros y ejecuta la consulta preparada
        $stmt->bind_param("ssssssssssssssssssssssssssssssssssss", $cedula,$es, $nombre, $nombred, $apellido, $apellidod, $gender, $dob,$np,$tdd,$fdi,$cor,$tlf,$peso,$altura,$cdp,$cdc,$tpn,$tbd,$tdbr,$mnptch,$prq,$ddh,$ndc,$cidcyg,$ndcyg,$nombreconyugue,$estcyg,$cedulamadre,$ndcmdr,$nombremadre,$estmadre,$cedulapadre,$ndcpadre,$nombrepadre,$estpadre);
        $stmt->execute();

        // Verifica si la consulta fue exitosa
        if ($stmt->affected_rows > 0) {
            echo "Registro exitoso";
        } else {
            echo "Error al registrar: " . $stmt->error;
        }

        // Cierra la consulta preparada
        $stmt->close();
    }
}

// Cierra la conexión
$conn->close();
?>
