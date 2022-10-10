window.onload = (e) => {
    document.body.style.overflowY = "scroll";
    // SET SCROLL TO 0 WHEN RELOAD
    if (history.scrollRestoration) {
        history.scrollRestoration = 'manual';
    } else {
        window.onbeforeunload = function () {
            window.scrollTo(0, 0);
        }
    }
}

const navBar = document.querySelector('.nav-bar');
const navBarLine = document.querySelector('.nav-bar-line');

window.addEventListener('scroll', e => {
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
})

// PARALLAX
const homeBG = document.querySelector('.intro-img');

const moveBG = (e) => {
    if (scrollY > 600) {
        homeBG.style.transform = "none";
        homeBG.style.display = "none";
        console.log(homeBG.style.transform);
        console.log(scrollY);
    }
    else {
        homeBG.style.display = "block";
        homeBG.style.transform = `translateY(${scrollY * 0.2}px`;
    }
}
window.addEventListener('scroll', moveBG);

const textTrack = document.querySelector('.text-track');
const moveText = (e)=> {
    let mouseY = e.clientY;
    let mouseX = e.clientX;
     
    textTrack.style.transform = `translate3d(${mouseX - 50}px, ${mouseY - 50}px, 0)`;
}

window.addEventListener('mousemove', moveText);

// IMG HOVER
const imgs = document.querySelectorAll('.g-img');
const textTrackP = document.querySelector('.textTrackP');
const conTextTrackP = document.querySelector('.con-textTrackP');
imgs.forEach(el => {
    el.addEventListener('mouseover', () => {
        textTrackP.innerHTML = "Saber más";
        textTrack.style.opacity = 1;
        conTextTrackP.style.transform = "scale(1)";
    })
    el.addEventListener('mouseleave', () => {
        textTrack.style.opacity = 0;
        conTextTrackP.style.transform = "scale(0)";
    })
});