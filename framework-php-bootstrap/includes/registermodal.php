<!-- Modal -->
<div class="modal d-flex" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content bg-primary">
            <div class="modal-body">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                        <input type="text" class="form-control" id="usuario" placeholder="Nombre de usuario" name="username"
                         required value="<?php /*GOOGLE*/if (isset($_SESSION['username'])) echo $_SESSION['username']; ?>">
                    </div>
                    <div class="mb-1">
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="firstname"
                         required value="<?php if (isset($_SESSION['firstname'])) echo $_SESSION['firstname']; ?>">
                    </div>
                    <div class="mb-1">
                        <input type="text" class="form-control" id="apellido1" placeholder="Primer apellido" name="lastname1" 
                        required value="<?php if (isset($_SESSION['lastname1'])) echo $_SESSION['lastname1']; ?>">
                    </div>
                    <div class="mb-1">
                        <input type="text" class="form-control" id="apellido2" placeholder="Segundo apellido" name="lastname2"
                         required value="<?php if (isset($_SESSION['lastname2'])) echo $_SESSION['lastname2']; ?>">
                    </div>
                    <div class="mb-1">
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" 
                        required value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email']; ?>">
                    </div>
                    <div class="mb-1 d-flex gap-2 align-items-center">
                        <label for="fechaNac" class="text-white w-50">Fecha de nacimiento:</label>
                        <input type="date" class="form-control" id="fechaNac" name="fechaNac" 
                        required value="<?php if (isset($_SESSION['fechaNac'])) echo $_SESSION['fechaNac']; ?>">
                    </div>
                    <div class="mb-1">
                        <input type="text" class="form-control" id="pais" placeholder="País" name="pais" 
                        required value="<?php if (isset($_SESSION['pais'])) echo $_SESSION['pais']; ?>">
                    </div>
                    <div class="mb-1">
                        <input type="text" class="form-control" id="tlfn" placeholder="Teléfono" name="tlfn"
                         required value="<?php if (isset($_SESSION['tlfn'])) echo $_SESSION['tlfn']; ?>">
                    </div>
                    <div class="mb-1">
                        <input type="text" class="form-control" id="codPos" placeholder="Código Postal" name="CodPos" 
                        required value="<?php if (isset($_SESSION['CodPos'])) echo $_SESSION['CodPos']; ?>">
                    </div>
                    <div class="mb-1">
                        <input type="password" class="form-control" id="pwd" placeholder="Contraseña" name="psw" 
                        required value="<?php if (isset($_SESSION['psw'])) echo $_SESSION['psw']; ?>">
                    </div>
                    <div class="mb-1">
                        <input type="password" class="form-control" id="pswd" placeholder="Repetir Contraseña" name="pswd" 
                        required value="<?php if (isset($_SESSION['pswd'])) echo $_SESSION['pswd']; ?>">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label text-black">He leído y acepto la <a href="terminosYcondiciones.php" class="text-decoration-underline text-black">Política de privacidad</a> y autorizo el tratamiento de mis datos personales</label>
                        <input class="form-check-input" type="checkbox" name="remember" required>
                    </div>
                    <div>
                        <label for="captcha">
                            <?php if (isset($_SESSION['pswd']))
                                echo "<p class='text-white'>Captcha erróneo. Vuelva a introducirlo</p>";
                            else
                                echo "<p class='text-white'>Introduce el captcha</p>";
                            ?>
                        </label>
                        <br>
                        <img src="includes/generatecaptcha.php" alt="CAPTCHA" class="captcha-image"><i class="text-white fa-lg fas fa-redo refresh-captcha" onclick="refreshCaptcha()"></i><br><br>
                        <input type="text" id="captcha" name="captcha_challenge" pattern="[A-Z]{6}">
                        <button class="g-recaptcha btn btn-outline-secondary rounded-3 text-white " data-sitekey="reCAPTCHA_site_key" data-callback='onSubmit' data-action='submit'>NO SOY UN ROBOT</button>
                    </div>
                    <div class="modal-footer d-flex justify-content-between align-items-center">
                        <label class="text-white">¿Ya estás registrada/o?
                            <a type="submit" class="text-white text-decoration-underline" href="login.php" target="">Inicia Sesión</a>
                        </label>
                        <button type="submit" class="btn btn-secondary rounded-2">Aceptar</button>
                    </div>
                    <?php 
                        if(isset($_SESSION['insercionCorrecta'])){
                            echo "insertado correctamente";
                        }else echo "fallo al insertar";
                    ?>
                </form>
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
<script>
    function refreshCaptcha() {
        document.querySelector(".captcha-image").src = 'includes/generatecaptcha.php?' + Date.now();
    }
</script>