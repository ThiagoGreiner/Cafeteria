@extends('layouts.app')

@section('title', 'Home')

@section('content')

    @include('components.carousel')

    @include('components.about')

    @include('components.menu')

    @include('components.location')

@endsection
