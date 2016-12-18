@extends('layout')
@section('content')

    <div class="container">

        <h2>{{ $title }}</h2>

        <hr>

        <table class="table table-bordered table-responsive">
            @foreach($categories as $category)
                <thead>
                <tr>
                    <th colspan="2"> Categoria: {{ $category->name }} -- hay {{ $category->num_books }} libros</th>
                </tr>
                <tr>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                </tr>
                </thead>
            <tbody>
                @foreach($category->books as $book)
                    <tr>
                        <td> {{ $book->title }}</td>
                        <td> {{ $book->description }}</td>
                    </tr>
                @endforeach
            @endforeach
            </tbody>
        </table>

    </div>

@endsection