<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Piazzolla:wght@300;400;700&display=swap" rel="stylesheet"> 
    <title>@yield('titolo')</title>
</head>
<body>

    @include ('../partials/header')

    <main>
        @yield('content')
    </main>

    @include ('../partials/footer')
    
