@extends('app.app')

@section('content')
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark navbar-custom">
    <div class="container"><a class="navbar-brand" href="#">7TOGKSMP</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarResponsive"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto">
            </ul><span class="text-white">{{ Auth::user()->Gamertag; }}</span><span class="navbar-text"></span><a href="{{route('logout')}}"></a><a class="btn btn-primary ml-auto" href="{{route('logout')}}">Logout</a></div>
    </div>
</nav>
<header class="masthead text-white text-center" style="background:url('assets/img/background.jpg')no-repeat center center;background-size:cover;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">SELAMAT KAMU TELAH MEMECAHKAN CODE!!</h1>
                    @if ($errors->any())
                        <h2 class="mb-5">
                            {{ $errors->first() }}
                        </h2>
                    @endif
                </div>
            </div>
        </div>
    </header>
@endsection