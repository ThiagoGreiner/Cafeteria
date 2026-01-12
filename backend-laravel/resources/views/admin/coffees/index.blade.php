@extends('layouts.app')

@section('title', 'Cafés cadastrados')

@section('content')
<div class="container">
    <h1>Cafés</h1>

    <a href="{{ route('admin.coffees.create') }}" class="btn btn-primary mb-3">
        Novo Café
    </a>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @forelse ($coffees as $coffee)
            @include('components.coffee-card', ['coffee' => $coffee,'admin' => true])
        @empty
            <p>Nenhum café cadastrado.</p>
        @endforelse
    </div>
</div>
@endsection
