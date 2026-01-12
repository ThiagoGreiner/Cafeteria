@extends('layouts.app')

@section('title', 'Editar Café')

@section('content')
<div class="container">
    <h1 class="mb-4">Editar Café</h1>

    <form
        action="{{ route('admin.coffees.update', $coffee) }}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf
        @method('PUT')

        <!-- Nome -->
        <div class="mb-3">
            <label class="form-label">Nome do café</label>
            <input
                type="text"
                name="name"
                class="form-control"
                value="{{ old('name', $coffee->name) }}"
                required
            >
        </div>

        <!-- Preço -->
        <div class="mb-3">
            <label class="form-label">Preço</label>
            <input
                type="number"
                step="0.01"
                name="price"
                class="form-control"
                value="{{ old('price', $coffee->price) }}"
                required
            >
        </div>

        <!-- Categoria -->
        <div class="mb-3">
            <label class="form-label">Categoria</label>
            <select name="category" class="form-select" required>
                <option value="espresso" {{ $coffee->category === 'espresso' ? 'selected' : '' }}>Expresso</option>
                <option value="cappuccino" {{ $coffee->category === 'cappuccino' ? 'selected' : '' }}>Capuccino</option>
                <option value="iced" {{ $coffee->category === 'iced' ? 'selected' : '' }}>Gelado</option>
                <option value="special" {{ $coffee->category === 'special' ? 'selected' : '' }}>Especial</option>
            </select>
        </div>

        <!-- Imagem atual -->
        <div class="mb-3">
            <label class="form-label">Imagem atual</label><br>
            <img
                src="{{ asset('storage/' . $coffee->image) }}"
                width="150"
                class="rounded border"
            >
        </div>

        <!-- Nova imagem -->
        <div class="mb-3">
            <label class="form-label">Nova imagem (opcional)</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="d-flex gap-2">
            <button class="btn btn-primary">Salvar alterações</button>

            <a href="{{ route('admin.coffees.index') }}" class="btn btn-secondary">
                Cancelar
            </a>
        </div>
    </form>
</div>
@endsection
