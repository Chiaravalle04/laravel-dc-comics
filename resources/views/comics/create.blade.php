@extends('layouts.app')

@section('content')

    <div class="create">

        <div class="main-container">

            <h1>Vendi il tuo prodotto</h1>

            <div class="container-form">

                <form action="{{ route('comics.store') }}" method="post">
            
                    @csrf
    
                    <label class="d-block" for="title">Inserisci il titolo*</label>
    
                    <input class="d-block" type="text" name="title" id="title" maxlength="255" placeholder="Titolo..." required>
    
                    <label class="d-block" for="description">Inserisci la descrizione</label>
    
                    <textarea class="d-block" name="description" id="description" cols="30" rows="3" placeholder="Descrizione..."></textarea>
    
                    <label class="d-block" for="thumb">Scegli immagine:</label>
    
                    <input type="file" name="thumb" id="thumb">
    
                    <label class="d-block" for="price">Prezzo*</label>
    
                    <input class="d-block" type="number" name="price" id="price" min="0" max="30000" required>
    
                    <label class="d-block" for="series">Serie</label>
    
                    <input class="d-block" type="text" name="series" id="series" placeholder="Serie...">
    
                    <label class="d-block" for="sale_date">Data di vendita*</label>
    
                    <input class="d-block" type="date" name="sale_date" id="sale_date" required>
    
                    <label class="d-block" for="type">Tipo*</label>
    
                    <input class="d-block" type="text" name="type" id="type" placeholder="Tipo..." required>
    
                    <button>Vendi</button>
    
                </form>

            </div>            

        </div>

    </div>

@endsection