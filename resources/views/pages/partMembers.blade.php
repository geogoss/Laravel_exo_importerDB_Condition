@extends('layouts.app')
@section('content')
    <section class="d-flex justify-content-around align-items-start">
            @include('partials.women')
            @include('partials.men')
            @include('partials.menCdt')
            @include('partials.womenCdt')
            @include('partials.horsCdt')

    </section>
@endsection
