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

const s1Img01 = document.querySelectorAll(".g-img")[0];
const s1Img02 = document.querySelectorAll(".g-img")[1];
const s1Img03 = document.querySelectorAll(".g-img")[2];

var observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.intersectionRatio > 0) {
            s1Img01.style.transform = 'perspective(1000px) rotateX(0)';
            s1Img02.style.transform = 'perspective(1000px) rotateX(0)';
            s1Img03.style.transform = 'perspective(1000px) rotateX(0)';
        }
    });
    // if(entries[0].isIntersecting === true)
    //     console.log('Element has just become visible in screen');
    //     setTimeout( e => {
    //         s1Img01.style.transform = 'perspective(1000px) rotateX(0)';
    //         s1Img02.style.transform = 'perspective(1000px) rotateX(0)';
    //         s1Img03.style.transform = 'perspective(1000px) rotateX(0)';
    //     }, 200);
}, { threshold: [0] });

// function imgScrollView() {
//     s1Img01.style.transform = 'perspective(1000px) rotateX(0)';
//     s1Img02.style.transform = 'perspective(1000px) rotateX(0)';
//     s1Img03.style.transform = 'perspective(1000px) rotateX(0)';
// }

observer.observe(document.querySelector('.s1-trigger'));