@extends('layouts.app')

@section('title', 'Home')

@section('content')

    @include('components.carousel')

    @include('components.about')

    <section class="container mt-5 pt-5">
        <h1>Bem-vindo à Best Coffee</h1>
        <p>
            Transformando sua experiência com café.
        </p>
    </section>

@endsection
