<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Boolfolio') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="admin">
        @include('admin.partials.header')


        <div id="wrapper">
            <div id="sidebar">
                <ul class="ulSide">
                    <li class="list-group-item"><a class="text-decoration-none text-black" href="{{ route('admin.dashboard')}}">Dashboard</a></li>
                    <li li class="list-group-item"><a class="text-decoration-none text-black" href="{{ route('admin.project.index')}}">Project</a></li>
                </ul>



            </div>
            <main id="main">
                @yield('content')
            </main>
        </div>


        @include('admin.partials.footer')
    </div>
</body>

</html>