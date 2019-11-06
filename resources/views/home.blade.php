@extends('layouts.app')

@section('menu')
    @include('pages.menu')
@endsection


@section('content')
    <link href="{{ asset("assets/site/css/adminIndexStyle.css") }}" rel="stylesheet" />

    <div class="row">
        <div class="col-md-12 text-center">
            <p class="adminIndexText">Главная страница</p>
        </div>
    </div>
@endsection









