window.addEventListener("load",()=>{
    setTimeout(function(){
        document.getElementById("alerta").style.opacity = 0;
        setTimeout(function(){
            document.getElementById("alerta").classList.add("d-none");
        },1500)
    },2500);
})
