<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/node_modules/sweetalert2/dist/sweetalert2.min.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/> 

    <script src="https://kit.fontawesome.com/ded965e364.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <title>After School</title>
    <link rel="icon" type="image/png" href="favicon.png" /> 

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle-min.css">

    </head>
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img src="assets/images/afterschool.png"  alt="after school">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/">Nosotros</a></li>
                            <li class="scroll-to-section"><a href="cursos.php">Cursos</a></li>
                            <li class="scroll-to-section">
                                <a href="#contacto" class="d-none d-md-block">Contáctanos</a>
                                <a href="#" id="btn-open-contacto" class="d-block d-md-none">Contáctanos</a>
                            </li> 
                            <li class="scroll-to-section right-size"><a href="blogs.php">Blog</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>

            <dialog id="modalContacto" class="contactForm"> 
                <div class="container-fluid">
                    <form id="contact-citad" action="/" method="post">   
                        <div class="d-flex justify-content-between">
                            <h2>Contáctanos</h2>
                            <button type="button" class="btn-close" id="btn-close-contacto" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="nombreForm" placeholder="Nombre">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="emailFrom" placeholder="Correo Electrónico">
                        </div>
                        <div class="mb-3">
                            <select id="motivoForm" class="form-control">
                                <option value="" disabled selected>Selecciona un motivo</option>
                                <option value="opcion1">Opción 1</option>
                                <option value="opcion2">Opción 2</option>
                                <option value="opcion3">Opción 3</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <textarea name="mensaje" class="form-control" id="mensajeForm" cols="30" rows="5" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Autorizo Recibir mensajes y notificaciones por correo</label>
                        </div>
                        <div class="btn-enviar text-end text-right">
                            <button type="submit" class="btn btn-primary">Enviar</button>     
                        </div>
                    </form>
                </div>
            </dialog>


        </div>
    </header>
    <!-- ***** Header Area End ***** -->
