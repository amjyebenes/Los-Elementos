document.addEventListener("click",e =>{
    if(e.target.id=="botonDatos"){
        clickUsuario();
    }
});

document.addEventListener("click",e =>{
    if(e.target.id=="botonCompras"){
        clickCompras();
    }
});


function clickUsuario(){
    let botondatos = document.getElementById("botonDatos");
    botondatos.classList.add("iconoCuentaSelected");
    let icono = document.getElementById("iconoUsuario");
    icono.classList.add("iconoCuentaBlanco");
    let texto = document.getElementById("textoUsuario");
    texto.classList.add("text-white");
    let div = document.getElementById("divCompras");
    div.classList.add("ocultarDiv");
    let div2 = document.getElementById("divDatos");
    div2.classList.remove("ocultarDiv");
    noclickCompras();
}

function clickCompras(){
    let botondatos = document.getElementById("botonCompras");
    botondatos.classList.add("iconoCuentaSelected");
    let icono = document.getElementById("iconoCompras");
    icono.classList.add("iconoCuentaBlanco");
    let texto = document.getElementById("textoCompras");
    texto.classList.add("text-white");
    let div = document.getElementById("divCompras");
    div.classList.remove("ocultarDiv");
    let div2 = document.getElementById("divDatos");
    div2.classList.add("ocultarDiv");
    noclickUsuario();
}

function noclickUsuario(){
    let botondatos = document.getElementById("botonDatos");
    botondatos.classList.remove("iconoCuentaSelected");
    let icono = document.getElementById("iconoUsuario");
    icono.classList.remove("iconoCuentaBlanco");
    let texto = document.getElementById("textoUsuario");
    texto.classList.remove("text-white");
}

function noclickCompras(){
    let botondatos = document.getElementById("botonCompras");
    botondatos.classList.remove("iconoCuentaSelected");
    let icono = document.getElementById("iconoCompras");
    icono.classList.remove("iconoCuentaBlanco");
    let texto = document.getElementById("textoCompras");
    texto.classList.remove("text-white");
}



document.addEventListener("onload", clickUsuario());
