@extends('layouts.app')

@section('title', 'Admin')

@section('content')
<div class="container">
    <h1>Cafés</h1>

    <a href="{{ route('admin.coffees.create') }}" class="btn btn-primary mb-3">
        Novo Café
    </a>

    <table class="table">
        <tr>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>

        @foreach ($coffees as $coffee)
        <tr>
            <td>{{ $coffee->name }}</td>
            <td>{{ $coffee->category }}</td>
            <td>R$ {{ number_format($coffee->price, 2, ',', '.') }}</td>
            <td>
                <a href="{{ route('admin.coffees.edit', $coffee) }}" class="btn btn-sm btn-warning">Editar</a>

                <form action="{{ route('admin.coffees.destroy', $coffee) }}"
                      method="POST"
                      style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
