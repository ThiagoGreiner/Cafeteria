<div class="col">
    <div class="card card-menu">
        <img src="{{ asset('storage/' . $coffee->image) }}" class="card-img-top">
        
        <div class="card-body">
            <h5 class="card-title">{{ $coffee->name }}</h5>
            <p class="card-text">
                R$ {{ number_format($coffee->price, 2, ',', '.') }}
            </p>

            <!-- Ações admin -->
            @isset($admin)
                <div class="mt-auto d-flex gap-2">
                    <a href="{{ route('admin.coffees.edit', $coffee) }}" class="btn btn-sm btn-warning w-100">
                        Editar
                    </a>

                    <form action="{{ route('admin.coffees.destroy', $coffee) }}" method="POST" class="w-100" onsubmit="return confirm('Deseja excluir este café?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger w-100">
                            Excluir
                        </button>
                    </form>
                </div>
            @endisset
        </div>
    </div>
</div>
