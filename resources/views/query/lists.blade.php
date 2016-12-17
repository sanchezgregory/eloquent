@extends('layout')

@section('content')

    <div class="container">

        <h1>{{ $title }}</h1>

        {!! Form::open() !!}
        <div class="form-group">
            <!--{!! Form::select('users', $users, null, ['class' => 'form-control']) !!} -->
            <select class="form-control">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->id." - ".$user->name }}</option>
                @endforeach
            </select>
        </div>
        {!! Form::close() !!}

    </div>

@endsection