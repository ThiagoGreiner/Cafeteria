<!-- Layout da página-->

@extends('layouts.site')

<!-- Definidno titulo -->

@section('title', 'Home')

<!--Centeúdo da página inicial pública -->

@section('content')

    @include('components.carousel')

    @include('components.about')

    @include('components.menu')

    @include('components.location')

@endsection
