<div>
    <i class="bi bi-plus"></i>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#PostModal">Crear post</button>

    <!-- Modal -->
    <div class="modal fade" id="PostModal" tabindex="-1" aria-labelledby="PostModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="PostModalLabel">Nuevo post</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Titulo:</label>
                            <input type="text" class="form-control" id="recipient-name" wire:model.defer='title'>

                            @error('title')
                                <span>
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Comentario:</label>
                            <textarea class="form-control" id="message-text" wire:model.defer='content'></textarea>
                            @error('content')
                                <span>
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" wire:click='save' wire:loading.remove wire:target='save'>Guardar
                        post</button>
                </div>
            </div>
        </div>
    </div>
</div>
