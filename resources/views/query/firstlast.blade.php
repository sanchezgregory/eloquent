@extends('layout')

@section('content')

    <div class="container">
        <h1>
           {{ $title }}
        </h1>

        <hr>

        <h3>
            <p> {{ $first->id }} </p>
            <p> {{ $first->name }} </p>
        </h3>
        <hr>
        <h3>
            <p> {{ $last->id }} </p>
            <p> {{ $last->name }} </p>
        </h3>
    </div>
@endsection