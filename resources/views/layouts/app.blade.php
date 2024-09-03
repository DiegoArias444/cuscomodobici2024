<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('opcion1', 'opcion2') </title>
</head>
<body>
    <header>
        {{-- Mi barra de navegacion --}}
        @include('layouts.navbar')
    </header>
    <main>
        @yield('contenido')
    </main>
    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>