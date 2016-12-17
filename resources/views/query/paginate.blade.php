@extends('layout')

@section('content')
    <div class="container">
        <h1 class="page-header"> {{ $title }}</h1>
        <h3>{{ $users->total() }} Registros</h3>
        Esta en la pag {{ $users->currentPage() }} de {{ $users->lastPage() }}
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
        {!! $users->render() !!}
    </div>
@endsection