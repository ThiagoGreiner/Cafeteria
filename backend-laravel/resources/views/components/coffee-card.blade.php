<div class="col">
    <div class="card card-menu">
        <img src="{{ asset('storage/' . $coffee->image) }}" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">{{ $coffee->name }}</h5>
            <p class="card-text">
                R$ {{ number_format($coffee->price, 2, ',', '.') }}
            </p>
        </div>
    </div>
</div>
