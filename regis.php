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
    <title>Register</title>

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
    <link rel="stylesheet" href="css/register.css">

</head>

<body class="animsition">

    <div class="login-wrap">
        <div class="login-content">
                       
            <div class="login-form">
                <form class="form" action="./php/regisd.php" method="post" id="registro" onsubmit="enviarFormulario();">
                    <p class="title">Registro </p>
                    <p class="message">Ingrese los datos requeridos para poder registrarse en el sistema </p>
                        <label>
                            <input required="" placeholder="Cédula" type="text" class="input" name="cid">
                            <span id="errorCedula" class="error"></span>
                        </label>
                    <div class="flex">
                        <label>
                            <input required="" placeholder="Primer Nombre" type="text" class="input" name="primernombre">
                            <span id="errorNombre" class="error"></span>
                        </label>
                
                        <label>
                            <input required="" placeholder="Primer Apellido" type="text" class="input" name="primerapellido">
                            <span id="errorApellido" class="error"></span>
                        </label>
                    </div>  
                                        
                       <label>
                          <input required="" placeholder="Correo Electrónico" type="email" class="input" name="correo">
                           
                       </label> 
                                    
                        <label>
                            <input required="" placeholder="Contraseña" type="password" class="input" name="contraseña">
                            <span id="errorContraseña" class="error"></span>
                        </label>
                        <label>
                            <input required="" placeholder="Confirme Contraseña" type="password" class="input" name="confirmarcontraseña">
                            <span id="errorContraseña" class="error"></span>
                        </label>
                            <button type="submit" class="submit">Enviar</button>

                            <p class="signin">Ya posee una cuenta? <a href="./home.php">Iniciar Sesión</a> </p>
                </form>

                  

                   
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

    <!-- Main JS-->
    <!-- Main JS-->
<script src="js/main.js"></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    function validarCedula(cedula) {
    // Expresión regular que acepta entre 7 y 10 dígitos numéricos
    var regex = /^\d{7,8}$/;
    return regex.test(cedula);
}


    function validarNombre(nombre) {
        var regex = /^[a-zA-Z]+$/;
        return regex.test(nombre);
    }

    function validarApellido(apellido) {
        var regex = /^[a-zA-Z]+$/;
        return regex.test(apellido);
    }

    document.getElementById('registro').addEventListener('submit', function (event) {
        event.preventDefault(); // Evita que el formulario se envíe normalmente

        // Obtén los datos del formulario
        var cedula = document.getElementsByName('cid')[0].value;
        var nombre = document.getElementsByName('primernombre')[0].value;
        var apellido = document.getElementsByName('primerapellido')[0].value;
        var correo = document.getElementsByName('correo')[0].value;
        var contraseña = document.getElementsByName('contraseña')[0].value;
        var confirmarContraseña = document.getElementsByName('confirmarcontraseña')[0].value;


        var errorCedulaSpan = document.getElementById('errorCedula');
        if (!validarCedula(cedula)) {
            if (cedula.length === 0) {
                errorCedulaSpan.innerText = 'La cédula es obligatoria.';
            } else if (cedula.length < 7 || cedula.length > 10) {
                errorCedulaSpan.innerText = 'La cédula debe tener entre 7 y 10 dígitos.';
            } else if (!/^\d+$/.test(cedula)) {
                errorCedulaSpan.innerText = 'La cédula debe contener solo números.';
            } else {
                errorCedulaSpan.innerText = 'Error desconocido en la cédula.';
            }
            errorCedulaSpan.style.color = 'red'; // Cambia el color del span a rojo
            return; // Detiene la ejecución si la cédula no es válida
        } else {
            errorCedulaSpan.innerText = '';
            errorCedulaSpan.style.color = ''; // Restaura el color del span (puede ser el color original)
        }


        // Validar primer nombre
        var errorNombreSpan = document.getElementById('errorNombre');
        if (!validarNombre(nombre)) {
            errorNombreSpan.innerText = 'Ingrese solo letras.';
            errorNombreSpan.style.color = 'red'; // Establecer el color en rojo
            return;
        } else {
            errorNombreSpan.innerText = '';
            errorNombreSpan.style.color = ''; // Restaurar el color original
        }

        // Validar primer apellido
        var errorApellidoSpan = document.getElementById('errorApellido');
        if (!validarApellido(apellido)) {
            errorApellidoSpan.innerText = 'Ingrese solo letras.';
            errorApellidoSpan.style.color = 'red'; // Establecer el color en rojo
            return;
        } else {
            errorApellidoSpan.innerText = '';
            errorApellidoSpan.style.color = ''; // Restaurar el color original
        }

        
        // Validar que las contraseñas sean iguales
        if (contraseña !== confirmarContraseña) {
            var errorContraseñaSpan = document.getElementById('errorContraseña');
            errorContraseñaSpan.innerText = 'Las contraseñas no coinciden.';
            errorContraseñaSpan.style.color = 'red';
            return; // Detiene la ejecución si las contraseñas no son iguales
        }

        // Consulta AJAX para verificar si la cédula ya está registrada
        $.ajax({
            type: 'POST',
            url: './php/validarcedularegistrada.php', 
            data: { cid: cedula },
            success: function (response) {
                if (response === 'registrado') {
                    // Mostrar Sweet Alert si la cédula ya está registrada
                    Swal.fire({
                        icon: 'warning',
                        title: '¡Cédula ya registrada!',
                        text: 'El funcionario ya está en cola para su Solicitud.',
                        confirmButtonText: 'Cerrar'
                    });
                } else {
                    
                    $.ajax({
                        type: 'POST',
                        url: './php/regisd.php',
                        data: {
                            cid: cedula,
                            primernombre: nombre,
                            primerapellido: apellido,
                            correo: correo,
                            contraseña: contraseña
                        },
                        success: function (response) {
                            // Muestra un SweetAlert en lugar de la ventana modal
                            Swal.fire({
                                icon: 'success',
                                title: '¡Registro exitoso!',
                                text: 'Tus datos han sido enviados para su aprobación.',
                                confirmButtonText: 'Cerrar'
                            }).then((result) => {
                                // Redirige a la página ./home.php al cerrar el SweetAlert
                                if (result.isConfirmed || result.isDismissed) {
                                    window.location.href = './home.php';
                                }
                            });
                        },
                        error: function (error) {
                            console.error('Error en la solicitud AJAX:', error);
                        }
                    });
                }
            },
            error: function (error) {
                console.error('Error en la solicitud AJAX:', error);
            }
        });
    });
</script>



</body>

</html>
<!-- end document-->

 

</body>

</html>
<!-- end document-->