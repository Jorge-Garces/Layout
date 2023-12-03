<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

    <!-- Livewire -->
    @livewireStyles

    <!-- Estilos del spinner -->
    <style>
        .overlay {
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: 1000;
            top: 0px;
            left: 0px;
            opacity: 0.5;
            background-color: #474747;
        }
    </style>

    <!-- Bootstrap 5 (CSS y JS) -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">
        @include('includes.navbar')

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    {{-- <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">Modal</button> --}}

    @include('includes.modal', ['modal_mode' => 'basic', 'modal_id' => 'myModal'])

    @include('includes.messages')

    @include('includes.spinner')

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    {{-- Livewire --}}
    @livewireScripts

    {{-- Script global --}}
    <script>
        buttons = document.querySelectorAll('.loading');

        buttons.forEach(function(button) {
            button.addEventListener('click', function() {
                document.getElementById('spinner-overlay').style.display = 'flex';
            });
        });
    </script>

    {{-- Script custom --}}
    @yield('script')
</body>

</html>
