<div class="accordion-item">
    <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapse-{{ $numeroObra }}" aria-expanded="false" aria-controls="collapse-{{ $numeroObra }}">
            #{{ $numeroObra }} - {{ $nombreObra }}
        </button>
    </h2>
    <div id="collapse-{{ $numeroObra }}" class="accordion-collapse collapse" data-bs-parent="#{{ $acordeon }}">
        <div class="accordion-body">
            {{ $slot }}
        </div>
    </div>
</div>