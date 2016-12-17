@extends('layout')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <div class="container">
                <h1> Curso Eloquent</h1>
                <p>{{ $title }}</p>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th> Nombre </th>
                    <th> Email</th>
                    <th>Gender</th>
                    <th>Biography</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @include('partials.list-users')
            </tbody>
        </table>
    </div>

@endsection
