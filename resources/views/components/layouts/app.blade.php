<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireStyles

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title ?? 'Películas' }}</title>
</head>

<body class="antialiased p-5 relative">
    {{ $slot }}
</body>

@livewireScripts
<script>
    Livewire.on('movieAdded', function() {
        Swal.fire({
            title: "¡Listo!",
            text: "Película añadida con Éxito",
            icon: "success"
        })
    });
    Livewire.on('editedMovie', function() {
        Swal.fire({
            title: "¡Película modificada!",
            text: "¿Cambio de último momento?",
            icon: "success"
        })
    });
    Livewire.on('deletedMovie', function() {
        Swal.fire({
            title: "Película eliminada con éxito",
            text: "Parece que no dio la talla",
            icon: "info"
        });
    });

    
</script>

</html>
