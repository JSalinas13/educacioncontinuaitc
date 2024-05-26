@extends('layout/template')
@section('name','Mi Aprendizaje')
@section('content')
@include('layout/learning/navbar')
<div class="container-xxl py-3">
    <div class="container">
        <div class="row g-4 justify-content-center" style="background-color: black">
            <!-- Ruta -->
            <div class="row">
                <p style="color:blue">Ruta</p>
            </div>
            <!-- Titulo y subtitulo -->
            <div class="row">
                <h2 class="text-white">Topicos avanzados de temas selectos de Spiderman parte 2</h2>
                <p class="text-white">Curso enfocado para discutir temas sobre el hombre araña y su multiverso incluyendo a Miles Morales y Spidergwen</p>
            </div>
            <!-- Datos adicionales -->
            <div class="row" style="align-content: right">
                <div class="col-2" style="color: #CAA034">
                    <p>4.8 <img src="img/estrella.png" style="width:8%; height:8%;"></img>
                        <img src="img/estrella.png" style="width:8%; height:8%;"></img>
                        <img src="img/estrella.png" style="width:8%; height:8%;"></img>
                        <img src="img/estrella.png" style="width:8%; height:8%;"></img>
                        <img src="img/estrella.png" style="width:8%; height:8%;"></img>
                        <img src="img/estrella.png" style="width:8%; height:8%;"></img></p>
                </div>
                <div class="col-2">
                    <a href="{{ url('testimonial') }}">(666 calificaciones)</a>
                </div>
                <div class="col-5">
                    <p class="text-white">9999 Estudiantes</p>
                </div>
                <div class="col">
                    &nbsp;
                </div>
            </div>
            <!-- Datos de creación -->
            <div class="row" style="align-content: right">
                <div class="col" style="color: #CAA034">
                    <p class="text-white">Creado por:&nbsp;<a href="{{ url('panelist') }}">Mayolo</a></p>
                </div>
                <div class="col">
                    &nbsp;
                </div>
            </div>
            <!-- Datos adicionales -->
            <div class="row" style="align-content: right">
                <div class="col-3">
                    <p class="text-white"><img src="img/reloj-circular.jpg" style="width:8%; height:8%;"></img> Ultima modificación:&nbsp;<? $creac ?></p>
                </div>
                <div class="col-3">
                    <p class="text-white"><img src="img/idiomas.jpg" style="width:8%; height:8%;"></img> idioma<? $idioma ?></p>
                </div>
                <div class="col-2">
                    <p class="text-white"><img src="img/subtitulos.jpg" style="width:10%; height:10%;"></img> subtitle<? $subtitle ?></p>
                </div>
                <div class="col">
                    &nbsp;
                </div>
            </div>
        </div>
    </div>

    <!-- Zona de aprendizaje -->
    <div class="container">
        <div class="row">&nbsp;</div>
        <div class="row" style="text-align: center;"><h1 style="color:aqua;">Lo que aprenderás</h1></div>
        <div class="row">&nbsp;</div>
        <div class="row">
                <div class="col">
                    <img src="img/sombrero-de-graduacion.png" style="width:20%;"></img> Informacion 1
                </div>
                <<div class="col">
                    <img src="img/sombrero-de-graduacion.png" style="width:20%;"></img> Informacion 1
                </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="img/sombrero-de-graduacion.png" style="width:20%;"></img> Informacion 1
            </div>
            <div class="col">
                &nbsp;
            </div>
        </div>
    </div>
    <!-- Zona de incluye -->
    <div class="container">
        <div class="row">&nbsp;</div>
        <div class="row" style="text-align: center;"><h1 style="color:aqua;">Este curso incluye:</h1></div>
        <div class="row">&nbsp;</div>
        <div class="row">
                <div class="col">
                    <img src="img/video.png" style="width:8%;"></img> Informacion 1
                </div>
                <<div class="col">
                    <img src="img/trofeo.png" style="width:8%;"></img> Informacion 1
                </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="img/telefono-movil.png" style="width:8%;"></img> Informacion 1
            </div>
            <div class="col">
                &nbsp;
            </div>
        </div>
    </div>
    <!-- Zona de contenido -->
    <div class="container">
        <div class="row">&nbsp;</div>
        <div class="row" style="text-align: center;"><h1 style="color:aqua;">Contenido de curso</h1></div>
        <div class="row">&nbsp;</div>
        <div class="row">
                <div class="col">
                    <img src="img/sombrero-de-graduacion.png" style="width:20%;"></img> Informacion 1
                </div>
                <<div class="col">
                    <img src="img/sombrero-de-graduacion.png" style="width:20%;"></img> Informacion 1
                </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="img/sombrero-de-graduacion.png" style="width:20%;"></img> Informacion 1
            </div>
            <div class="col">
                &nbsp;
            </div>
        </div>
    </div>
    <!-- Zona de contenido -->
    <div class="container">
        <div class="row">&nbsp;</div>
        <div class="row" style="text-align: center;"><h1 style="color:aqua;">Requisitos</h1></div>
        <div class="row">&nbsp;</div>
        <div class="row">
                <div class="col">
                    <img src="img/sombrero-de-graduacion.png" style="width:20%;"></img> Informacion 1
                </div>
                <<div class="col">
                    <img src="img/sombrero-de-graduacion.png" style="width:20%;"></img> Informacion 1
                </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="img/sombrero-de-graduacion.png" style="width:20%;"></img> Informacion 1
            </div>
            <div class="col">
                &nbsp;
            </div>
        </div>
    </div>
    <div class="row">
        &nbsp;
    </div>
    <!-- Zona de datos adicionales -->
    <div class="container">
        <h3>Instructor</h3>
        <a href="{{ url('panelist') }}">Recursos Networking</a>
        <p>NetRet</p>
        <div class="row">
            <div class="col-3">
                <img src="img/agua.jpg" style=" height:150px;"></img>
                <p>RetBet</p>
            </div>
            <div class="col-2">
                <p>Calificacion</p>
                <p>C664 Reseñas</p>
                <p>2,455 estudiantes</p>
                <p>3 cursos</p>
            </div>
        </div>
        <div class="row">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum temporibus exercitationem a molestiae animi aliquam quidem quam voluptatem sunt, voluptas possimus deleniti, suscipit cum aspernatur eligendi repudiandae optio. Deleniti, numquam?</p>
            <p><b>El fascinante viaje de descubrimiento y redención de un hombre atrapado en las garras de su pasado oscuro: La historia de redención de Spidergwen</b> </p>
            <p><b>Un apasionante relato de amor, traición y venganza en el corazón de la Riviera italiana: Secretos entrelazados en los acantilados de Spidergwen</b> </p>
            <p><b>La increíble odisea de una joven valiente que desafía todos los estereotipos y lucha por su derecho a la educación: La historia inspiradora de Spidergwen</b></p>
            <p><b>Un cautivador thriller psicológico que te mantendrá en vilo hasta la última página: El enigma de la mente rota y los hilos invisibles de Spidergwen</b> </p>
            <p><b>Un épico relato de aventuras y magia en un mundo sumido en la oscuridad: Crónicas de los reinos perdidos: El despertar de Spidergwen</b> </p>
        </div>
    </div>
</div>
@endsection
