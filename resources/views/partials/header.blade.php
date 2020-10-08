<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Piazzolla:wght@300;400;700&display=swap" rel="stylesheet"> 
    <title>La Molisana</title>
</head>
<body>
    
    <header>

        <img src="https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png" alt="logo">

        <nav>
            <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('contatti')}}">Contatti</a></li>
            <li><a href="{{route('prodotti')}}">Prodotti</a></li>
            </ul>
        </nav>

    </header>