//Ejecutando funciones
document.getElementById("main-btn").addEventListener("click", iniciarSesion);
document.getElementById("main-btn").addEventListener("click", register);
window.addEventListener("resize", anchoPage);
//Declarando variables
var formulario_login = document.querySelector(".formulario__login");
var formulario_register = document.querySelector(".formulario__register");
var contenedor_login_register = document.querySelector(".contenedor__login-register");
var caja_trasera_login = document.querySelector(".caja__trasera-login");
var caja_trasera_register = document.querySelector(".caja__trasera-register");

    //FUNCIONES

    function myFunction() {
        alert("Iniciaste sesion " + $usu_login);
    }

function anchoPage(){

    if (window.innerWidth > 850){
        caja_trasera_register.style.display = "flex";
        caja_trasera_login.style.display = "flex";
    }else{
        caja_trasera_register.style.display = "flex";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.display = "none";
        formulario_login.style.display = "flex";
        contenedor_login_register.style.left = "0px";
        formulario_register.style.display = "none";   
    }
}

anchoPage();

    function iniciarSesion(){
        if (window.innerWidth > 850){
            formulario_login.style.display = "flex";
            contenedor_login_register.style.left = "10px";
            formulario_register.style.display = "none";
            caja_trasera_register.style.opacity = "1";
            caja_trasera_login.style.opacity = "0";
        }else{
            formulario_login.style.display = "flex";
            contenedor_login_register.style.left = "0px";
            formulario_register.style.display = "none";
            caja_trasera_register.style.display = "flex";
            caja_trasera_login.style.display = "none";
        }
    }

    function register(){
        if (window.innerWidth > 850){
            formulario_register.style.display = "flex";
            contenedor_login_register.style.left = "-300px";
            formulario_login.style.display = "none";
            caja_trasera_register.style.opacity = "0";
            caja_trasera_login.style.opacity = "1";
        }else{
            formulario_register.style.display = "flex";
            contenedor_login_register.style.left = "0px";
            formulario_login.style.display = "none";
            caja_trasera_register.style.display = "none";
            caja_trasera_login.style.display = "flex";
            caja_trasera_login.style.opacity = "1";
        }
}

    /*function animacion()
    {
        if(main-btn.onclick){
            let start = Date.now();

            let timer = setInterval(function() {
              let timePassed = Date.now() - start;
        
              train.style.left = timePassed / 5 + 'px';
        
              if (timePassed > 2000) clearInterval(timer);
        
            }, 20);
        } */
    



