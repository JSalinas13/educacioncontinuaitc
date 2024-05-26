@extends('layout/template')
@section('name','Mi Aprendizaje')
@section('content')
@include('layout/learning/navbar')

<h2 class="text-blue">Mis Cursos</h2>
<!-- Courses Start -->
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
<!-- Courses End -->
<!-- Courses Start -->
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
<!-- Courses End -->
<!-- Courses Start -->
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
<!-- Courses End -->
<!-- Courses Start -->
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
<!-- Courses End -->

@endsection