@extends('layout/template')
@section('name','Mi Aprendizaje')
@section('content')


<h2 class="text-blue">Mis Cursos</h2>
<!-- Courses Start -->
<div class="container-xxl py-3">
    <div class="container">
        <div class="row g-4 justify-content-center">
            @foreach ($mycourse as $course)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light2">
                    <div class="position-relative overflow-hidden">
                        @if ($course->imagen)
                        <img class="img-fluid" src="{{$course->imagen}}" alt="" style="width: 100%; height: 200px;">
                        @else
                        <img class="img-fluid" src="img/cursos.jpg" alt="">
                        @endif
                    </div>
                    <div class="p-4 pb-0">
                        <h4 class="mb-0">{{ Str::limit($course->nombre_curso,20)}}</h4>
                        <h6 class="mb-3">Creador del curso: {{ Str::limit($course->nombre,18)}}</h6>
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
                                    <form action="{{ route('detail') }}" method="POST" class="d-inline">
                                        @method('POST')
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $course->id }}">
                                        <button type="submit" style="background-color: transparent; border: none; cursor: pointer;">
                                            <h1>i</h1>
                                        </button>
                                    </form>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Courses End -->

@endsection
