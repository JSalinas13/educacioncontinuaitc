@extends('layout/template')
@section('name', 'Cursos')
@section('content')

    <!-- Carrussel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/logo.png" class=" d-block mx-auto" style="height: 50%" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="coltcarr">First slide label</h5>
                    <p class="colcarr">Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            @if (count($comentarios) > 0)
                <div class="carousel-item">
                    <img src="{{ $comentarios[0]['usuario']->imagen }}" class="d-block mx-auto"
                        style="height: 500px; width: 50%" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="coltcarr">{{ $comentarios[0]['usuario']->nombre }}</h5>
                        <p class="colcarr">{{ Str::limit($comentarios[0]->comentario, 50) }}</p>
                    </div>
                </div>
            @else
                <div class="carousel-item">
                    <img src="img/team-1.jpg" class="d-block mx-auto" style="height: 50%" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="coltcarr">Second slide label</h5>
                        <p class="colcarr">Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
            @endif

            @if (count($comentarios) > 1)
            <div class="carousel-item">
                <img src="{{ $comentarios[1]['usuario']->imagen }}" class="d-block mx-auto"
                    style="height: 500px; width: 50%" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="coltcarr">{{ $comentarios[1]['usuario']->nombre }}</h5>
                    <p class="colcarr">{{ Str::limit($comentarios[1]->comentario, 50) }}</p>
                </div>
            </div>
        @else
            <div class="carousel-item">
                <img src="img/team-2.jpg" class="d-block mx-auto" style="height: 50%" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="coltcarr">Third slide label</h5>
                    <p class="colcarr">Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        @endif

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Categories Start -->
    @if (count($categorias) > 0)
        <div class="container-xxl py-5 category">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
                    <h1 class="mb-5">Courses Categories</h1>
                </div>
                <div class="row g-3">
                    <div class="col-lg-7 col-md-6">
                        <div class="row g-3">

                            <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                                <a class="position-relative d-block overflow-hidden" href="">
                                    <img class="img-fluid" src="img/cat-1.jpg" alt="">
                                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                        style="margin: 1px;">
                                        <h5 class="m-0">{{ Str::limit($categorias[0]->tipo_curso, 20) }}</h5>
                                        <small class="text-primary">{{ $categorias[0]->total_cursos }} courses</small>
                                    </div>
                                </a>
                            </div>

                            @if (count($categorias) > 1)
                                <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                                    <a class="position-relative d-block overflow-hidden" href="">

                                        <img class="img-fluid" src="img/cat-2.jpg" alt="">
                                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                            style="margin: 1px;">
                                            <h5 class="m-0">{{ Str::limit($categorias[1]->tipo_curso, 20) }}</h5>
                                            <small class="text-primary">{{ $categorias[1]->total_cursos }}
                                                courses</small>
                                        </div>
                                    </a>
                                </div>
                            @endif
                            @if (count($categorias) > 2)
                                <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                                    <a class="position-relative d-block overflow-hidden" href="">
                                        <img class="img-fluid" src="img/cat-3.jpg" alt="">
                                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                            style="margin: 1px;">
                                            <h5 class="m-0">{{ Str::limit($categorias[2]->tipo_curso, 20) }}</h5>
                                            <small class="text-primary">{{ $categorias[0]->total_cursos }}
                                                courses</small>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                    @if (count($categorias) > 3)
                        <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                            <a class="position-relative d-block h-100 overflow-hidden" href="">
                                <img class="img-fluid position-absolute w-100 h-100" src="img/cat-4.jpg" alt=""
                                    style="object-fit: cover;">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                    style="margin:  1px;">
                                    <h5 class="m-0">{{ Str::limit($categorias[3]->tipo_curso, 20) }}</h5>
                                    <small class="text-primary">{{ $categorias[3]->total_cursos }} courses</small>
                                </div>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                <a class="position-relative d-block h-100 overflow-hidden" href="">
                    <img class="img-fluid position-absolute w-100 h-100" src="img/cat-4.jpg" alt=""
                        style="object-fit: cover;">
                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                        <h5 class="m-0">Online Marketing</h5>
                        <small class="text-primary">49 Courses</small>
                    </div>
                </a>
            </div>
        </div>
    @endif
    <!-- Categories End -->

    <!-- Courses Start -->
    @if (count($cursos) > 0)
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                    <h1 class="mb-5">Popular Courses</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                @if ($cursos[0]->imagen)
                                    <img class="img-fluid" src="{{ $cursos[0]->imagen }}"
                                        style="height: 240px; width: 100%" alt="">
                                @else
                                    <img class="img-fluid" src="img/course-1.jpg" alt="">
                                @endif
                                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                        style="border-radius: 30px 0 0 30px;">Read More</a>
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                        style="border-radius: 0 30px 30px 0;">Join Now</a>
                                </div>
                            </div>
                            <div class="text-center p-4 pb-0">
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small>(123)</small>
                                </div>
                                <h5 class="mb-4">{{ Str::limit($cursos[0]->nombre_curso, 20) }}</h5>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-user-tie text-primary me-2"></i>{{ Str::limit($cursos[0]->nombre, 8) }}</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-clock text-primary me-2"></i>{{ $cursos[0]->duracion }} Hrs</small>
                                <small class="flex-fill text-center py-2"><i
                                        class="fa fa-user text-primary me-2"></i>{{ $cursos[0]->total_estudiantes }}
                                    Students</small>
                            </div>
                        </div>
                    </div>
                    @if (count($cursos) > 1)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="course-item bg-light">
                                <div class="position-relative overflow-hidden">
                                    @if ($cursos[1]->imagen)
                                        <img class="img-fluid" src="{{ $cursos[1]->imagen }}"
                                            style="height: 240px; width: 100%" alt="">
                                    @else
                                        <img class="img-fluid" src="img/course-2.jpg" alt="">
                                    @endif
                                    <div
                                        class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                        <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                            style="border-radius: 30px 0 0 30px;">Read More</a>
                                        <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                            style="border-radius: 0 30px 30px 0;">Join Now</a>
                                    </div>
                                </div>
                                <div class="text-center p-4 pb-0">
                                    <div class="mb-3">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small>(123)</small>
                                    </div>
                                    <h5 class="mb-4">{{ Str::limit($cursos[1]->nombre_curso, 20) }}</h5>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-user-tie text-primary me-2"></i>{{ Str::limit($cursos[1]->nombre, 8) }}</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-clock text-primary me-2"></i>{{ $cursos[1]->duracion }}
                                        Hrs</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-user text-primary me-2"></i>{{ $cursos[1]->total_estudiantes }}
                                        Students</small>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if (count($cursos) > 2)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="course-item bg-light">
                                <div class="position-relative overflow-hidden">
                                    @if ($cursos[3]->imagen)
                                        <img class="img-fluid" src="{{ $cursos[3]->imagen }}"
                                            style="height: 240px; width: 100%" alt="">
                                    @else
                                        <img class="img-fluid" src="img/course-3.jpg" alt="">
                                    @endif

                                    <div
                                        class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                        <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                            style="border-radius: 30px 0 0 30px;">Read More</a>
                                        <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                            style="border-radius: 0 30px 30px 0;">Join Now</a>
                                    </div>
                                </div>
                                <div class="text-center p-4 pb-0">
                                    <div class="mb-3">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small>(123)</small>
                                    </div>
                                    <h5 class="mb-4">{{ Str::limit($cursos[2]->nombre_curso, 20) }}</h5>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-user-tie text-primary me-2"></i>{{ Str::limit($cursos[2]->nombre, 8) }}</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-clock text-primary me-2"></i>{{ $cursos[2]->duracion }}
                                        Hrs</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-user text-primary me-2"></i>{{ $cursos[2]->total_estudiantes }}
                                        Students</small>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endif
    <!-- Courses End -->

    <!-- Testimonial Start -->
    @if (count($comentarios) > 0)
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                    <h1 class="mb-5">Our Students Say!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel position-relative">
                    @foreach ($comentarios as $comentario)
                        <div class="testimonial-item text-center">
                            <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ $comentario->usuario->imagen }}"
                                style="width: 80px; height: 80px;" alt="Imagen de usuario">
                            <h5 class="mb-0">{{ $comentario->usuario->nombre }}</h5>
                            <p>Estudiante</p>
                            <div class="testimonial-text bg-light text-center p-4">
                                <p class="mb-0">{{ Str::limit($comentario->comentario, 150) }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                    <h1 class="mb-5">Our Students Say!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel position-relative">
                    <div class="testimonial-item text-center">
                        <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg"
                            style="width: 80px; height: 80px;">
                        <h5 class="mb-0">Client Name</h5>
                        <p>Profession</p>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                                eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg"
                            style="width: 80px; height: 80px;">
                        <h5 class="mb-0">Client Name</h5>
                        <p>Profession</p>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                                eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg"
                            style="width: 80px; height: 80px;">
                        <h5 class="mb-0">Client Name</h5>
                        <p>Profession</p>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                                eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg"
                            style="width: 80px; height: 80px;">
                        <h5 class="mb-0">Client Name</h5>
                        <p>Profession</p>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                                eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- Testimonial End -->
@endsection
