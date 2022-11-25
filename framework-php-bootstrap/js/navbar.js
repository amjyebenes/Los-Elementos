// NAV BURGUER EVENT
const burguer = document.querySelector(".navbar-toggler");
const burguerChild = burguer.querySelectorAll("div");

function burguerAnim() {
    if (burguerChild[1].style.opacity != "0") {
        burguerChild[0].style.transform = "rotate(45deg)";
        burguerChild[1].style.opacity = 0;
        burguerChild[2].style.transform = "rotate(-45deg)";
    }
    else {
        burguerChild[0].style.transform = "rotate(0)";
        burguerChild[1].style.opacity = 1;
        burguerChild[2].style.transform = "rotate(0)";
    }
}

burguer.addEventListener('click', burguerAnim);