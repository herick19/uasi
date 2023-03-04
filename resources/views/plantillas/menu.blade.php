<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos-uasi.css">
    @vite('resources/css/app.css')
    <title>@yield('titulo') </title>
</head>

<body>
    <header>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex dicta eos repellendus quaerat ipsum
        numquam voluptates facilis cupiditate corporis, ullam minus nostrum culpa aliquid recusandae magni
        neque soluta repudiandae fugit?
    </header>
    <main class="bg-gradient-to-r from-uaninicio via-uancentro to-uanfinal">
        @yield('contenido')
    </main>
    <footer>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit fugiat adipisci inventore nobis deserunt
        minus quo quaerat vel quasi rerum esse repellendus magnam porro dolores quibusdam, blanditiis ducimus harum
        quae?
    </footer>
</body>

</html>