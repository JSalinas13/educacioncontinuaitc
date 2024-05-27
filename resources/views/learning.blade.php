@extends('layout/template')
@section('name','Mi Aprendizaje')
@section('content')
@include('layout/learning/navbar')

<!-- Mis Cursos Start(carrusel de 3 tarjetas cada uno)-->
<h2 class="text-blue">Mis Cursos</h2>
<div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container-xxl py-3">
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container-xxl py-3">
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4 col-md-6 fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container-xxl py-3">
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4 col-md-6 fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev carousel-control-prev2" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev" style="width: 5%;">
        <span class="carousel-control-prev-icon carousel-control-prev-icon-color" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next carousel-control-next2" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next" style="width: 5%;">
        <span class="carousel-control-next-icon carousel-control-next-icon-color" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Mis Cursos End-->

<!-- Favoritos Start(carrusel de 3 tarjetas cada uno)-->
<h2 class="text-blue">Favoritos</h2>
<div id="carouselExampleControlsNoTouching2" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container-xxl py-3">
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container-xxl py-3">
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4 col-md-6 fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container-xxl py-3">
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4 col-md-6 fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev carousel-control-prev2" type="button" data-bs-target="#carouselExampleControlsNoTouching2" data-bs-slide="prev" style="width: 5%;">
        <span class="carousel-control-prev-icon carousel-control-prev-icon-color" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next carousel-control-next2" type="button" data-bs-target="#carouselExampleControlsNoTouching2" data-bs-slide="next" style="width: 5%;">
        <span class="carousel-control-next-icon carousel-control-next-icon-color" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Favoritos End-->

<!-- Cursando Start(carrusel de 3 tarjetas cada uno)-->
<h2 class="text-blue">Cursando</h2>
<div id="carouselExampleControlsNoTouching3" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container-xxl py-3">
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container-xxl py-3">
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4 col-md-6 fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container-xxl py-3">
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4 col-md-6 fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev carousel-control-prev2" type="button" data-bs-target="#carouselExampleControlsNoTouching3" data-bs-slide="prev" style="width: 5%;">
        <span class="carousel-control-prev-icon carousel-control-prev-icon-color" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next carousel-control-next2" type="button" data-bs-target="#carouselExampleControlsNoTouching3" data-bs-slide="next" style="width: 5%;">
        <span class="carousel-control-next-icon carousel-control-next-icon-color" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Cursando End-->

<!-- Lista de deseos Start(carrusel de 3 tarjetas cada uno)-->
<h2 class="text-blue">Lista de deseos</h2>
<div id="carouselExampleControlsNoTouching4" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container-xxl py-3">
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container-xxl py-3">
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4 col-md-6 fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container-xxl py-3">
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4 col-md-6 fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light2">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/cursos.jpg" alt="">
                                </div>
                                <div class="p-4 pb-0">
                                    <h4 class="mb-0">Titulo de curso ejemplo</h4>
                                    <h6 class="mb-3">Creador del curso</h6>
                                    <h6 class="mb-0">Calificacion</h6>
                                    <div class="mb-2">
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                        <h4 class="fa fa-star text-yellow"></h4>
                                    </div>
                                    <div class="d-flex align-items-center"> <!-- Utiliza Flexbox para alinear en línea -->
                                        <h6 class="me-3 mb-0">Progreso: </h6>
                                        <h2 class="me-3 mb-0">25%</h2>
                                        <div class="me-3 mb-0 circle margenL70">
                                            <!-- Icono "i" -->
                                            <i class="icon">
                                                <a href="{{ url('/detailCourses') }}">
                                                    <h1>i</h1>
                                                </a>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev carousel-control-prev2" type="button" data-bs-target="#carouselExampleControlsNoTouching4" data-bs-slide="prev" style="width: 5%;">
        <span class="carousel-control-prev-icon carousel-control-prev-icon-color" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next carousel-control-next2" type="button" data-bs-target="#carouselExampleControlsNoTouching4" data-bs-slide="next" style="width: 5%;">
        <span class="carousel-control-next-icon carousel-control-next-icon-color" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Lista de deseos End-->
@endsection