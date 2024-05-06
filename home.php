
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Policía del Táchira</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">


    
</head>
<body id="page-top">
  

  
    <nav id="tr" class="navbar navbar-expand-lg bg-transparent fixed-top">
        <div class="container">
            <a class="navbar-brand text-white" href="#">POLITÁCHIRA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#about">Acerca de nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#services">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#footer">Contacto</a>
                        </li>
                    </ul>
            </div>
        </div>
    </nav>
     
   
    <section class="masthead">
        <div class="container">
            <div class="ow gx-4 gx-lg-12 h-100">
                <div class="col-lg-12 ">
                    <div class="col-lg-12 ip ">
                        <img src="./images/logo.png" id="logo" alt="">
                        <h1 class="text-white font-weight-bold bienvenido">BIENVENIDO</h1>
                        <h2 class="text-white font-weight-bold">POLICÍA DEL ESTADO TÁCHIRA</h2>
                        <hr class="divider" />


                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                            Iniciar Sesión
                          </button>

                        <a class="btn btn-success btn-xl boton2" href="./regis.php" >Registrarse</a>

                    </div>
                </div>

            </div>
        </div>
      
    </section>

  
    
    <section class="page-section col-10 mx-auto align-items-center" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center"> <!-- Alinea el contenido al centro y añade un margen en el eje Y -->
                    <div class="text-start n9">
                        <h2 class="mt-0 " id="t1">Somos la principal Fuerza Policial a nivel regional y estamos bajo el control del Gobierno del Estado Táchira</h2>
                        <p class="text-primary-75 mb-4" id="t2">63 Aniversario- SINCE 16 de Julio,1960.</p>
                        <hr class="divider divider-light" />
                    </div>
                </div>
                
                <div class="col-md-6 text-center"> <!-- Alinea el contenido al centro -->
                    <!-- Aquí puedes agregar una imagen -->
                    <img src="./images/IMG-20230723-WA0108-780x470.jpg" class="w-100" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="page-section col-10 mx-auto align-items-center" id="myv">
        <div class="container-fluid mm">
            <div class="text-slide active mision" >
               
                <h2 transition-style="in:wipe:right">Misión</h2>
                <p transition-style="in:wipe:right">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae aut ullam nisi. Voluptas repellat, assumenda ea distinctio quos expedita tempore quisquam! Corporis nobis aut veritatis, atque dolore fugit voluptatum quas?</p>
           
              
            </div>
            <div class="text-slide vision">
                <h2 transition-style="in:wipe:right">Visión</h2>
                <p transition-style="in:wipe:right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores obcaecati accusamus recusandae, veniam nihil impedit nisi optio itaque beatae cupiditate sed quasi distinctio ullam modi fugit dolor assumenda, deserunt quo?</p>
            </div>
            <div class="arrow arrow-left" onclick="showPrevSlide()">&#10094;</div>
            <div class="arrow arrow-right" onclick="showNextSlide()">&#10095;</div>
        </div>
    </section>
    
   
    <section class="page-section col-10  mx-auto align-items-center" id="services">
        <div class="container align-items-center">
            <div class="row">
                <h2>Servimos Para</h2>
                <hr class="divider divider-light" />
              <div class="row gx-4 gx-lg-5">
                  <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <img width="48" height="48" src="https://img.icons8.com/color/48/policeman-male--v1.png" alt="policeman-male--v1"/>
                        <h3 class="h4 mb-2">Mantener el Orden Público</h3>
                        <p class="mb-0">Our themes are updated regularly to keep them bug free!</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
            <div class="mt-5">
                <img width="48" height="48" src="https://img.icons8.com/emoji/48/police-car-emoji.png" alt="police-car-emoji"/>
                <h3 class="h4 mb-2">Prevenimos el Delito</h3>
                <p class="mb-0">All dependencies are kept current to keep things fresh.</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
            <div class="mt-5">
                <img width="48" height="48" src="https://img.icons8.com/external-flat-juicy-fish/60/external-criminal-corruption-flat-flat-juicy-fish-2.png" alt="external-criminal-corruption-flat-flat-juicy-fish-2"/>
                <h3 class="h4 mb-2">Combatimos contra Criminales</h3>
                <p class="mb-0">You can use this design as is, or you can make changes!</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
            <div class="mt-5">
                <img width="48" height="48" src="https://img.icons8.com/fluency/48/siren.png" alt="siren"/>
                <h3 class="h4 mb-2">Asistimos en Emergencias</h3>
                <p class=" mb-0">Is it really open source if it's not made with love?</p>
            </div>
        </div>
    </div>
        </div>
    </section>


    
  
    <section class="page-section col-10 mx-auto align-items-center" id="gallery">
       <div class="container-fluid col-lg-12 text-center text-white t2">
            <h2>Nuestra Comunidad</h2>
       </div>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/IMG-20230723-WA0108-780x470.jpg" class="w-100"  alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img src="./images/DOTACION.jpeg" class="w-100"  alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img src="./images/Fl0t-C_XEAAz1hY.jpg"  class=" w-100" alt="Image 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> 
            
    </section>

            
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <!-- Cabecera de la Ventana Modal -->
            <div class="modal-header modal-header-logo">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <img src="./images/logo.png" alt="Logo"> <!-- Ruta de tu logo -->
              <h5 class="modal-title" id="loginModalLabel">INICIAR SESIÓN</h5>
            
            </div>
            <!-- Contenido de la Ventana Modal -->
            <div class="modal-body">
              <!-- Formulario de Inicio de Sesión -->
              
              <form action="./php/validarlogin.php" method="POST">
                <div class="mb-3">
                  <label for="username" class="form-label">Cedula</label>
                  <input type="text" class="form-control" name="cedula" id="username" placeholder="Ingrese su número de cédula">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" name="contra" id="password" placeholder="Ingrese su contraseña">
                </div>
                <button type="submit" class="btn btn-primary text-center">Iniciar Sesión</button>
              </form>
            </div>
            <!-- Fin del Contenido de la Ventana Modal -->
          </div>
        </div>
    </div>
      

    <footer class=" col-10 align-items-center mx-auto text-white">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-4">
                    <h5>Contacto Policía Táchira</h5>
                    <p>Dirección: [Dirección]</p>
                    <p>Teléfono: [Número de teléfono]</p>
                    <p>Email: [Correo electrónico]</p>
                </div>
                <div class="col-md-4">
                    <h5>Redes Sociales</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Derechos de Autor</h5>
                    <p>&copy; 2023 Policía del Estado Táchira. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    
<!-- Bootstrap CSS -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="..." crossorigin="anonymous"></script>

<script src="script.js"></script>

    <!--script para el scroll-->

    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 56) {
                    $("#tr").removeClass("bg-transparent").addClass("bg-dark");
                } else {
                    $("#tr").removeClass("bg-dark").addClass("bg-transparent");
                }
            });
        });
    </script>

    
    
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const textSlides = document.querySelectorAll('.text-slide');
        let activeSlideIndex = 0;

        function showSlide(index) {
            textSlides[activeSlideIndex].classList.remove('active');
            activeSlideIndex = index;
            textSlides[activeSlideIndex].classList.add('active');
        }

        function showNextSlide() {
            let nextIndex = activeSlideIndex + 1;
            if (nextIndex >= textSlides.length) {
                nextIndex = 0;
            }
            showSlide(nextIndex);
        }

        function showPrevSlide() {
            let prevIndex = activeSlideIndex - 1;
            if (prevIndex < 0) {
                prevIndex = textSlides.length - 1;
            }
            showSlide(prevIndex);
        }

        document.querySelector('.arrow-left').addEventListener('click', showPrevSlide);
        document.querySelector('.arrow-right').addEventListener('click', showNextSlide);

      
        document.addEventListener('keydown', function(event) {
                if (event.key === 'ArrowLeft') {
                    showPrevSlide();
                } else if (event.key === 'ArrowRight') {
                    showNextSlide();
                }
            });

       
    });
</script>

     <!--ultimo pedazo para activar las teclas-->
     <!--script animacion myv-->

     <script>
        document.addEventListener('DOMContentLoaded', function() {
          window.addEventListener('scroll', function() {
            var missionElements = document.querySelectorAll('.mision');
            var visionElements = document.querySelectorAll('.vision');
    
            missionElements.forEach(function(element) {
              if (isElementInViewport(element)) {
                element.classList.add('visible');
              }
            });
    
            visionElements.forEach(function(element) {
              if (isElementInViewport(element)) {
                element.classList.add('visible');
              }
            });
          });
    
          function isElementInViewport(element) {
            var rect = element.getBoundingClientRect();
            return (
              rect.top >= 0 &&
              rect.left >= 0 &&
              rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
              rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
          }
        });
      </script>
</body>
</html>