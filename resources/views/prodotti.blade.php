@php
    
$datas = config('prodotti');


$corte = [];
$lunghe = [];
$cortissime = [];

foreach ($datas as $data) {
    if ($data['tipo'] == 'corta') {
        $corte[] = $data;
    } elseif($data['tipo'] == 'cortissima') {
        $cortissime[] = $data;
    } elseif($data['tipo'] == 'lunga') {
        $lunghe[] = $data;
    }
}

@endphp

@extends('layouts/app')

@section('titolo','Prodotti')

@section('content')

    <div class="prodotti">
        <div class="cards">
                <h2>Le Lunghe</h2>
                @foreach ($lunghe as $data)
                    <div class="card">
                        <h3>{{$data['titolo']}}</h3>
                        <img src="{{$data['src']}}" alt="{{$data['titolo']}}">
                        <div class="info-card">
                            <p>{{$data['descrizione']}}</p>
                        </div>
                    </div>
                @endforeach
                <h2>Le Corte</h2>
                @foreach ($corte as $data)
                    <div class="card">
                        <h3>{{$data['titolo']}}</h3>
                        <img src="{{$data['src']}}" alt="{{$data['titolo']}}">
                        <div class="info-card">
                            <p>{{$data['descrizione']}}</p>
                        </div>
                    </div>
                @endforeach
                <h2>Le Cortissime</h2>
                @foreach ($cortissime as $data)
                    <div class="card">
                        <h3>{{$data['titolo']}}</h3>
                        <img src="{{$data['src']}}" alt="{{$data['titolo']}}">
                        <div class="info-card">
                            <p>{{$data['descrizione']}}</p>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>

@endsection


    
   
