@extends('layouts.admin')

@section('content-admin')

    <div class="edit">

        <div class="main-container">

            <a href="{{ route('admin_home') }}" class="home"><i class="fa-solid fa-arrow-left-long"></i> Torna alla Dashboard </a>

            <h1>Modifica il prodotto</h1>

            <h2>"{{ $comic->title }}"</h2>

            <div class="container-form">

                <form action="{{ route('comics.update', $comic->id) }}" method="post">
            
                    @csrf

                    @method('PUT')

                    <label class="d-block" for="title">Modifica il titolo*</label>

                    <input class="d-block" type="text" name="title" id="title" maxlength="255" placeholder="Titolo..." required value="{{ $comic->title }}">

                    <label class="d-block" for="description">Modifica la descrizione</label>

                    <textarea class="d-block" name="description" id="description" cols="30" rows="3" placeholder="Descrizione..." >{{ $comic->description }}</textarea>

                    <label class="d-block" for="thumb">Scegli immagine:</label>

                    <input type="file" name="thumb" id="thumb">

                    <label class="d-block" for="price">Prezzo*</label>

                    <input class="d-block" type="number" name="price" id="price" min="0" max="30000" step="0.01" required value="{{ $comic->price }}">

                    <label class="d-block" for="series">Serie</label>

                    <input class="d-block" type="text" name="series" id="series" placeholder="Serie..." value="{{ $comic->series }}">

                    <label class="d-block" for="sale_date">Modifica data di vendita*</label>

                    <input class="d-block" type="date" name="sale_date" id="sale_date" required value="{{ $comic->sale_date }}">

                    <label class="d-block" for="type">Tipo*</label>

                    <input class="d-block" type="text" name="type" id="type" placeholder="Tipo..." required value="{{ $comic->type }}">

                    <p>* : campi <b>obbligatori</b> </p>

                    <button>Modifica</button>

                </form>

            </div>            

        </div>

    </div>

@endsection