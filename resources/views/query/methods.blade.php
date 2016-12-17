@extends('layout')

@section('content')
    <div class="container">
        <h1 class="page-header"> {{ $title }}</h1>

        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Genero</th>
                    <th>Biografia</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
               @include('partials.list-users')
            </tbody>
            <tr></tr>
        </table>
    </div>
@endsection