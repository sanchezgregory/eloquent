@extends('layout')

@section('content')

    <div class="container">

        <h1> {{ $title }} </h1>

        <hr>

        <table class="table table-bordered table-responsive">
            @foreach($books as $book)
                <thead>
                <tr>
                    <th colspan="3"> id [{{ $book->id }}]  -- Libro: {{ $book->title }}
                        <br>Cuantos Autores para este libro: {{ $book->users->count() }}
                    </th>
                </tr>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Genero</th>
                </tr>
                </thead>
                <tbody>
                @foreach($book->users as $user)
                    <tr>
                        <td> {{ $user->name }}</td>
                        <td> {{ $user->email }}</td>
                        <td> {{ $user->gender }}</td>
                    </tr>
                @endforeach
                @endforeach
                </tbody>
        </table>

    </div>

@endsection