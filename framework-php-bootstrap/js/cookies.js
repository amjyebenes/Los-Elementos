const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector("button.item");
var enableCookies = false;

cookieButton.addEventListener("click", () => {
    // Llamo a la funcion de aceptar cookie que crea una por defecto con valor true
    // y oculta el cartel al estar activa durante 30 días o se elimine la cookie
    acceptCookies();
});


/**
 * 
 * @param {*} cname 
 * @param {*} cvalue 
 * @param {*} exdays 
 */
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

/**
 * 
 * @param {*} cname 
 * @returns 
 */
function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

/**
 * Al aceptar se crea una cookie con valor a true y duración de 30 días
 */
function acceptCookies() {
    setCookie("cookiesAccepted", "true", 30);
    // Oculta el panel de la cookie
    document.getElementById("cookieNotice").classList.add('d-none');
}

/**
 * Comprueba si la cookie está a true para ocultar o false para mostrar
 */
function checkCookie() {
    var cookiesAccepted = getCookie("cookiesAccepted");
    if (cookiesAccepted != "true") {
        enableCookies = true;
    } else {
        enableCookies = false;
    }
}

// Compruebo la existencia de la cookie en el DOM
window.onload = () => {
    checkCookie();

    if (enableCookies) {
        document.getElementById("cookieNotice").classList.remove('d-none');
    }
    else {
        document.getElementById("cookieNotice").classList.add('d-none');
    }
}
