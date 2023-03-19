@extends('layouts.app')

@section('content')

    <div class="create">

        <div class="main-container">

            <h1>Vendi il tuo prodotto</h1>

            <div class="container-form">

                <form action="{{ route('comics.store') }}" method="post">
            
                    @csrf
    
                    <label class="d-block @error('title') text-error @enderror" for="title">Inserisci il titolo*</label>
    
                    <input class="d-block @error('title') border-error @enderror" type="text" name="title" id="title" value="{{ old('title') }}" maxlength="255" placeholder="Titolo..." required>
                    
                    @error('title')
                        <div class="error">{{ $message }}</div>
                    @enderror
    
                    <label class="d-block" for="description">Inserisci la descrizione</label>
    
                    <textarea class="d-block" name="description" id="description" cols="30" rows="3" placeholder="Descrizione...">{{ old('description') }}</textarea>
    
                    <label class="d-block" for="thumb">Scegli immagine:</label>
    
                    <input type="file" name="thumb" id="thumb">
    
                    <label class="d-block @error('price') text-error @enderror" for="price">Prezzo*</label>
    
                    <input class="d-block @error('price') border-error @enderror" type="number" name="price" id="price" value="{{ old('price') }}" min="0" max="30000" step="0.01" required>

                    @error('price')
                        <div class="error">{{ $message }}</div>
                    @enderror
    
                    <label class="d-block" for="series">Serie</label>
    
                    <input class="d-block" type="text" name="series" id="series" value="{{ old('series') }}" placeholder="Serie...">
    
                    <label class="d-block @error('sale_date') text-error @enderror" for="sale_date">Data di vendita*</label>
    
                    <input class="d-block @error('sale_date') border-error @enderror" type="date" name="sale_date" id="sale_date" value="{{ old('sale_date') }}" required>

                    @error('sale_date')
                        <div class="error">{{ $message }}</div>
                    @enderror
    
                    <label class="d-block @error('type') text-error @enderror" for="type">Tipo*</label>
    
                    <input class="d-block @error('type') border-error @enderror" type="text" name="type" id="type" value="{{ old('type') }}" placeholder="Tipo..." required>

                    @error('type')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <p>* : campi <b>obbligatori</b> </p>
    
                    <button>Vendi</button>
    
                </form>

            </div>            

        </div>

    </div>

@endsection