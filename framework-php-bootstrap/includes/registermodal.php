
    <!-- Modal -->
    <div class="modal d-flex" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content bg-primary">
                <div class="modal-body">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/register.php" method="POST">
                        <div class="d-flex justify-content-center mt-0 mb-3">
                            <i class="fa-solid fa-user-plus fa-4x text-info"></i>
                        </div>
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <i class="fa-solid fa-ticket text-white"></i>
                            <label class="text-white">Consigue entradas antes que nadie en nuestra preventa</label>
                        </div>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <i class="fa-regular fa-envelope text-white"></i>
                            <label class="text-white">Recibe nuestra newsletter y correos accerca de nuestros últimos festivales y eventos</label>
                        </div>
                        <div class="mb-1">
                            <input type="text" class="form-control" id="usuario" placeholder="Nombre de usuario" name="username" required>
                        </div>
                        <div class="mb-1">
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="firstname" required>
                        </div>
                        <div class="mb-1">
                            <input type="text" class="form-control" id="apellido1" placeholder="Primer apellido" name="lastname1" required>
                        </div>
                        <div class="mb-1">
                            <input type="text" class="form-control" id="apellido2" placeholder="Segundo apellido" name="lastname2" required>
                        </div>
                        <div class="mb-1">
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                        </div>
                        <div class="mb-1 d-flex gap-2 align-items-center">
                            <label for="fechaNac" class="text-white w-50">Fecha de nacimiento:</label>
                            <input type="date" class="form-control" id="fechaNac" name="fechaNac" required>
                        </div>
                        <div class="mb-1">
                            <input type="text" class="form-control" id="pais" placeholder="País" name="pais" required>
                        </div>
                        <div class="mb-1">
                            <input type="text" class="form-control" id="tlfn" placeholder="Teléfono" name="tlfn" required>
                        </div>
                        <div class="mb-1">
                            <input type="text" class="form-control" id="codPos" placeholder="Código Postal" name="CodPos" required>
                        </div>
                        <div class="mb-1">
                            <input type="password" class="form-control" id="pwd" placeholder="Contraseña" name="psw" required>
                        </div>
                        <div class="mb-1">
                            <input type="password" class="form-control" id="pswd" placeholder="Repetir Contraseña" name="pswd" required>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label text-black">He leído y acepto la <a href="terminosYcondiciones.php" class="text-decoration-underline text-black">Política de privacidad</a> y autorizo el tratamiento de mis datos personales</label>
                            <input class="form-check-input" type="checkbox" name="remember" required>
                        </div>
                </div>
                <div class="modal-footer d-flex justify-content-between align-items-center">
                    <label class="text-white">¿Ya estás registrada/o?
                        <a type="submit" class="text-white text-decoration-underline" href="login.php" target="">Inicia Sesión</a>
                    </label>
                    <button type="submit" class="btn btn-secondary rounded-2">Aceptar</button>
                </div>
                </form>
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