@if ($modal_mode == 'basic')
    <div class="modal fade" id="{{ $modal_id }}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="{{ $modal_id }}Label">Modal de prueba</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    Este es el cuerpo de un modal de prueba
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <a href="#" type="button" class="btn btn-success">Confirmar</a>
                </div>
            </div>
        </div>
    </div>
@endif

