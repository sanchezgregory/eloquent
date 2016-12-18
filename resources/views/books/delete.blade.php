@extends('layout')

@section('content')

    <div class="container">
        <h2> {{ $title }} </h2>

        <p><h4>Actualmente hay {{ $books->count() }} libros</h4></p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                </tr>
            </thead>
            <tbody>
            {!! Form::open(['url' => ['destroy'], 'method' => 'DELETE']) !!}
                @foreach($books as $book)
                    <tr>
                        <td>
                            {{ $book->id }}-<input type="checkbox" name="ids[]" value="{{ $book->id }}">
                        </td>
                        <td> {{ $book->title }} </td>
                        <td> {{ $book->description }} </td>
                    </tr>
                @endforeach

                <button class="btn btn-primary btn-block" type="submit">Aceptar</button>

            {!! Form::close() !!}
            </tbody>
        </table>
    </div>

@endsection