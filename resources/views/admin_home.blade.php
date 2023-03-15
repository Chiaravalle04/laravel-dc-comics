@extends('layouts.admin')

@section('content-admin')

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
                            <a href="" class="red"><i class="fa-solid fa-trash-can"></i></a>
                        </td>

                    </tr>

                    @endforeach

                </tbody>

              </table>

        </div>

    </div>

@endsection