window.onload = (e) => {
    // document.body.style.overflowY = "scroll";
    // SET SCROLL TO 0 WHEN RELOAD
    if (history.scrollRestoration) {
        history.scrollRestoration = 'manual';
    } else {
        window.onbeforeunload = function () {
            window.scrollTo(0, 0);
        }
    }
    checkWidth();
}

// Window resizing observer
const sizeObserver = new ResizeObserver(entries => {
    entries.forEach(e => {
        checkWidth();
    });
});
sizeObserver.observe(document.body);

// PARALLAX for intro background (Desktop)
const homeBG = document.querySelector('.intro-img');
const moveBG = (e) => {
    if (scrollY > 600) {
        homeBG.style.transform = "none";
        homeBG.style.display = "none";
    }
    else {
        homeBG.style.display = "block";
        homeBG.style.transform = `translateY(${scrollY * 0.2}px`;
    }
}

// Text tracking (Desktop)
const textTrack = document.querySelector('.text-track');
const moveText = (e)=> {
    let mouseY = e.clientY;
    let mouseX = e.clientX;
     
    textTrack.style.transform = `translate3d(${mouseX - 50}px, ${mouseY - 50}px, 0)`;
}

// NavBar animation function for event listener (Desktop)
const navBar = document.querySelector('.nav-bar');
const navBarLine = document.querySelector('.nav-bar-line');
function navAnim() {
    if (scrollY > 0) {
        navBar.style.color = "black";
        navBar.style.backdropFilter = "blur(5px)";
        navBar.style.background = "rgb(252, 236, 221, .8)";
        navBarLine.style.height = "1px";
        navBarLine.style.bottom = "0";
        // navBar.style.opacity = .8;
    }
    else {
        navBar.style.color = "#FCECDD";
        // navBar.style.opacity = 1;
        navBar.style.backdropFilter = "none";
        navBar.style.background = "rgb(252, 236, 221, 0)";
        navBarLine.style.height = "0px";
        navBarLine.style.bottom = "20vh";
    }
}

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

// IMG HOVER (Desktop)
const imgs = document.querySelectorAll('.g-img');
const textTrackP = document.querySelector('.textTrackP');
const conTextTrackP = document.querySelector('.con-textTrackP');


// VIDEO SHOW-OFF OBSERVER (Desktop)
const video = document.querySelector(".s2-vid-con");
var observer = new IntersectionObserver(function(e) {
    if (e[0].intersectionRatio > 0) {
        console.log('Element has just become visible in screen');
        setTimeout(showVideo, 100);
    } 
}, { threshold: [1] });

observer.observe(document.querySelector(".s2-b-line"));

function showVideo() {
    console.log("Video Showed");
    video.style.transform = "perspective(1000px) rotateX(0)";
    video.style.opacity = 1;
}

// Stop propagation when clicking boostrap menu burguer
document.querySelector('.navbar-toggler').addEventListener('click', function (e) {
    console.log('The button was clicked!');
    e.stopPropagation();
});

// Check window width function for activating or stopping event listeners
function checkWidth() {
    if (window.innerWidth >= 992) {
        // Reset style
        homeBG.style.position = "fixed";
        homeBG.style.bottom = "35vh";
        homeBG.style.width = "100%";
        homeBG.style.top = "auto";

        // Navbar anim
        burguer.removeEventListener('click', burguerAnim);
        window.addEventListener('scroll', navAnim);

        // BG Parallax
        window.addEventListener('scroll', moveBG);

        // Text track 
        window.addEventListener('mousemove', moveText);

        imgs.forEach(el => {
            el.addEventListener('mouseenter', () => {
                textTrackP.innerHTML = "Saber más";
                textTrack.style.opacity = 1;
                conTextTrackP.style.transform = "scale(1)";
            })
            el.addEventListener('mouseleave', () => {
                textTrack.style.opacity = 0;
                conTextTrackP.style.transform = "scale(0)";
            })
        });
    }
    else {
        // Reset style
        // video.style.transform = "perspective(1000px) rotateX(0)";
        // video.style.opacity = 1;
        homeBG.style.position = "fixed";
        homeBG.style.width = "auto";
        window.removeEventListener('scroll', moveBG);
        window.removeEventListener('mousemove', moveText);
        observer.disconnect;

        burguer.addEventListener('click', burguerAnim);
    }
}