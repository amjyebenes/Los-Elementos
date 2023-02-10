<!-- Modal -->
<div class="modal d-flex" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog position-absolute top-50 start-50 translate-middle">
        <div class="modal-content bg-primary">
            <div class="modal-body">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="alert bg-primary" role="alert">
                    Las contraseñas no coinciden!
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let modal = document.querySelector('.modal');
    let close = document.querySelector('.btn-close');
    close.addEventListener('click', () => {
        modal.classList.remove('d-flex');
    });

    let trigger = document.querySelector('#modalTrigger');
    trigger.addEventListener('click', () => {
        modal.classList.add('d-flex');
    });
</script>