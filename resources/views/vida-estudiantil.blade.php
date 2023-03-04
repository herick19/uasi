<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vida estudiantil</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Pagina vida estudiantil</h1>
    <div class="bg-orange-800">
    
    </div>
    <div class=" bg-blue p-0 d-none d-lg-block">
        <nav class="navbar navbar-expand-lg navbar-dark bg-gradient py-3" id="nav-principal">
            <a class="navbar-brand" href="https://uae.uan.mx"><img src="https://uae.uan.mx/imagenes/escudo-22-1.png"
                    alt="Logo UAN" style="width: 130px; height: auto;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#movil-megamenu"
                aria-controls="movil-megamenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="movil-megamenu">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item megamenu-item"><a href="https://uae.uan.mx" class="nav-link text-black"><i
                                class="mdi mdi-home"></i></a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                            onclick="location.href = 'https://uae.uan.mx/es/somos-uae'">Somos UAE</a>
                        <div class="dropdown-menu">
                            <a href="https://uae.uan.mx/es/identidad-uae" class="dropdown-item">Identidad</a>
                            <a href="https://uae.uan.mx/es/administracion" class="dropdown-item">Administración</a>
                            <a href="https://uae.uan.mx/es/personal-docente" class="dropdown-item">Personal Docente</a>
                            <a href="https://uae.uan.mx/es/personal-administrativo" class="dropdown-item">Personal
                                Administrativo</a>
                            <a href="https://uae.uan.mx/es/organigrama" class="dropdown-item">Organigrama</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                            onclick="location.href = 'https://uae.uan.mx/es/oferta-academica'">Oferta académica</a>
                        <div class="dropdown-menu">
                            <a href="https://uae.uan.mx/es/licenciaturas" class="dropdown-item">Licenciaturas</a>
                            <a href="https://uae.uan.mx/es/posgrados" class="dropdown-item">Posgrados</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                            onclick="location.href = 'https://uae.uan.mx/es/alumnos'">Alumnos</a>
                        <div class="dropdown-menu">
                            <a href="https://uae.uan.mx/es/aspirantes" class="dropdown-item">Aspirantes</a>
                            <a href="https://uae.uan.mx/es/estudiantes" class="dropdown-item">Estudiantes</a>
                            <a href="https://uae.uan.mx/es/egresados" class="dropdown-item">Egresados</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                            onclick="location.href = 'https://uae.uan.mx/es/vinculacion_'">Vinculación</a>
                        <div class="dropdown-menu">
                            <a href="https://uae.uan.mx/es/servicio-social" class="dropdown-item">Servicio Social</a>
                            <a href="https://uae.uan.mx/es/practicas-profesionales" class="dropdown-item">Prácticas
                                Profesionales</a>
                            <a href="https://uae.uan.mx/es/becas-y-movilidad" class="dropdown-item">Becas y Movilidad</a>
                            <a href="http://bolsat.uae.uan.mx/" class="dropdown-item">Bolsa de Trabajo</a>
                            <a href="https://uae.uan.mx/es/educacion-continua" class="dropdown-item">Educación continua</a>
                            <a href="https://uae.uan.mx/es/seguimiento-egresados" class="dropdown-item">Seguimiento de
                                egresados</a>
                            <a href="https://uae.uan.mx/es/cursos-de-idiomas" class="dropdown-item">Cursos de idiomas</a>
                            <a href="https://uae.uan.mx/es/convenios-de-colaboracion-y-cartas-de-intencion"
                                class="dropdown-item">Convenios de colaboración y cartas de intención</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                            onclick="location.href = 'https://uae.uan.mx/es/servicios'">Servicios</a>
                        <div class="dropdown-menu">
                            <a href="https://uae.uan.mx/es/tutori" class="dropdown-item">Tutoria</a>
                            <a href="https://uae.uan.mx/es/servicios-laboratorio" class="dropdown-item">Servicios de
                                laboratorio</a>
                            <a href="https://uae.uan.mx/es/servicios-del-departamento-de-control-escolar"
                                class="dropdown-item">Servicios del Departamento de Control Escolar</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                            onclick="location.href = 'https://uae.uan.mx/es/medios'">Medios</a>
                        <div class="dropdown-menu">
                            <a href="https://uae.uan.mx/es/notas" class="dropdown-item">Notas</a>
                            <a href="https://uae.uan.mx/es/avisos" class="dropdown-item">Avisos</a>
                            <a href="https://uae.uan.mx/es/archivo-2019" class="dropdown-item">Archivo 2019</a>
                            <a href="https://uae.uan.mx/es/archivo-2018" class="dropdown-item">Archivo 2018</a>
                            <a href="https://uae.uan.mx/es/archivo-2017" class="dropdown-item">Archivo 2017</a>
                            <a href="https://uae.uan.mx/es/archivo-2016" class="dropdown-item">Archivo 2016</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="https://uae.uan.mx/es/transparencia" class="nav-link">Transparencia</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://uae.uan.mx/es/contacto" class="nav-link">Contacto</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto center-small">
                    <li class="nav-item">
                        <a href="http://mail.uan.edu.mx" target="_blank" class="nav-link" title="Correo institucional">
                            <i class="mdi mdi-email"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</body>
</html>
