<?php
require_once("conn.php");

// Obtener la fecha de inicio y el ID de la tabla de funcionarios
$queryFechaInicio = "SELECT fnccid, fncfin FROM tbmfnc";
$resultFechaInicio = $conn->query($queryFechaInicio);

// Verificar si hay resultados
if ($resultFechaInicio !== false && $resultFechaInicio->num_rows > 0) {
    // Iterar sobre los resultados
    while ($rowFechaInicio = $resultFechaInicio->fetch_assoc()) {
        $idFuncionario = $rowFechaInicio["fnccid"];
        $fechaInicio = $rowFechaInicio["fncfin"];

        // Verificar si la fecha de inicio es válida
        if (strtotime($fechaInicio) === false) {
            // La fecha de inicio no es válida, continuar con el siguiente funcionario
            continue;
        }

        // Calcular el número de años desde la fecha de inicio hasta la fecha actual
       // Calcular el número de años desde la fecha de inicio hasta la fecha actual
        $fechaActual = date("Y-m-d");
        echo$fechaActual;
        $fechaInicio = date_create($fechaInicio)->format('Y-m-d'); // Convertir a cadena de texto
        echo$fechaInicio;
        $interval = date_diff(date_create($fechaInicio), date_create($fechaActual));
        $aniosPasados = $interval->y;
        echo$aniosPasados;


        // Obtener el valor de rngcan y rngrng de la tabla tberng para el rango al que va a ascender
        $queryRngInfo = "SELECT rngcod, rngcan, rngrng FROM tberng WHERE rngcan = $aniosPasados";
        $resultRngInfo = $conn->query($queryRngInfo);
       


        // Verificar si la consulta es exitosa
        if ($resultRngInfo !== false) {
            // Verificar si hay resultados en la consulta
            if ($resultRngInfo->num_rows > 0) {
                $rowRngInfo = $resultRngInfo->fetch_assoc();
                $rngrngAscenso = $rowRngInfo["rngrng"];
                $idRangoActual = $rowRngInfo["rngcod"];
             

                // Obtener el código de rango y el nombre del rango para el rango actual
                $queryRngActual = "SELECT rngrng FROM tberng WHERE rngcod = $idRangoActual - 1";
                $resultRngActual = $conn->query($queryRngActual);


                // Verificar si la segunda consulta es exitosa
                if ($resultRngActual !== false) {
                    // Verificar si hay resultados en la segunda consulta
                    if ($resultRngActual->num_rows > 0) {
                        $rowRngActual = $resultRngActual->fetch_assoc();
                        $rngrngActual = $rowRngActual["rngrng"];

                                        // Verificar si ya existe un registro con los mismos valores de fyrrna y fyrnrn
                        $queryVerificarExistencia = "SELECT COUNT(*) AS count FROM tbtfyr WHERE fyrcid = '$idFuncionario' AND fyrrna = '$rngrngActual' AND fyrnrn = '$rngrngAscenso'";
                        $resultExistencia = $conn->query($queryVerificarExistencia);

                        if ($resultExistencia !== false && $resultExistencia->num_rows > 0) {
                            $rowExistencia = $resultExistencia->fetch_assoc();
                            $conteo = $rowExistencia["count"];

                            if ($conteo > 0) {
                                // Si ya existe un registro con los mismos valores, mostrar mensaje y continuar con el siguiente funcionario
                                echo "Funcionario duplicado. No se insertará el registro.";
                                continue;
                            }
                        }


                        // Insertar datos en la tabla tbtfyr
                        $insertQuery = "INSERT INTO tbtfyr (fyrcid, fyrrna, fyrnrn) VALUES ('$idFuncionario', '$rngrngActual', '$rngrngAscenso')";
                        $conn->query($insertQuery);
                        
                    }
                }
            }
        }
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>
