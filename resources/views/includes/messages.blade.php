{{-- Estos mensajes se pueden usar con el flash en los controladores. Tienes que usar el siguiente snippet: --}}
{{-- session()->flash('error', 'Atención, hay un error'); // El flash se lanza en la siguiente url direccionada --}}
{{-- Intenta acompañarlo siempre de la siguiente línea, para no dejar cosas cargadas en el caché del flash: --}}
{{-- return redirect()->route('ruta.redireccionada'); --}}

@if (session('error'))
    <div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
        <div id="field-alert" class="toast bg-danger show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Error</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body text-light">
                {{ session('error') }}
            </div>
        </div>
    </div>
@endif

@if (session('success'))
    <div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
        <div id="field-alert" class="toast bg-success show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Información</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body text-light">
                {{ session('success') }}
            </div>
        </div>
    </div>
@endif

@if (session('info'))
    <div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
        <div id="field-alert" class="toast bg-info show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Información</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body text-light">
                {{ session('info') }}
            </div>
        </div>
    </div>
@endif

@if (session('warning'))
    <div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
        <div id="field-alert" class="toast bg-warning show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Atención</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body text-light">
                {{ session('warning') }}
            </div>
        </div>
    </div>
@endif