{{-- Este spinner se usa con un snippet de jquery en el layout. Añade la clase "loading" a cualquier botón y llamará al spinner --}}

<div class="overlay" style="display: none" id="spinner-overlay">
    <div class="d-flex justify-content-center">
        <div class="spinner-grow text-secondary" role="status" style="width: 4rem; height: 4rem; z-index: 20; position: absolute; top: 40%; left: 50%">
            <span class="sr-only"></span>
        </div>
    </div>
</div>