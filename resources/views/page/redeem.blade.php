@extends('app.app')

@section('content')
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark navbar-custom">
    <div class="container"><a class="navbar-brand" href="#">7TOGKSMP</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarResponsive"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto">
            </ul><span class="text-white">{{ Auth::user()->Gamertag; }}</span><span class="navbar-text">&nbsp; &nbsp;</span><a href="{{route('logout')}}"></a><a class="btn btn-primary ml-auto" href="{{route('logout')}}">Logout</a></div>
    </div>
</nav>
<header class="masthead text-white text-center" style="background:url('assets/img/background.jpg')no-repeat center center;background-size:cover;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">REDEEM CODE NOW</h1>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        {{ $errors->first() }}
                    </div>
                    @endif
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form action="{{route('redem')}}" method="GET" >
                        <div class="form-row">
                            <div class="col-12 col-md-9 mb-2 mb-md-0"><input class="form-control form-control-lg" name="code" placeholder="Enter your code..." ></div>
                            <div class="col-12 col-md-3"><button class="btn btn-primary btn-block btn-lg" type="submit" style="background-color: rgb(56,56,57);">Redeem</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
@endsection