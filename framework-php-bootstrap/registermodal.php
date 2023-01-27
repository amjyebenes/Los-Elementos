<!--Cuando llamemos a este modal la sesión de Google está abierta, pero el usuario
aún no está en la base de datos.
Cuando el usuario complete todos los campos correctamente y pulse "Submit" se redigirá 
a register.php. En caso de que cancele el modal redirigimos a logout.php, ya que el 
registro es obligatorio.
-->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none';location.href='logout.php'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/register.php" method="POST">
    <div class="container">
      <h1 class="modal-title">Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <div class='row-form'>
         <div class='column-form'>
          <label for="email"><b>E-mail</b></label>
          <input type="email" placeholder="Enter Email" name="email" value="<?php echo $_SESSION['user_email_address'];?>" readonly>
          <label for="firstname"><b>First Name</b></label>
          <input type="text" name="firstname" value="<?php echo $_SESSION['user_first_name'];?>" readonly>
          <label for="lastname"><b>Last Name</b></label>
          <input type="text" name="lastname" value="<?php echo $_SESSION['user_last_name'];?>" readonly>
         </div>
         <div class='column-form'>
          <label for="birthdate"><b>Birth date</b></label>
          <input type="date" name="birthdate" required>
          <label for="postalcode"><b>Postal Code</b></label>
          <input type="text" pattern="^[0][1-9][0-9]{3}$|^[1-4][0-9]{4}$|^[5][0-2][0-9]{3}$" maxlength="5" placeholder="Enter six digit postal code" name="postalcode" required>
          <label for="captcha"><b>
          <?php if (isset($_GET["captchaerror"])) 
                   echo "Invalid code. Please enter de Captcha Text.";
                else 
                   echo "Please Enter the Captcha Text<b>";
          ?>
          </b></label>
          <img src="includes/generatecaptcha.php" alt="CAPTCHA" class="captcha-image"><i class="fas fa-redo refresh-captcha"></i>
          <input type="text" id="captcha" name="captcha_challenge" pattern="[A-Z]{6}">
         </div>
      </div>
      <label>
        <input type="checkbox" required name="terms" style="margin-bottom:15px"> I've read and accept the <a href="#" style="color:dodgerblue">Terms & Privacy</a>.
      </label>
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none';location.href='logout.php'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
  <script>
  var refreshButton = document.querySelector(".refresh-captcha");
  refreshButton.onclick = function() {
    document.querySelector(".captcha-image").src = 'includes/generatecaptcha.php?' + Date.now();
  }
  </script>
</div>
