<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Documentación de N5">
    <meta name="author" content="Wagner Henriquez">
    <link rel="shortcut icon" href="{{asset('assets/images/Logo-white.png')}}">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">


    <title>{{ config('app.name', 'DN 5') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- FontAwesome JS-->
    <script defer src={{asset("assets/fontawesome/js/all.min.js")}}></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href={{asset("assets/css/theme.css")}}>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->


        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>

    @stack('modals')

    @livewireScripts


</body>

</html>
