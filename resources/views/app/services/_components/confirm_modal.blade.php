<div class='modal modal-' id="{{ $modalName }}" tabindex='-1'>
    <div class='modal-dialog'>
        <div class='modal-content bg-dark'>
            <div class='modal-header'>
                <h5 class='modal-title'>{{ $modalTitle }}</h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>
                <p>{{ $modalMessage }}</p>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Cancelar</button>
                <button type='submit' class='btn btn-primary'>Confimar</button>
            </div>
        </div>
    </div>
</div>
