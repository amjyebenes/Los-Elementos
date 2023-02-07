
const password = document.getElementById("password");
const password2 = document.getElementById("password2");

document.getElementById("togglePassword").addEventListener("click", function () {
  // toggle the type attribute
  const type =
    password.getAttribute("type") === "password" ? "text" : "password";
  password.setAttribute("type", type);

  // toggle the icon
  this.classList.toggle("bi-eye");
});

document.getElementById("togglePassword2").addEventListener("click", function () {
    // toggle the type attribute
    const type =
      password2.getAttribute("type") === "password" ? "text" : "password";
    password2.setAttribute("type", type);
  
    // toggle the icon
    this.classList.toggle("bi-eye");
  });

