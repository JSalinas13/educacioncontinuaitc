@extends('layout/template3')
@section('name', 'Prueba')
@section('content')
    <div class="container">
        <div class="row mb-5">
            <h2 class="mt-3"><i class="fa fa-address-book" aria-hidden="true"></i> Mis cursos</h2>
        </div>
        {{-- Inicia seccion de mis cursos --}}
        @if (count($data['MisCursos']) > 0)
            <div class="row">
                @foreach ($data['MisCursos'] as $curso)
                    <div class="col-sm-4">
                        <div class="card border-info mb-3">
                            <img src="{{ $curso->imagen }}" class="card-img-top" alt="{{ $curso->nombre_curso }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $curso->nombre_curso }}</h5>
                                <p class="card-text">{{ $curso->objetivo }}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fa fa-money" aria-hidden="true"></i>Precio: $
                                    {{ $curso->precio }}</li>
                                <li class="list-group-item"><i class="fa fa-clock-o" aria-hidden="true"></i>Duración:
                                    {{ $curso->duracion }} hrs</li>
                            </ul>
                            <div class="card-footer">
                                <div class="alert alert-success" role="alert">
                                    <i class="fa fa-check-square" aria-hidden="true"></i> <a href="{{route('usuario.mis.cursos.detalle',["id"=>$curso->id])}}"
                                        class="alert-link">Ir a curso</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="row">
                <div class="alert alert-danger" role="alert">
                    <i class="fa fa-bug" aria-hidden="true"></i> No hay cursos favoritos registrados aún.
                </div>
            </div>
        @endif
        {{-- Fin seccion de mis cursos --}}

        {{-- Inicia seccion de mis cursos pendientes --}}
        <div class="row mb-5">
            <h2 class="mt-3"><i class="fa fa-times-circle" aria-hidden="true"></i> Mis cursos pendientes a pagar</h2>
        </div>
        @if (count($data['MisCursosAPagar']) > 0)
            <div class="row">
                @foreach ($data['MisCursosAPagar'] as $curso)
                    <div class="col-sm-4">
                        <div class="card border-info mb-3">
                            <img src="{{ $curso->imagen }}" class="card-img-top" alt="{{ $curso->nombre_curso }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $curso->nombre_curso }}</h5>
                                <p class="card-text">{{ $curso->objetivo }}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fa fa-money" aria-hidden="true"></i>Precio: $
                                    {{ $curso->precio }}</li>
                                <li class="list-group-item"><i class="fa fa-clock-o" aria-hidden="true"></i>Duración:
                                    {{ $curso->duracion }} hrs</li>
                            </ul>
                            <div class="card-footer">
                                <div class="alert alert-danger" role="alert">
                                    <i class="fa fa-bug" aria-hidden="true"></i> <a href="#" class="alert-link">Ver
                                        pago</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="row">
                <div class="alert alert-info" role="alert">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i> No hay cursos por pagar pendientes
                </div>
            </div>
        @endif
        {{-- Fin seccion de mis cursos pendientes --}}

         {{-- Inicia seccion de mis cursos con slider --}}
         @if (count($data['MisCursos']) > 0)
         <div class="row mb-4">
             <div class="col-sm-2">&nbsp; </div>
             <div class="col-sm-8">
                <div class="row mb-5">
                    <h2 class="mt-3"><i class="fa fa-address-book" aria-hidden="true"></i> Mis cursos</h2>
                </div>
                 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                         @foreach ($data['MisCursos'] as $key => $curso)
                             <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}"
                                 class="{{ $key === 0 ? 'active' : '' }}"></li>
                         @endforeach
                     </ol>
                     <div class="carousel-inner">
                         @foreach ($data['MisCursos'] as $key => $curso)
                             <div class="carousel-item{{ $key === 0 ? ' active' : '' }}">
                                 <img class="d-block w-100" src="{{ $curso->imagen }}" alt="{{ $curso->nombre_curso }}">
                                 <div class="carousel-caption d-none d-md-block">
                                     <h5>{{ $curso->nombre_curso }}</h5>
                                     <p>{{ $curso->objetivo }}</p>
                                 </div>
                             </div>
                         @endforeach
                     </div>
                     <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="sr-only">Next</span>
                     </a>
                 </div>
             </div>
             <div class="col-sm-2">&nbsp; </div>


         </div>
     @endif
     {{-- Fin seccion de mis cursos con slider --}}
    </div>
@endsection
