@extends('layout/template')
@section('name','Mi perfil')
@section('content')
    <!-- Contact Start -->
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <style>
        /* Estilos para el contenedor */
        .containermg {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #698b58;
            position: relative;
        }

        .contenedor-mostrar-datos {
            flex-grow: 1; /* Esto hará que este contenedor ocupe todo el espacio disponible */
        }

        .profile-picture {
            width: 200px;
            height: 200px;
            background-color: #ccc;
            border-radius: 50%;
            position: relative; /* Añadimos posición relativa para que el pseudo-elemento pueda ser posicionado correctamente */
        }

        .profile-picture::after {
            content: ""; /* Agregamos contenido al pseudo-elemento */
            position: absolute; /* Posicionamos el pseudo-elemento de forma absoluta */
            top: 0;
            right: -80px; /* Posicionamos el pseudo-elemento justo al lado derecho de la foto de perfil */
            height: 100%; /* El mismo alto que la foto de perfil */
            width: 2px; /* Ancho de la línea vertical */
            background-color: white; /* Color blanco para la línea */
        }

        .menumg {
            flex-basis: 30%; /* Ancho de la primera columna */
        }

        .editper {
            margin-left: auto;
            margin-top: 10px;
            position: absolute;
            top: 0;
            right: 0;
        }

        .datos-usuario {
            text-align: left; /* Alinea el texto a la izquierda */
            margin-left: 200px; /* Agrega un pequeño margen a la izquierda */
        }

        .datos-usuario h3 {
            color: white; /* Color blanco para el nombre */
        }

        .datos-usuario h4 {
            color: #38534a; /* Color azul para el nombre de usuario */
        }

        .label {
            font-weight: bold;
        }

        .principal-info {
            display: flex;
            justify-content: space-between;
            align-items: stretch; /* Estira ambos elementos para que tengan la misma altura vertical */
            background-color: #dddddd;
            padding: 20px;
        }

        .columna-izquierda {
            flex-basis: 38%; /* Ancho de la primera columna */
        }

        .columna-derecha {
            flex-basis: 60%; /* Ancho de la segunda columna */
        }

        .principal-info > .columna-izquierda {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px; /* Bordes redondos */
        }

        .principal-info > .columna-derecha {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px; /* Bordes redondos */
        }

        .principal-info ul {
            padding: 0;
            list-style: none;
        }

        .principal-info li {
            margin-bottom: 10px; /* Espacio entre elementos de la lista */
        }

        .principal-info a {
            text-decoration: none; /* Quita la subrayado predeterminado del enlace */
            color: #000; /* Color del texto */
            padding-bottom: 5px; /* Espacio entre el texto y la línea */
            display: inline-block; /* Para que el borde se aplique correctamente */
        }

        .principal-info a.inicio {
            border-bottom: 2px solid black; /* Línea negra fija horizontal debajo del enlace "Inicio" */
            padding-bottom: 6px; /* Espacio entre el texto y la línea */
        }

        .principal-info a:hover {
            color: #38534a; /* Cambia el color del texto al pasar el ratón sobre el enlace */
        }

        .info-personal p {
            color: black; /* Color del texto */
        }

        .info-contact p {
            color: black; /* Color del texto */
        }

        .info-personal strong,
        .info-contact strong {
            color:#698b58; /* Color verde para los textos en negrita */
            font-weight: bold; /* Texto en negrita */
        }
        .columna-derecha h4 {
            color: #344855; /* Color azul para el texto */
        }

        .perfil-texto {
            color: black; /* Color del texto */
            margin-bottom: 10px; /* Espacio entre el texto y la línea */
            border-bottom: 2px solid black; /* Línea negra fija horizontal debajo del texto "Perfil" */
            padding-bottom: 6px; /* Espacio entre el texto y la línea */
        }

        .perfil-linea {
            border-top: 2px solid black; /* Línea negra fija horizontal */
            margin-bottom: 20px; /* Espacio entre la línea y los contenedores */
            border-bottom: 2px solid black; /* Línea negra fija horizontal debajo del texto "Perfil" */
            padding-bottom: 6px; /* Espacio entre el texto y la línea */
        }
    </style>
</head>
<body>
<div class="containermg">
    <div class="profile-picture"></div>
    <div class="contenedor-mostrar-datos">
        <div class="datos-usuario">
            <h3>Juan Pérez López</h3>
            <h4>@juanperez</h4>
        </div>
    </div>
    <div class="editper">
        <a href="#" class="link">Editar Perfil</a>
    </div>
</div>
<!-- Contenedor principal-info fuera de containermg -->
<div class="principal-info">
    <div class="columna-izquierda">
    <ul>
            <li><a href="#" class="inicio">Inicio</a></li>
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Mis cursos</a></li>
        </ul>
    </div>
    <div class="columna-derecha">
        <!-- Texto "Perfil" con línea negra -->
<div class="perfil-texto">
    Perfil
</div>
<h4 style="margin-bottom: 10px;">Informacion Personal</h4>
    <div class="info-personal" style="border: 5px solid white; margin-bottom: 20px;">
            
            <div>
                <p><strong>Nombre completo:</strong> Juan Pérez López</p>
                <p><strong>Apellido paterno:</strong> Pérez</p>
                <p><strong>Apellido materno:</strong> López</p>
                <p><strong>Correo electrónico:</strong> juan.perez@correo.com</p>
                <p><strong>Teléfono:</strong> 55 5555 5555</p>
                <p><strong>CURP:</strong> PPLZ890102MEXLSN01</p>
                <p><strong>RFC:</strong> PPLZ890102LSN01</p>
                <p><strong>Sexo:</strong> Hombre</p>
                <p><strong>Localidad:</strong> Celaya, Guanajuato</p>
                <p><strong>Discapacidades:</strong> Ninguna</p>
                <p><strong>Alergias:</strong> Ninguna</p>
                <p><strong>Experiencia:</strong> 5 años de experiencia en desarrollo web.</p>
            </div>
        </div>
        <h4 style="margin-bottom: 10px;">Informacion de contacto</h4>
        <div class="info-contact" style="border: 5px solid white;">
            
            <div>
                <p><strong>Nombre:</strong> María García González</p>
                <p><strong>Email:</strong> maria.garcia@correo.com</p>
                <p><strong>Teléfono:</strong> 55 5555 5556</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>

    @endsection
