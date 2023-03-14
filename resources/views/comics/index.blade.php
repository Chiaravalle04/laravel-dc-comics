@extends('layouts.app')

@section('content')

    <div class="shop">

        <div class="main-container">

            <div class="container-comic d-flex f-wrap">

                @foreach ($comics as $comic)
                    
                <div class="comic">

                    <h2>{{ $comic->title }}</h2>

                    <p>{{ $comic->description }}</p>

                    <span>{{ $comic->type }}</span>

                    <span>$ {{ $comic->price }}</span>

                    <button>Acquista</button>

                </div>

                @endforeach

            </div>

        </div>

    </div>

@endsection