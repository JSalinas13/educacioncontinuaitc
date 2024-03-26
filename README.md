<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).






<p>INSERTS DATABASE</p>
<p>
INSERT INTO comentario (comentario, fecha_comento) 
VALUES ('Primer comentario.', '2011-05-25'),
       ('Segundo comentario.', '2014-03-01'),
       ('Tercer comentario.', '2022-03-03'),
       ('Cuarto comentario.', '2023-05-26'),
       ('Quinto comentario.', '2024-03-26');

INSERT INTO contacto (nombre, telefono, correo) VALUES 
('Juan Perez', '1234567890', 'juan@example.com'),
('María García', '0987654321', 'maria@example.com'),
('Pedro Martinez', '5551234567', 'pedro@example.com'),
('Ana López', '7779876543', 'ana@example.com'),
('Laura González', '9998887776', 'laura@example.com');

INSERT INTO privilegio (privilegio) VALUES 
('Administrador'),('Maestro'),('Alumno');

INSERT INTO rol (rol) VALUES 
('Administrador'),
('Usuario'),
('Invitado'),
('Moderador'),
('Editor');

INSERT INTO privilegiorol (privilegio_id, rol_id) VALUES 
(1, 1), -- Asignar el privilegio 1 al rol 1
(1, 2), -- Asignar el privilegio 1 al rol 2
(1, 3), -- Asignar el privilegio 1 al rol 3
(1, 4), -- Asignar el privilegio 2 al rol 1
(1, 5), -- Asignar el privilegio 2 al rol 2
(2, 4), -- Asignar el privilegio 2 al rol 3
(2, 5), -- Asignar el privilegio 3 al rol 1
(3, 2), -- Asignar el privilegio 3 al rol 2
(3, 5) 

INSERT INTO area (area) VALUES 
('Ventas'),
('Marketing'),
('Recursos Humanos'),
('Finanzas'),
('Operaciones');


INSERT INTO estado (estado, pais) VALUES 
('Ciudad de México', 'México'),
('Jalisco', 'México'),
('Nuevo León', 'México'),
('Yucatán', 'México'),
('Quintana Roo', 'México');


INSERT INTO ciudad (ciudad, estado_id) VALUES 
('Ciudad de México', 1), -- Estado ID correspondiente a Ciudad de México
('Guadalajara', 2),      -- Estado ID correspondiente a Jalisco
('Monterrey', 3),        -- Estado ID correspondiente a Nuevo León
('Mérida', 4),            -- Estado ID correspondiente a Yucatán
('Cancún', 5);            -- Estado ID correspondiente a Quintana Roo

INSERT INTO localidad (localidad, ciudad_id) VALUES 
('Condesa', 1),       -- Ciudad ID correspondiente a Ciudad de México
('Chapalita', 2),     -- Ciudad ID correspondiente a Guadalajara
('San Pedro', 3),     -- Ciudad ID correspondiente a Monterrey
('Cholul', 4),        -- Ciudad ID correspondiente a Mérida
('Centro', 5);        -- Ciudad ID correspondiente a Cancún



INSERT INTO tipocurso (tipo_curso, area_id) VALUES 
('Curso de ventas', 1),          -- Area ID correspondiente a Ventas
('Curso de marketing', 2),       -- Area ID correspondiente a Marketing
('Curso de recursos humanos', 3),-- Area ID correspondiente a Recursos Humanos
('Curso de finanzas', 4),        -- Area ID correspondiente a Finanzas
('Curso de operaciones', 5);     -- Area ID correspondiente a Operaciones
INSERT INTO usuario (nombre, apellido_paterno, apellido_materno, correo, curp, imagen, rfc, expreriencia, sexo, discapacidades, alergias, usuario, contrasena, localidad_id, created_at, updated_at) VALUES 
('Juan', 'Pérez', 'García', 'juan@example.com', 'ABCDE123456FGH678', 'imagen1.jpg', 'ABC123456DEF', 'Experiencia en el área de ventas', 'M', 'Ninguna', 'Ninguna', 'juanperez', 'password123', 1, NOW(), NOW()),
('María', 'González', 'López', 'maria@example.com', 'FGHIJ123456KLM789', 'imagen2.jpg', 'DEF123456GHI', 'Experiencia en el área de marketing', 'F', 'Ninguna', 'Ninguna', 'mariagonzalez', 'password456', 2, NOW(), NOW()),
('Pedro', 'Martínez', 'Hernández', 'pedro@example.com', 'JKLMN123456OPQ890', 'imagen3.jpg', 'GHI123456JKL', 'Experiencia en el área de recursos humanos', 'M', 'Ninguna', 'Ninguna', 'pedromartinez', 'password789', 3, NOW(), NOW()),
('Ana', 'López', 'Gómez', 'ana@example.com', 'MNOPQ123456RST012', 'imagen4.jpg', 'JKL123456MNO', 'Experiencia en el área de finanzas', 'F', 'Ninguna', 'Ninguna', 'analopez', 'passwordABC', 4, NOW(), NOW()),
('Carlos', 'Rodríguez', 'Díaz', 'carlos@example.com', 'PQRST123456UVW345', 'imagen5.jpg', 'MNO123456PQR', 'Experiencia en el área de operaciones', 'M', 'Ninguna', 'Ninguna', 'carlosrodriguez', 'passwordXYZ', 5, NOW(), NOW());



INSERT INTO usuariorol (usuario_id, rol_id) VALUES 
(1, 1), -- Asignar el usuario con ID 1 al rol con ID 1
(2, 2), -- Asignar el usuario con ID 2 al rol con ID 2
(3, 3), -- Asignar el usuario con ID 3 al rol con ID 3
(4, 1), -- Asignar el usuario con ID 4 al rol con ID 1
(5, 2); -- Asignar el usuario con ID 5 al rol con ID 2


INSERT INTO contactousuario (usuario_id, contacto_id) VALUES 
(1, 1), -- Asignar el usuario con ID 1 al contacto con ID 1
(2, 2), -- Asignar el usuario con ID 1 al contacto con ID 2
(2, 3), -- Asignar el usuario con ID 2 al contacto con ID 3
(3, 1), -- Asignar el usuario con ID 3 al contacto con ID 1
(4, 2); -- Asignar el usuario con ID 4 al contacto con ID 2


INSERT INTO curso (nombre_curso, objetivo, precio, duracion, imagen, dias, horario, tipo_id, instructor_id, created_at, updated_at) VALUES 
('Introducción a Python', 'Aprender los conceptos básicos de Python', 49.99, '02:30:00', 'python.jpg', 'Lunes y Miércoles', '18:00 - 20:30', 1, 1, NOW(), NOW()),
('Diseño Gráfico Avanzado', 'Aprender técnicas avanzadas de diseño gráfico', 79.99, '03:00:00', 'diseno_grafico.jpg', 'Martes y Jueves', '15:00 - 18:00', 2, 2, NOW(), NOW()),
('Curso de Marketing Digital', 'Aprender estrategias de marketing en línea', 59.99, '02:00:00', 'marketing_digital.jpg', 'Lunes, Miércoles y Viernes', '10:00 - 12:00', 3, 3, NOW(), NOW()),
('Programación Web con JavaScript', 'Desarrollar aplicaciones web utilizando JavaScript', 89.99, '03:30:00', 'javascript.jpg', 'Martes y Jueves', '14:00 - 17:30', 1, 4, NOW(), NOW()),
('Curso de Fotografía Digital', 'Aprender técnicas de fotografía digital', 69.99, '02:30:00', 'fotografia_digital.jpg', 'Sábados', '09:00 - 11:30', 4, 5, NOW(), NOW());


INSERT INTO cursoestudiante (curso_id, estudiante_id, estatus_pago, calificacion, created_at, updated_at) VALUES 
(1, 1, 1, 1, NOW(), NOW()), -- Estudiante con ID 1 asignado al curso con ID 1, pagado y con calificación 9.5
(2, 2, 1, 0.5, NOW(), NOW()), -- Estudiante con ID 2 asignado al curso con ID 2, pagado y con calificación 8.7
(3, 3, 0, 0.2, NOW(), NOW()), -- Estudiante con ID 3 asignado al curso con ID 3, no pagado y sin calificación aún
(1, 4, 1, 0.35, NOW(), NOW()), -- Estudiante con ID 4 asignado al curso con ID 1, pagado y con calificación 7.8
(5, 5, 0, 0.6, NOW(), NOW()); -- Estudiante con ID 5 asignado al curso con ID 5, no pagado y sin calificación aún


INSERT INTO cursocomentario (curso_id, estudiante_id, comentario_id, created_at, updated_at) VALUES 
(1, 1, 1, NOW(), NOW()), -- Comentario 1 del estudiante 1 en el curso 1
(2, 2, 2, NOW(), NOW()), -- Comentario 2 del estudiante 2 en el curso 2
(3, 3, 3, NOW(), NOW()); -- Comentario 3 del estudiante 3 en el curso 3


    
</p>
