@extends('layouts.admin')

@section('content-admin')

    <div id="app">

        <div class="admin-home-container">

            <div class="main-container">

                <h1>Dashboard Prodotti</h1>

                <a href="/" class="home"><i class="fa-solid fa-arrow-left-long"></i> Torna al sito web </a>

                <table>

                    <thead>

                        <tr>

                            <th>ID</th>
                            <th>Titolo</th>
                            <th>Prezzo</th>
                            <th>Data di vendita</th>
                            <th>Tipo</th>
                            <th>Azioni</th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach ($comics as $comic)

                        <tr>

                            <td><b>{{ $comic->id }}</b></td>
                            <td>{{ $comic->title }}</td>
                            <td>$ {{ $comic->price }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>
                                <a href="{{ route('comics.show', $comic->id) }}" class="blue"><i class="fa-solid fa-eye"></i></a>
                                <a href="{{ route('comics.edit', $comic->id) }}" class="green"><i class="fa-solid fa-pencil"></i></a>
                                <button v-on:click="openModal({{ $comic->id }})" href="" class="red"><i class="fa-solid fa-trash-can"></i></button>
                            </td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

            <div class="container-delete-product" :class="{ 'd-none' : !verify }" v-on:click="closeModal()">

            </div>

            <div class="delete-product" :class="{ 'd-none' : !verify }">

                <h2>Sei sicuro di voler eliminare il prodotto @{{ id }}?</h2>

                <button v-on:click="closeModal()" class="back">INDIETRO</button>

                <form action="{{ route('comics.destroy', $comic->id) }}" method="post">

                    @csrf

                    @method('DELETE')

                    <button class="delete">ELIMINA</button>

                </form>

            </div>

        </div>

    </div>

@endsection