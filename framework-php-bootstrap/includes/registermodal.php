<!-- Modal -->
<div class="modal d-flex" id="exampleModalToggle">
    <div class="modal-dialog">
        <div class="modal-content bg-primary">
            <div class="modal-body">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/register.php" method="POST" enctype="multipart/form-data">
                    <div class="d-flex justify-content-center mt-0 mb-3">
                        <i class="fa-solid fa-user-plus fa-4x text-info"></i>
                    </div>
                    <div class="d-flex justify-content-center mb-1">
                        <h1 class="text-white h5">Rellene el formulario para finalizar su registro en nuestra web</h1>
                    </div>
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <i class="fa-regular fa-envelope text-white"></i>
                        <p class="text-white">Recibe nuestra newsletter y correos accerca de nuestros últimos festivales y eventos</p>
                    </div>
                    <div class="mb-1">
                        <label for="usuario" class="w-100">
                            <span class="sr-only">UserIcon</span>
                            <input type="text" class="form-control" id="usuario" placeholder="Nombre de usuario" name="username"
                            required value="<?php if (isset($_SESSION['username'])) echo $_SESSION['username']; ?>">
                        </label>
                    </div>
                    <div class="mb-1">
                        <label for="nombre" class="w-100">
                            <span class="sr-only">UserIcon</span>
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="firstname"
                            required value="<?php if (isset($_SESSION['firstname'])) echo $_SESSION['firstname']; 
                                                else if (isset($_SESSION['user_first_name'])) echo $_SESSION['user_first_name'];?>">
                        </label>
                    </div>
                    <div class="mb-1">
                        <label for="apellido1" class="w-100">
                            <span class="sr-only">UserIcon</span>
                            <input type="text" class="form-control" id="apellido1" placeholder="Primer apellido" name="lastname1" 
                            required value="<?php if (isset($_SESSION['lastname1'])) echo $_SESSION['lastname1']; 
                            else if (isset($_SESSION['user_last_name'])) echo $_SESSION['user_last_name'];?>">
                        </label>
                    </div>
                    <div class="mb-1">
                        <label for="apellido2" class="w-100">
                            <span class="sr-only">UserIcon</span>
                            <input type="text" class="form-control" id="apellido2" placeholder="Segundo apellido" name="lastname2"
                            required value="<?php if (isset($_SESSION['lastname2'])) echo $_SESSION['lastname2']; ?>">
                        </label>
                    </div>
                    <div class="mb-1">
                        <label for="email" class="w-100">
                            <span class="sr-only">UserIcon</span>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email" 
                            required value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email']; 
                            else if (isset($_SESSION['user_email_address'])) echo $_SESSION['user_email_address'];?>">
                        </label>
                    </div>
                    <div class="mb-1">
                        <p class="text-white w-50">Elija una foto de perfil:</p>
                        <label for="imagen" class="w-100">
                            <span class="sr-only">UserIcon</span>
                            <input type="file" class="form-control" id="imagen" placeholder="Repetir Contraseña" name="imagen">
                        </label>
                    </div> 
                    <div class="mb-1 d-flex gap-2 align-items-center">
                        <p class="text-white w-50">Fecha de nacimiento:</p>
                        <label for="fechaNac" class="w-100">
                            <span class="sr-only">UserIcon</span>
                            <input type="date" class="form-control" id="fechaNac" name="fechaNac" 
                            required value="<?php if (isset($_SESSION['fechaNac'])) echo $_SESSION['fechaNac']; ?>">
                        </label>
                    </div>
                    <div class="mb-1">
                        <label for="pais" class="w-100">
                            <span class="sr-only">UserIcon</span>
                            <input type="text" class="form-control" id="pais" placeholder="País" name="pais" 
                            required value="<?php if (isset($_SESSION['pais'])) echo $_SESSION['pais']; ?>">
                        </label>
                    </div>
                    <div class="mb-1">
                        <label for="tlfn" class="w-100">
                            <span class="sr-only">UserIcon</span>
                            <input type="text" class="form-control" id="tlfn" placeholder="Teléfono" name="tlfn"
                            required value="<?php if (isset($_SESSION['tlfn'])) echo $_SESSION['tlfn']; ?>">
                        </label>
                    </div>
                    <div class="mb-1">
                        <label for="codPos" class="w-100">
                            <span class="sr-only">UserIcon</span>
                            <input type="text" class="form-control" id="codPos" placeholder="Código Postal" name="CodPos" 
                            required value="<?php if (isset($_SESSION['CodPos'])) echo $_SESSION['CodPos']; ?>">
                        </label>
                    </div>
                    <div class="mb-1">
                        <label for="pwd" class="w-100">
                            <span class="sr-only">UserIcon</span>
                            <input type="password" class="form-control" id="pwd" placeholder="Contraseña" name="psw" 
                            required value="<?php if (isset($_SESSION['psw'])) echo $_SESSION['psw']; ?>">
                        </label>
                    </div>
                    <div class="mb-1">
                        <label for="pswd" class="w-100">
                            <span class="sr-only">UserIcon</span>
                            <input type="password" class="form-control" id="pswd" placeholder="Repetir Contraseña" name="pswd" 
                            required value="<?php if (isset($_SESSION['pswd'])) echo $_SESSION['pswd']; ?>">
                        </label>
                    </div>
                    <div class="form-check">
                        <label for="checkbox" class="form-check-label text-black">He leído y acepto la <a href="terminosYcondiciones.php" class="text-decoration-underline text-black">Política de privacidad</a> y autorizo el tratamiento de mis datos personales</label>
                        <input class="form-check-input" type="checkbox" id="checkbox" name="remember" required>
                    </div>
                    <div>
                        <label for="captcha">
                            <?php if (isset($_GET['captchaerror'])){
                                echo "<p class='text-white'>Captcha erróneo. Vuelva a introducirlo</p>";
                                echo "<h1>" . $_SESSION['captcha_text'] . "</h1>";
                            }
                            else
                                echo "<p class='text-white'>Introduce el captcha</p>";
                            ?>
                        </label>
                        <br>
                        <img src="includes/generatecaptcha.php" alt="CAPTCHA" class="captcha-image"><i class="text-white fa-lg fas fa-redo refresh-captcha" onclick="refreshCaptcha()"></i><br><br>
                        <input type="text" id="captcha" name="captcha_challenge" pattern="[A-Z]{6}">
                    </div>
                    <div class="modal-footer d-flex justify-content-between align-items-center">
                        <span class="text-white">¿Ya estás registrada/o?
                            <a type="submit" class="text-white text-decoration-underline" href="login.php" target="">Inicia Sesión</a>
                        </span>
                        <button type="submit" class="btn btn-secondary rounded-2">Aceptar</button>
                    </div>
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

    // let trigger = document.querySelector('#modalTrigger');
    // trigger.addEventListener('click', () => {
    //     modal.classList.add('d-flex');
    // });
</script>
<script>
    function refreshCaptcha() {
        document.querySelector(".captcha-image").src = 'includes/generatecaptcha.php?' + Date.now();
    }
</script>