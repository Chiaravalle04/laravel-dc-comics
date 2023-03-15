@extends('layouts.app')

@section('content')

    <div class="shop">

        <div class="main-container">

            <div class="container-comic d-flex f-wrap">

                @foreach ($comics as $comic)
                    
                <div class="comic">

                    <h2>{{ $comic->title }}</h2>

                    <span>{{ $comic->type }}</span>

                    <span>$ {{ $comic->price }}</span>

                    <a href="{{ route('comics.show', $comic->id) }}">Vedi maggiori dettagli <i class="fa-solid fa-arrow-right-long"></i></a>

                    <button>Acquista</button>

                </div>

                @endforeach

            </div>

        </div>

    </div>

@endsection