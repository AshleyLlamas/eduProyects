@extends('layouts.app')

@section('content')

<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/home.css" rel="stylesheet">

<div>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-dark" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!--:::::::Portada-001:::::::-->
    <div class="wrp">
        <div class="portada"></div>
        <div class="contenido">
            <div class="info">
                <img class="m-3" src="img/logo-blanco.svg">
            </div>
        </div>
        <div class="curveado">
            <img src="img/img2.svg">
        </div>
    </div>
<!--:::::::FIN-Portada-001:::::::-->


    <!-- Facts Start -->
    <div class="container-xxl py-3">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="fact-item rounded text-center h-100 p-5">
                        <i class="fa-solid fa-chalkboard-user fa-4x text-info mb-4"></i>
                        <p class="mb-2">Cursos presenciales</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">10</h1>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="fact-item rounded text-center h-100 p-5">
                        <i class="fa-solid fa-computer fa-4x text-info mb-4"></i>
                        <p class="mb-2">Clases en linea</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">10</h1>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="fact-item rounded text-center h-100 p-5">
                        <i class="fa fa-users fa-4x text-info mb-4"></i>
                        <p class="mb-2">Alumnos</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">30</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- About Start -->
    <div class="container-xxl pt-6 pb-3">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row img-twice position-relative h-100">
                        <div class="col-6">
                            <img class="img-fluid rounded" src="img/about-1.jpg" alt="">
                        </div>
                        <div class="col-6 align-self-end">
                            <img class="img-fluid rounded" src="img/about-2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <p class="text-info text-uppercase mb-2">Sobre nosotros</p>
                        <h1 class="display-6 mb-4">¡Asegura tu carrera y el trabajo de tus sueños!</h1>
                        <p>Somos una empresa dedicada a impartir cursos para tu desarrollo profesional y personal, para que siempre estés preparado.</p>
                        <div class="row g-2 mb-4">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-info me-2"></i>Buenos maestros
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-info me-2"></i>Excelentes herramientas de aprendizaje
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-info me-2"></i>Disponibilidad
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-info me-2"></i>Clases grabadas
                            </div>
                        </div>
                        <iframe width="100%" class="rounded" src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FEduProjectsMexico%2Fvideos%2F570244804850912%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                        <div class="text-center">
                            <a class="btn btn-secondary rounded-pill my-3 py-3 px-5" href="">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Product Start -->
    <div class="container-xxl my-6 py-6 pt-0">
        <div class="container">
            <div class="bg-info text-light rounded p-5 my-6 mt-0 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-4 text-light mb-0">¡Reserva tu lugar!</h1>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <div class="d-inline-flex align-items-center text-start">
                            <i class="fa fa-phone-alt fa-4x flex-shrink-0"></i>
                            <div class="ms-4">
                                <p class="fs-5 fw-bold mb-0">Llamanos</p>
                                <p class="fs-1 fw-bold mb-0"><a href="tel:6868426507">(686) 842 6507</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-info text-uppercase mb-2">Nuestros cursos</p>
                <h1 class="display-6 mb-4">Explora todos los cursos que ofrecemos para tu crecimiento</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-info rounded-pill px-3 mb-3">$1,050 MXN</div>
                            <h3 class="mb-3">Curso para el examen de admisión</h3>
                            <span>$700 inscripción - $350 semanales</span>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/product-1.jpg" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-info"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-info rounded-pill pt-1 px-3 mb-3">$400 MXN</div>
                            <h3 class="mb-3">Curso de excel</h3>
                            <span>$400 semanales</span>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/product-2.jpg" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-info"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-info rounded-pill pt-1 px-3 mb-3">$250 MNX</div>
                            <h3 class="mb-3">Asesoria educativa</h3>
                            <span>$250 semanales</span>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/product-3.jpg" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-info"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->

      <!-- Service Start -->
      <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="text-primary text-uppercase mb-2">Servicios</p>
                    <h1 class="display-6 mb-4">Nuestros servicios</h1>
                    <p class="mb-5">Contamos con una amplia variedad de servicios empresariales, instituciones educativas y desarrollo de habilidades personales.</p>
                    <div class="row gy-5 gx-4">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-info rounded-circle me-3">
                                    <i class="fa-solid fa-graduation-cap text-white"></i>
                                </div>
                                <h5 class="mb-0">Admisión a Instituciones Educativas</h5>
                            </div>
                            <span>Cursos de preparación para el examen de admisión a la universidad , y asesorias de actualizacion universitaria.</span>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-info rounded-circle me-3">
                                    <i class="fa-solid fa-chart-column text-white"></i>
                                </div>
                                <h5 class="mb-0">Cursos de Capacitación Empresarial</h5>
                            </div>
                            <span>Cursos con el Objetivo de profesionalizar las aresas administrativas y operativas en la empresa. Incluyendo una gran variedad de cursos y talleres.</span>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-info rounded-circle me-3">
                                    <i class="fa-solid fa-certificate text-white"></i>
                                </div>
                                <h5 class="mb-0">Certificaciones en Habilidades Digitales</h5>
                            </div>
                            <span>Debido a las necesidades despues de esta pandemia, creamos un curso de actualización para docentes. Donde la tecnología e inovacción deben esta al día en la educación en méxico.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row img-twice position-relative h-100">
                        <div class="col-6">
                            <img class="img-fluid rounded" src="img/service-1.jpg" alt="">
                        </div>
                        <div class="col-6 align-self-end">
                            <img class="img-fluid rounded" src="img/service-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Team Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-info text-uppercase mb-2">Nuestro personal</p>
                <h1 class="display-6 mb-4">Docentes & Consultores</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <img class="img-fluid" src="img/team-1.jpg" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>Angelica López Martinez</h5>
                                <span>Licenciada en derecho</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>Gabriel Zarate Hernandez</h5>
                                <span>Profesor de ingeniería</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>Susana Angelica Dominguez Sazueta</h5>
                                <span>Diseñadora gráfica</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-xxl my-6 py-6 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-info text-uppercase mb-2">Comentarios</p>
                <h1 class="display-6 mb-4">Comentarios sobre nuestros cursos</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-white rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-1.jpg" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur porro rem odio iure nihil ullam repellat debitis molestiae molestias laborum voluptatem ipsum nisi placeat sit quibusdam, aut rerum facere officiis!</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-white rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-2.jpg" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur porro rem odio iure nihil ullam repellat debitis molestiae molestias laborum voluptatem ipsum nisi placeat sit quibusdam, aut rerum facere officiis!</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-white rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-3.jpg" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur porro rem odio iure nihil ullam repellat debitis molestiae molestias laborum voluptatem ipsum nisi placeat sit quibusdam, aut rerum facere officiis!</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-white rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-4.jpg" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur porro rem odio iure nihil ullam repellat debitis molestiae molestias laborum voluptatem ipsum nisi placeat sit quibusdam, aut rerum facere officiis!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Instalación</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Av. Benito Juárez 4325 Mexicali, BC.</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+52 686 842 6507</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+52 686 397 3538</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>inscripciones@eduprojects.mx</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a class="btn btn-link" href="">Sobre nosotros</a>
                    <a class="btn btn-link" href="">Contactanos</a>
                    <a class="btn btn-link" href="">Otros servicios</a>
                    <a class="btn btn-link" href="">Terminos y condiciones</a>
                    <a class="btn btn-link" href="">Soporte</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a class="btn btn-link" href="">Sobre nosotros</a>
                    <a class="btn btn-link" href="">Contactanos</a>
                    <a class="btn btn-link" href="">Otros servicios</a>
                    <a class="btn btn-link" href="">Terminos y condiciones</a>
                    <a class="btn btn-link" href="">Soporte</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Photo Gallery</h4>
                    <div class="row g-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/product-1.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/product-2.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/product-3.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/product-2.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/product-3.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="img/product-1.jpg" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa-solid fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/home/main.js"></script>
     
</div>

@endsection
