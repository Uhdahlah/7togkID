@extends('app.app')

@section('content')
<div class="login-dark">
        <form action="/login" method="post">
            @csrf
            {{ @csrf_field() }}
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
            @endif
            <div class="form-group"><input class="form-control" name="Gamertag" value="{{ old('Gamertag') }}" placeholder="gamertag" required autofocus></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">masuk</button></div>
        </form>
    </div>
    @csrf
@endsection