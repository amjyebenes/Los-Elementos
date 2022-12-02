
//
// Poner aquí los scripts 
// 

// PARALLAX for intro background (Desktop)
const homeBG = document.querySelector('.intro-img');
const moveBG = (e) => {
    if (scrollY > 600) {
        homeBG.style.transform = "none";
        homeBG.classList.remove('d-block');
        homeBG.classList.add('d-none');
    }
    else {
        homeBG.classList.remove('d-none');
        homeBG.classList.add('d-block');
        homeBG.style.transform = `translateY(${scrollY * 0.2}px`;
    }
}

// Text tracking (Desktop)
const textTrack = document.querySelector('.text-track');
const textTrackContent = "VER";
const moveText = (e)=> {
    let mouseY = e.clientY;
    let mouseX = e.clientX;
    textTrack.style.transform = `translate3d(${mouseX - 50}px, ${mouseY - 50}px, 0)`;
}

// IMG HOVER (Desktop)
const imgs = document.querySelectorAll('.hover-img');
const textTrackH = document.querySelector('.textTrackH');
const conTextTrackH = document.querySelector('.con-textTrackH');

// Window DOMContentLoaded
window.addEventListener('DOMContentLoaded', event => {
    checkWidth();
});

// Window resizing observer
const sizeObserver = new ResizeObserver(entries => {
    entries.forEach(e => {
        checkWidth();
    });
});
sizeObserver.observe(document.body);

// Function that checks the page width and activate or disable events
function checkWidth() {
    if (window.innerWidth >= 992) {
        // Reset style
        homeBG.style.bottom = "35vh";
        homeBG.classList.remove('w-auto');
        homeBG.classList.add('w-100');
        homeBG.style.top = "auto";

        // BG Parallax
        window.addEventListener('scroll', moveBG);
        // Text track 
        window.addEventListener('mousemove', moveText);
        imgs.forEach(el => {
            el.addEventListener('mouseenter', () => {
                textTrackH.innerHTML = textTrackContent;
                textTrack.classList.remove('opacity-0');
                textTrack.classList.add('opacity-100');
                conTextTrackH.style.transform = "scale(1)";
            })
            el.addEventListener('mouseleave', () => {
                textTrack.classList.remove('opacity-100');
                textTrack.classList.add('opacity-0');
                conTextTrackH.style.transform = "scale(0)";
            })
        });
    } else {
        // Reset style
        homeBG.classList.remove('w-100');
        homeBG.classList.add('w-auto');
        window.removeEventListener('scroll', moveBG);
        window.removeEventListener('mousemove', moveText);
        observer.disconnect;
    }
}
