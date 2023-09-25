<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Prompy</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head> 
<body class="bg-gradient-to-r main_gradient">
    
    <main class="app">
        <livewire:nav-bar>
        @yield('content')
    </main>

</body>
</html>