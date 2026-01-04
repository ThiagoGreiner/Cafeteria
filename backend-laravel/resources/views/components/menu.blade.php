<section id="menu" class="container mt-5 mb-5">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="espresso-tab" data-bs-toggle="tab" data-bs-target="#espresso-tab-pane" type="button" role="tab" aria-controls="espresso-tab-pane" aria-selected="true">Expressos</button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link" id="cappuccino-tab" data-bs-toggle="tab" data-bs-target="#cappuccino-tab-pane" type="button" role="tab" aria-controls="cappuccino-tab-pane" aria-selected="false">Capuccinos</button>
        </li>
        
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="iced-coffee-tab" data-bs-toggle="tab" data-bs-target="#iced-coffee-tab-pane" type="button" role="tab" aria-controls="iced-coffee-tab-pane" aria-selected="false">Gelados</button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link" id="specials-coffee-tab" data-bs-toggle="tab" data-bs-target="#specials-coffee-tab-pane" type="button" role="tab" aria-controls="specials-coffee-tab-pane" aria-selected="false">Especiais</button>
        </li>
    </ul>
    
    <div class="tab-content" id="coffeesTabContent">
        <div class="tab-pane fade show active" id="espresso-tab-pane" role="tabpanel" aria-labelledby="espresso-tab" tabindex="0">
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">

                @forelse ($coffees['espresso'] ?? [] as $coffee)
                    @include('components.coffee-card', compact('coffee'))
                @endforeach

            </div>
        </div>

        <div class="tab-pane fade" id="cappuccino-tab-pane" role="tabpanel" aria-labelledby="cappuccino-tab" tabindex="0">
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">

                @forelse ($coffees['cappuccino'] ?? [] as $coffee)
                    @include('components.coffee-card', compact('coffee'))
                @endforeach

            </div>
        </div>

        <div class="tab-pane fade" id="iced-coffee-tab-pane" role="tabpanel" aria-labelledby="iced-coffee-tab" tabindex="0">
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">

                @forelse ($coffees['iced'] ?? [] as $coffee)
                    @include('components.coffee-card', compact('coffee'))
                @endforeach

            </div>
        </div>

        <div class="tab-pane fade" id="specials-coffee-tab-pane" role="tabpanel" aria-labelledby="specials-coffee-tab" tabindex="0">
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">

                @forelse ($coffees['special'] ?? [] as $coffee)
                    @include('components.coffee-card', compact('coffee'))
                @endforeach

            </div>
        </div>
    </div>
</section>