@extends('layout/template3')
@section('name', 'Detalle del curso')
@section('content')
    <div class="container">
        <div class="row mb-5">
            <h2 class="mt-3"><i class="fa fa-folder-open" aria-hidden="true"></i> Detalle de mi curso <strong>{{$curso->nombre_curso}}</strong></h2>
        </div>
        {{-- Inicia seccion de detalle del curso --}}
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="width: 100%; height: 100px;">
                    <img class="card-img-top" src="{{$curso->imagen}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{$curso->nombre_curso}}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fa fa-money" aria-hidden="true"></i>Precio: $
                            {{ $curso->precio }}</li>
                        <li class="list-group-item"><i class="fa fa-clock-o" aria-hidden="true"></i>Duración:
                            {{ $curso->duracion }} hrs</li>
                    </ul>
                    <div class="card-body">
                        <footer class="blockquote-footer"> <p class="card-text">{{$curso->objetivo}}</p> <cite title="Source Title">Curso comprado</cite></footer>
                       
                    </div>
                  </div>
            </div>
        </div>
        {{-- Fin seccion de detalle del curso --}}
    </div>
@endsection
