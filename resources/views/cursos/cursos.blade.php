@extends('layout/template3')
@section('name', 'Cursos en general')
@section('imagen',
    'https://1.bp.blogspot.com/-oiwDbacwM28/XrXFRXLZqGI/AAAAAAAAEaw/tHTakcMaEU4mbhkQRruDJxF-zp7q_ik0wCLcBGAsYHQ/w1200-h630-p-k-no-nu/progra.jpg')
@section('content')
    <div class="container mt-5 mb-3">
        <div class="row">
            <style>
                .curso-card {
                    transition: transform 0.3s ease, background-color 0.3s ease;
                    background-color: #ffffff;
                }

                .curso-card:hover {
                    transform: scale(1.1);
                    background-color: #6bf9cc;
                }
            </style>
            @forelse ($cursos as $curso)
                <div class="col-md-4">
                    <div class="card p-3 mb-5 curso-card">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center">
                                <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                                <div class="ms-2 c-details">
                                    <h6 class="mb-0">{{ $curso->horario }} </h6>
                                </div>
                            </div>
                            <div class="badge"> <span>
                                    <div class="alert alert-primary" role="alert">{{ $curso->duracion }}</div>
                                </span> </div>
                        </div>
                        <div class="mt-5">
                            <img src="{{ $curso->imagen }}" alt="Imagen del curso" class="img-fluid"
                                style="width: 100%; height: auto; max-height: 200px; object-fit: cover;">
                            <h3 class="heading">{{ $curso->nombre_curso }}<br>
                                <div style="color:blue">Curso Activo</div>
                            </h3>
                            <div class="mt-5">
                                @php
                                    $progreso = rand(0, 100);
                                @endphp
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: {{ $progreso }}%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="mt-3"> <span class="text1">{{ $curso->horario }} <strong><span class="text2"
                                                style="color:green">$ {{ $curso->precio }}</span></strong> </div>
                            </div>
                        </div>
                    </div>
                </div>

            @empty
                <div class="alert alert-info" role="alert">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i> Aún no hay cursos disponibles
                </div>
            @endforelse

        </div>
    </div>

@endsection
