const navBar = document.querySelector('.nav-bar');
window.addEventListener('scroll', e => {
    if (scrollY > 0) {
        navBar.style.color = "black";
        navBar.style.background = "rgb(252, 236, 221, .9)";
        // navBar.style.opacity = .8;
    }
    else {
        navBar.style.color = "#FCECDD";
        // navBar.style.opacity = 1;
        navBar.style.background = "none";
    }
})
