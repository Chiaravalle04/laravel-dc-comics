@extends('layouts.app')

@section('content')

    <div class="show">

        <div class="main-container">

            <a href="{{ route('comics.index') }}"><i class="fa-solid fa-arrow-left-long"></i> Torna allo shop</a>

            <h1>{{ $comic->title }}</h1>

            <p>{{ $comic->description }}</p>

            <p><b>Tipo:</b> <span>{{ $comic->type }}</span></p>

            <p><b>Serie:</b> {{ $comic->series }}</p>

            <p><b>Data di vendita:</b> {{ $comic->sale_date }}</p>

            <p><b>Prezzo:</b> $ {{ $comic->price }}</p>

            <button>Acquista</button>

        </div>

    </div>

@endsection