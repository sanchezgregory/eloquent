@extends('layout')

@section('content')

    <div class="container">

        <h1> {{ $title }} </h1>

        <hr>

        <table class="table table-bordered table-responsive">
            @foreach($users as $user)
                <thead>
                <tr>
                    <th colspan="3"> Autor: {{ $user->name }}
                        <br>Cuantos Libros Publicados: {{ $user->books->count() }}
                    </th>
                </tr>
                <tr>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user->books as $book)
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