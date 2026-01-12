@extends('layouts.app')

@section('title', 'Cadastrar Café')

@section('content')
<div class="container mb-5">
    <h1 class="mb-4">Cadastrar Café</h1>

    <form action="{{ route('admin.coffees.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Nome -->
        <div class="mb-3">
            <label class="form-label">Nome do café</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <!-- Preço -->
        <div class="mb-3">
            <label class="form-label">Preço</label>
            <input type="number" step="0.01" name="price" class="form-control" required>
        </div>

        <!-- Categoria -->
        <div class="mb-3">
            <label class="form-label">Categoria</label>
            <select name="category" class="form-select" required>
                <option value="espresso">Expresso</option>
                <option value="cappuccino">Capuccino</option>
                <option value="iced">Gelado</option>
                <option value="special">Especial</option>
            </select>
        </div>

        <!-- Imagem -->
        <div class="mb-3">
            <label class="form-label">Imagem</label>
            <input type="file" name="image" class="form-control" accept="image/*" required>
        </div>

        <button class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
