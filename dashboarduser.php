<?php
session_start();
require('./php/conn.php');



// Obtener datos del usuario
$userId = $_SESSION['user'];
$userCedula = $_SESSION['cedula'];

$query = "SELECT * FROM tbmfnc WHERE fnccid = $userCedula";
$result = mysqli_query($conn, $query);

if ($result) {
    $userData = mysqli_fetch_assoc($result);
    // Ahora $userData contiene la información del usuario
} else {
    // Manejar el error en la consulta a la base de datos
    die("Error en la consulta a la base de datos: " . mysqli_error($conn));
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Mi perfil</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="./css/user.css" rel="stylesheet" media="all">
    <style>
        /* Estilos básicos para la lista desplegable */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown button {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 150px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
            margin-top: -5px;
            margin-left: 18px;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #3498db;
            color: white;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>


    <!--reloj-->
    

</head>

<body>
    <div class="main-content">
      <!-- Top navbar -->
      <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">
          <!-- Brand -->
          <img src="./images/logo.png" style="width: 60px; margin-right:10px;" alt=""><a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="dashboarduser.php" target="_blank">POLITÁCHIRA</a>
          <!-- Form -->
          <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                 
                </div>
               
              </div>
            </div>
          </form>
          <!-- User -->
          <ul class="navbar-nav align-items-center d-md-flex">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
              <div class="media align-items-center">
              <div class="dropdown">
                  <button class="btn btn-primary">
                      <i class="fas fa-user"></i> <?php echo $userData['fncnop'] . " " . $userData['fncapp'] ?>
                  </button>
                  <div class="dropdown-content">
                      <a href="./php/logout.php">Logout</a>
                  </div>
              </div>
              </div>


              </a>
              
            </li>
          </ul>
        </div>
      </nav>
      <!-- Header -->
      <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(./images/IMG-20230723-WA0108-780x470.jpg); background-size: cover; background-position: center top;">
    
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
          <div class="row">
            <div class="col-lg-7 col-md-10">
            
              <h1 class="display-2 text-white"> Hola
              <?php echo  $userData['fncnop'] ?>
              </h1>
              <p class="text-white mt-0 mb-4">¡Bienvenido!, aquí podras encontrar tus datos ingresados en el sistema. </p>
              <a href="./php/informacionpdf.php" target="_blank" class="btn btn-info">Editar Perfil</a>
              
            </div>
            
          </div>
        </div>
       
      </div>
      <!-- Page content -->
      <div class="container-fluid mt--7">
        <div class="row">
          <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
            <div class="card card-profile shadow">
              <div class="row justify-content-center">
                <div class="col-lg-3 order-lg-2">
                  <div class="card-profile-image">
                    <a href="#">
                      <img src="./images/user.png" class="rounded-circle">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                <div class="d-flex justify-content-between">
                  <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                  <a href="#" class="btn btn-sm btn-default float-right">Message</a>
                </div>
              </div>
              <div class="card-body pt-0 pt-md-4">
                <div class="row">
                  <div class="col">
                    <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                     
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <h3>
                    Bienvenido a este espacio, aqui encontrarás todos tus datos ingresados al sistema puedes visualizarlos y editarlos si asi lo deseas.
                  </h3>
                  <div class="h5 font-weight-300">
                    <i class="ni location_pin mr-2"></i>Toda información debe ser real, en caso contrario pueden haber situaciones legales.
                  </div>
                  <div class="h5 mt-4">
                    <i class="ni business_briefcase-24 mr-2"></i>Servimos para el Táchira- POLITÁCHIRA
                  </div>
                  <div>
                    <i class="ni education_hat mr-2"></i>Policia Estadal del Estado Táchira
                  </div>
                  <hr class="my-4">
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-8 order-xl-1">
            <div class="card bg-secondary shadow">
              <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                  <div class="col-8">
                    <h3 class="mb-0">Mi Perfil</h3>
                  </div>
                  <div class="col-4 text-right">
                    <a href="./php/informacionpdf.php" class="btn btn-sm btn-primary" target="_blank">Descargar PDF</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <form>
                  <h6 class="heading-small text-muted mb-4">Información Personal</h6>
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-username">Nombre Completo</label>
                          <p class="form-control-alternative form-control"> <?php echo  $userData['fncnop']." ". $userData['fncnos'] ." " .$userData['fncapp']." ".$userData['fncaps'] ?></p>

                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-email">Cédula</label>
                          <p class="form-control-alternative form-control"><?php echo $userData['fnccid'] ?></p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-first-name">Número de Placa</label>
                          <p class="form-control-alternative form-control"><?php echo $userData['fnccod'] ?></p>

                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-last-name">Jerarquía</label>
                          <?php
                            $codigo = $userData['rngcod'];
                            $query = "SELECT * FROM `tberng` WHERE rngcod = '$codigo'";
                            $result = mysqli_query($conn, $query);

                            if ($codigo == null || $codigo == '') {
                                echo "<div class='ll'>Vacio</div>";
                            } else {
                                // Verificar si la consulta tiene filas
                                if (mysqli_num_rows($result) > 0) {
                                    // Obtener el rol solo si hay resultados
                                    $rol = mysqli_fetch_assoc($result);
                                    echo "<p class='form-control-alternative form-control'>" . $rol['rngrng'] . "</p>";
                                } else {
                                    // No hay resultados en la consulta
                                    echo "<div class='ll'>No se encontró ningún rol</div>";
                                }
                            }
                            ?>

                      </div>
                    </div>
                  </div>
                  <hr class="my-4">
                  <!-- Address -->
                  <h6 class="heading-small text-muted mb-4">Adicional</h6>

                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-username">Estado Civil</label>
                          <p class="form-control-alternative form-control"> <?php echo  $userData['fncedc']?></p>

                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-email">Género</label>
                          <p class="form-control-alternative form-control"><?php echo $userData['fncgen'] ?></p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-first-name">Fecha de Nacimiento</label>
                          <p class="form-control-alternative form-control"><?php echo $userData['fncfdn'] ?></p>

                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-last-name">Fecha de Inicio en la Institución</label>
                
                          <p class="form-control-alternative form-control"><?php echo $userData['fncfin'] ?></p>

                        </div>
                      </div>
                    </div>
                  </div>
                  <h6 class="heading-small text-muted mb-4">Adicionales</h6>
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-address">Direccion de Habitacion</label>
                          <p class="form-control-alternative form-control"><?php echo $userData['fncdih'] ?></p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-city">Ciudad</label>
                          <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="Ciudad" >
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-country">Pais</label>
                          <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Pais" >
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label" for="input-country">Código Postal</label>
                          <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Código Postal">
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="my-4">
                  <div class="pl-lg-4">
                  <h6 class="heading-small text-muted mb-4">Rasgos Físicos</h6>

                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-username">Estatura</label>
                          <p class="form-control-alternative form-control"> <?php echo  $userData['fncest']?>Cm</p>

                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-email">Peso</label>
                          <p class="form-control-alternative form-control"><?php echo $userData['fncpso'] ?>Kg</p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-first-name">Color de Piel</label>
                          <p class="form-control-alternative form-control"><?php echo $userData['fncclr'] ?></p>

                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-last-name">Color de Cabello</label>
                
                          <p class="form-control-alternative form-control"><?php echo $userData['fnccbl'] ?></p>

                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-first-name">Color de Ojos</label>
                          <p class="form-control-alternative form-control"><?php echo $userData['fncojo'] ?></p>

                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-last-name">Tipo de Nariz</label>
                
                          <p class="form-control-alternative form-control"><?php echo $userData['fncnrz'] ?></p>

                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-first-name">Tipo de Boca</label>
                          <p class="form-control-alternative form-control"><?php echo $userData['fncbca'] ?></p>

                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-last-name">Tipo de Barba</label>
                
                          <p class="form-control-alternative form-control"><?php echo $userData['fncbrb'] ?></p>

                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-first-name">Apellido y Nombre del Conyugue</label>
                          <p class="form-control-alternative form-control"><?php echo $userData['fncnmc'] ?></p>

                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-last-name">Nacionalidad del Conyugue</label>
                
                          <p class="form-control-alternative form-control"><?php echo $userData['fncncc'] ?></p>

                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-first-name">Nombre y Apellido del Padre</label>
                          <p class="form-control-alternative form-control"><?php echo $userData['fncnpp'] ?></p>

                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-last-name">Cedula del Padre</label>
                
                          <p class="form-control-alternative form-control"><?php echo $userData['fnccdp'] ?></p>

                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-first-name">Nacionalidad del Padre</label>
                          <p class="form-control-alternative form-control"><?php echo $userData['fncncp'] ?></p>

                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-last-name">Nombre y Apellido de La Madre</label>
                
                          <p class="form-control-alternative form-control"><?php echo $userData['fnccdm'] ?></p>

                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6 m-auto text-center">
          <div class="copyright">
            <p></a> Politáchira</p>
          </div>
        </div>
      </div>
    </footer>
  </body>

</html>
<!-- end document-->
