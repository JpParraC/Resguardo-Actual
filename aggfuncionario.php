

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
    <title>Agregar Funcionario</title>

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
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
     
        
     <?php include('./php/navdinamico.php'); ?>
        
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
       



            <!-- MAIN CONTENT-->
                <div class="main-content">
                  <div class="section__content section__content--p30">
                        <form action="./php/rtq.php" method="post" id="Miformulario" onsubmit="guardarDatos(event)">
                            <div class="col-lg-12 mx-auto">
                            <div class="card">
                            <div class="card-header">
                                <h3 class="text-center">Agregar Funcionario</h3>
                            </div>

                            <section class="seccion visible" id="seccion1">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="pi">Datos Personales</h3>
                                  

                                        <div class="form-group col-md-12">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="firstName" class="form-control-label">Cédula</label>
                                                    <input type="text" name="cdi" placeholder="Ingrese su cédula" class="form-control">
                                                    <span id="errorCedula" class="error"></span>
                                                </div>
                                                <div class="col">
                                                    <label for="ec" class="form-control-label">Estado Civil</label>
                                                    <select class="form-control" name="es">
                                                        <option value="soltero">Soltero</option>
                                                        <option value="casado">Casado</option>
                                                        <option value="viudo">Viudo</option>
                                                        <option value="Divorciado">Divorciado</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="form-group col-md-12">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="firstName" class="form-control-label">Primer Nombre*</label>
                                                    <input type="text" name="ppnombre" placeholder="Enter your first name" class="form-control">
                                                </div>
                                                <div class="col">
                                                    <label for="secondName" class="form-control-label">Segundo Nombre</label>
                                                    <input type="text" name="ssnombre" placeholder="Enter your second name" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                     
    
                                        <div class="form-group col-md-12">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="apellidoName" class="form-control-label">Primer Apellido*</label>
                                                    <input type="text" name="ppapellido" placeholder="Enter your first name" class="form-control">
                                                </div>
                                                <div class="col">
                                                    <label for="secondLastName" class="form-control-label">Segundo Apellido</label>
                                                    <input type="text" name="ssapellido" placeholder="Enter your second name" class="form-control">
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="gender" class="form-control-label">Género</label>
                                            <input type="text" name="gender" placeholder="F" class="form-control">
                                        </div>
                                      
                                        <div class="form-group col-md-6">
                                            <label for="dob" class="form-control-label">Fecha de Nacimiento</label>
                                            <input type="date" name="dob" placeholder="Enter date of birth" class="form-control">
                                        </div>
                                      
                                      
                                        <div class="form-group col-md-12">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="apellidoName" class="form-control-label">Nùmero de Placa</label>
                                                    <input type="text" name="np" placeholder="0000322" class="form-control">
                                                </div>
                                                <div class="col">
                                                    <label for="secondLastName" class="form-control-label">Tipo de Documento</label>
                                                    <select class="form-control" name="tdd">
                                                        <option value="carnet">Carnet</option>
                                                        <option value="boleta">Boleta Militar</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
    
    
                                        <div class="form-group col-md-6">
                                            <label for="startDate" class="form-control-label">Fecha de Inicio en la institución</label>
                                            <input type="date" name="fdi" placeholder="Enter start date" class="form-control">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="correo" class="form-control-label">Correo Electrónico</label>
                                                    <input type="email" name="correo" placeholder="Ingresa tu correo electrónico" class="form-control">
                                                </div>
                                                <div class="col">
                                                    <label for="Tlf" class="form-control-label">Teléfono Celular</label>
                                                    <input type="text" name="tlf" placeholder="Ingresa tù numero de teléfono" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Tu formulario para la sección 1 -->
                                        <div class="text-center">
                                            <button type="button" class="btn btn-primary mx-auto" onclick="mostrarSeccion(2)">Siguiente</button>
                                        </div>
                                       
                                    </div>
                                </div>
                            </section>
                

                            <section class="seccion" id="seccion2">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="pi">Rasgos Personales</h3>
                                        <!-- Tu formulario para la sección 2 -->
                                        <div class="form-group col-md-12 ">
                                        
                                            <div class="row">
                                                <div class="col">
                                                    <label for="peso" id="jk" class="form-control-label">Peso</label>
                                                    <input type="text" name="peso" placeholder="60kg" class="form-control">
                                                </div>
                                                <div class="col">
                                                    <label for="altura" class="form-control-label">Altura</label>
                                                    <input type="text" name="altura" placeholder="160cm" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12 ">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="colordpiel" class="form-control-label">Color de Piel</label>
                                                    <select name="cdp" class="form-control">
                                                            <option value="blanco">Blanco</option>
                                                            <option value="moreno claro">Moreno Claro</option>
                                                            <option value="moreno medio">Moreno Medio</option>
                                                            <option value="moreno oscuro">Moreno Oscuro</option>
                                                            <option value="negro">Negro</option>
                                                            <option value="amarillo">Amarillo</option>
                                                            <option value="rojo">Rojo</option>
                                                            <option value="beige">Beige</option>
                                                            <option value="oliva">Oliva</option>
                                                            <option value="bronceado">Bronceado</option>
                                                            <option value="canela">Canela</option>
                                                            <option value="café claro">Café Claro</option>
                                                            <option value="café medio">Café Medio</option>
                                                            <option value="café oscuro">Café Oscuro</option>
                                                            <option value="café profundo">Café Profundo</option>
                                                            <option value="almendra">Almendra</option>
                                                            <option value="avellana">Avellana</option>
                                                            <option value="marfil">Marfil</option>
                                                            <option value="rosa pálido">Rosa Pálido</option>
                                                            <option value="gris pálido">Gris Pálido</option>

                                                        
                                                        <!-- Agrega más opciones según sea necesario -->
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="colorcabello" class="form-control-label">Color de Cabello</label>
                                                    <select name="cdc" class="form-control">
                                                        <option value="rubio">Rubio</option>
                                                        <option value="castaño">Castaño</option>
                                                        <option value="negro">Negro</option>
                                                        <!-- Agrega más opciones según sea necesario -->
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="tdn" class="form-control-label">Tipo de nariz</label>
                                                    <select name="tpn" class="form-control">
                                                        <option value="recta">Nariz Recta</option>
                                                        <option value="concava">Nariz Cóncava</option>
                                                        <option value="convexa">Nariz Convexa</option>
                                                        <option value="aguilina">Nariz Aquilina</option>
                                                        <option value="griega">Nariz Griega</option>
                                                        <option value="bulbosa">Nariz Bulbosa</option>
                                                        <option value="roma">Nariz Roma</option>
                                                        <option value="respingada">Nariz Respingada</option>
                                                        <option value="aguileña">Nariz Aguileña</option>
                                                        <option value="celestial">Nariz Celestial (Retrato Chino)</option>
                                                        <option value="sillaDeMontar">Nariz de Silla de Montar</option>
                                                        <option value="gancho">Nariz de Gancho</option>
                                                        <option value="hiperbolica">Nariz Hiperbólica</option>
                                                        <option value="concavaConvexa">Nariz Cóncava-Convexa</option>
                                                        <option value="falciforme">Nariz Falciforme</option>
                                                        <option value="prominente">Nariz Prominente</option>
                                                        <option value="chata">Nariz Chata</option>
                                                    
                                                        <!-- Agrega más opciones según sea necesario -->
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="tpb" class="form-control-label">Tipo de Boca</label>
                                                    <select name="tdb" class="form-control">
                                                        <option value="pequeña">Pequeña</option>
                                                        <option value="grande">Grande</option>
                                                        <option value="labios gruesos">Labios Gruesos</option>
                                                        <!-- Agrega más opciones según sea necesario -->
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="startDate" class="form-control-label">Tipo de Barba</label>
                                                    <select class="form-control"  name="tdbr">
                                                        <option value="Abundante">Abundante</option>
                                                        <option value="poco">Escaza</option>
                                                        <option value="Ninguna">Ninguna</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
                                    </div>
    
                                       
                                        <div class="text-center">
                                            <button type="button" class="btn btn-secondary" onclick="mostrarSeccion(1)">Anterior</button>
                                            <button type="button" class="btn btn-primary" onclick="mostrarSeccion(3)">Siguiente</button>
                                        </div>
                                        
                                    </div>
                                </div>
                            </section>

                            <section class="seccion" id="seccion3">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="pi">Datos de Ubicación</h3>
                                        <!-- ormulario para la sección 3 -->
                                        <div class="form-group col-md-12 ">
                                        
                                            <div class="row">
                                                <div class="col">
                                                    <label for="mnp"  class="form-control-label">Municipio</label>
                                                    <select name="mnptch" class="form-control">
                                                        <option value="AndresBello">Andrés Bello</option>
                                                        <option value="AntonioRomuloCosta">Antonio Rómulo Costa</option>
                                                        <option value="Ayacucho">Ayacucho</option>
                                                        <option value="Bolivar">Bolívar</option>
                                                        <option value="Cardenas">Cárdenas</option>
                                                        <option value="Cordoba">Córdoba</option>
                                                        <option value="FernandezFeo">Fernández Feo</option>
                                                        <option value="FranciscoDeMiranda">Francisco de Miranda</option>
                                                        <option value="GarciaDeHevia">García de Hevia</option>
                                                        <option value="Guasimos">Guásimos</option>
                                                        <option value="Independencia">Independencia</option>
                                                        <option value="Jauregui">Jáuregui</option>
                                                        <option value="JoseMariaVargas">José María Vargas</option>
                                                        <option value="Junin">Junín</option>
                                                        <option value="Libertad">Libertad</option>
                                                        <option value="Libertador">Libertador</option>
                                                        <option value="Lobatera">Lobatera</option>
                                                        <option value="Michelena">Michelena</option>
                                                        <option value="Panamericano">Panamericano</option>
                                                        <option value="PedroMariaUrena">Pedro María Ureña</option>
                                                        <option value="RafaelUrdaneta">Rafael Urdaneta</option>
                                                        <option value="SamuelDarioMaldonado">Samuel Darío Maldonado</option>
                                                        <option value="SanCristobal">San Cristóbal</option>
                                                        <option value="Seboruco">Seboruco</option>
                                                        <option value="SimonRodriguez">Simón Rodríguez</option>
                                                        <option value="Sucre">Sucre</option>
                                                        <option value="Torbes">Torbes</option>
                                                        <option value="Uribante">Uribante</option>
                                                        <option value="SimonBolivar">Simón Bolívar</option>
                                                    </select>
                                                    
                                                </div>
                                                <div class="col">
                                                    <label for="altura" class="form-control-label">Parroquia</label>
                                                    <select name="prq" id="" class="form-control">
                                                        <option value="">sss</option>
                                                        <option value="">ssss</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="startDate" class="form-control-label">Dirección de Habitación</label>
                                            <input type="text" name="ddh" placeholder="Ej. Palo Gordo,Sector Zapatoca, vereda 2 p-18" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="startDate" class="form-control-label">Número de Casa</label>
                                            <input type="text" name="ndc" placeholder="P-18" class="form-control">
                                        </div>

                                        
                                        
                                        <div class="text-center">
                                            <button type="button" class="btn btn-secondary" onclick="mostrarSeccion(2)">Anterior</button>
                                            <button type="button" class="btn btn-primary" onclick="mostrarSeccion(4)">Siguiente</button>
                                        </div>
                                        
                                    </div>
    
                                       
                                     
                                        
                                </div>
                                
                            </section>
                           
                           
                            <section class="seccion" id="seccion4">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="pi">Datos Familiares</h3>
                                        <!-- Tu formulario para la sección 2 -->
                                        <h4 class="pi text-primary j">Datos del Conyugue</h4>
                                        <div class="col-md-6">
                                            <Label class="form-control-label">Tiene usted Conyugue?</Label>
                                            <select name="" id="" class="form-control">
                                                <option value="Sí">Sí</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12 ce">
                                        
                                            <div class="row">
                                                <div class="col ">
                                                    <label for="cdicyg" id="jk" class="form-control-label">Cédula del Conyugue</label>
                                                    <input type="text" name="cidcyg" placeholder="Ejm. 30056463" class="form-control">
                                                </div>
                                                <div class="col">
                                                    <label for="ncnldcyg" class="form-control-label">Nacionalidad del Conyugue</label>
                                                    <select class="form-control " name="ndcyg">
                                                        <option value="Venezolano">V</option>
                                                        <option value="Extranjero">E</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    <div class="form-group col-md-12 ce">
                                        
                                        <div class="row">
                                            <div class="col ">
                                                <label for="cdicyg" id="jk" class="form-control-label">Nombre y Apellido del Conyugue</label>
                                                <input type="text" name="nombreconyugue" class="form-control">
                                            </div>
                                            <div class="col">
                                                <label for="">Seleccione una Opción</label>
                                                <select name="estcyg" id="" class="form-control">
                                                    <option value="">Vivo</option>
                                                    <option value="">Fallecido</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                        
                                    <h4 class="pi text-primary j cd">Datos de los Padres</h4>
                                        <div class="form-group col-md-12 ">
                                            
                                            <div class="row">
                                                <div class="col">
                                                    <label for="cdicyg" id="jk" class="form-control-label">Cédula de La Madre</label>
                                                    <input type="text" name="cedulamadre" placeholder="Ejm. 30056463" class="form-control">
                                                </div>
                                                <div class="col">
                                                    <label for="ncnldcyg" class="form-control-label">Nacionalidad de la Madre</label>
                                                    <select class="form-control " name="ndcmdr">
                                                        <option value="Venezolano">V</option>
                                                        <option value="Extranjero">E</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 ">
                                            
                                            <div class="row">
                                                <div class="col">
                                                    <label for="cdicyg" id="jk" class="form-control-label">Nombre y Apellido de la Madre</label>
                                                    <input type="text" name="nombremadre"  class="form-control">
                                                </div>
                                                <div class="col">
                                                    <label for="ncnldcyg" class="form-control-label">Seleccione una Opción</label>
                                                    <select class="form-control" name="estmadre">
                                                        <option value="Vivo">Vivo</option>
                                                        <option value="Fallecido">Fallecido</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        
                                        <div class="form-group col-md-12  ce">
                                            
                                            <div class="row">
                                                <div class="col">
                                                    <label for="cdicyg" id="jk" class="form-control-label">Cédula del Padre
                                                    </label>
                                                    <input type="text" name="cedulapadre" placeholder="Ejm. 30056463" class="form-control">
                                                </div>
                                                <div class="col">
                                                    <label for="ncnldcyg" class="form-control-label">Nacionalidad del Padre</label>
                                                    <select class="form-control" name="ndcpadre" >
                                                        <option value="Venezolano">V</option>
                                                        <option value="Extranjero">E</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12  ce">
                                            
                                            <div class="row">
                                                <div class="col">
                                                    <label for="cdicyg" id="jk" class="form-control-label">Nombre y Apellido del Padre
                                                    </label>
                                                    <input type="text" name="nombrepadre" class="form-control">
                                                </div>
                                                <div class="col">
                                                    <label for="ncnldcyg" class="form-control-label">Seleccione una opción</label>
                                                    <select class="form-control" name="estpadre" >
                                                        <option value="Vivo">V</option>
                                                        <option value="Fallecido">E</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        

                                        <div class="text-center cd">
                                            <button type="button" class="btn btn-secondary" onclick="mostrarSeccion(3)">Anterior</button>
                                            <button type="button" class="btn btn-primary" onclick="mostrarSeccion(5)">Siguiente</button>
                                        </div>
                                        
                                    </div>
                                </div>
                            </section>

                            <section class="seccion" id="seccion5">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="pi">Datos Adicionales</h3>
                                        <!-- ormulario para la sección 5 -->

                                            <div class="col-md-6">
                                                <Label class="form-control-label">Tiene usted Hijos?</Label>
                                                <select name="" id="" class="form-control">
                                                    <option value="Sí">Sí</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-12  ce">
                                            
                                            <div class="row">
                                                <div class="col">
                                                    <label for="cdicyg" id="jk" class="form-control-label">Nombre y Apellido del Hijo
                                                    </label>
                                                    <input type="text" name="nombrehijo" class="form-control">
                                                </div>
                                                <div class="col">
                                                    <label for="ncnldcyg" class="form-control-label">Fecha de Nacimiento</label>
                                                    <input type="date" class="form-control" placeholder="Fecha de Nacimiento de su Hijo" name="fechanacimientohijo">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="startDate" class="form-control-label">Género</label>
                                            <select name="genhijo" id="" class="form-control">
                                                <option value="Femenino">Femenino</option>
                                                <option value="Masculino">Masculino</option>
                                            </select>
                                        </div>

                                        <div class="text-center cd">
                                            
                                        <button class="btn btn-primary smallicon" onclick="editar()" data-toggle="tooltip" data-placement="top" title="Editar"><i class="zmdi zmdi-plus zmdi-hc-xs"></i></button>
                                        
                                          
                                        </div>

                                        <div class="text-center cd">
                                            <button type="button" class="btn btn-secondary" onclick="mostrarSeccion(4)">Anterior</button>
                                            <input class="btn btn-outline-success " type="submit" value="Guardar">
                                            
                                        </div>
                                        
                                    </div>
    
                                       
                                     
                                        
                                </div>
                                
                            </section>
                            </div>
                            </div>

                          
                        </form>
                    </div>
                </div>
                
        </div>
    </div>
                
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
        
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <!--SCRIPT PARA SIGUIENTE  ANTERIOR-->
   
    <script>
        function mostrarSeccion(numeroSeccion) {
            // Oculta todas las secciones
            var secciones = document.getElementsByClassName('seccion');
            for (var i = 0; i < secciones.length; i++) {
                secciones[i].classList.remove('visible');
            }

            // Muestra la sección correspondiente
            document.getElementById('seccion' + numeroSeccion).classList.add('visible');
        }
    </script>
    <script>
    function guardarDatos(event) {
        // Previene el comportamiento predeterminado del formulario (envío)
        event.preventDefault();

        // Envía el formulario usando AJAX u otra técnica para guardar los datos
        // Aquí puedes agregar tu código para enviar los datos del formulario al servidor

        // Muestra el SweetAlert después de guardar exitosamente los datos
        swal("¡Registro exitoso!", {
            icon: "success",
        });
    }
</script>
    

</body>

</html>
