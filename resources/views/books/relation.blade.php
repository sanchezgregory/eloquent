@extends('layout')
@section('content')

    <div class="container">

        <h2>{{ $title }}</h2>

        <hr>

        <table class="table table-bordered table-responsive">
            @foreach($categories as $category)
                <thead>
                <tr>
                    <th colspan="3"> Categoria: {{ $category->name }} -- hay {{ $category->num_books }} libros
                    <br>Libros Publicados: {{ $category->public_books_count }}
                        <br>Libros Borrador: {{ $category->borrador_books_count }}</th>
                </tr>
                <tr>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Status</th>
                </tr>
                </thead>
            <tbody>
                @foreach($category->public_books as $book)
                    <tr>
                        <td> {{ $book->title }}</td>
                        <td> {{ $book->description }}</td>
                        <td> {{ $book->status }}</td>
                    </tr>
                @endforeach
            @endforeach
            </tbody>
        </table>

    </div>

@endsection