


document.getElementById("btn_iniciar_sesion").addEventListener("click", iniciarSesion);
document.getElementById("btn_registrarse").addEventListener("click", register);
window.addEventListener("resize", anchoPage);


var formulario_Inicio_de_sesion = document.querySelector(".formulario_Inicio_de_sesion");
var formulario_registrarse = document.querySelector(".formulario_registrarse");
var contenedor_de_Inicio_de_sesion_y_registrarse = document.querySelector(".contenedor_de_Inicio_de_sesion_y_registrarse");
var contenedor_trasero_Inicio_de_sesion = document.querySelector(".contenedor_trasero_Inicio_de_sesion");
var contenedor_trasero_registrarse = document.querySelector(".contenedor_trasero_registrarse");

 //FUNCIONES

function anchoPage(){

    if (window.innerWidth > 850){
        contenedor_trasero_registrarse.style.display = "block";
        contenedor_trasero_Inicio_de_sesion.display = "block";
    }else{
        contenedor_trasero_registrarse.style.display = "block";
        contenedor_trasero_registrarse.style.opacity = "1";
        contenedor_trasero_Inicio_de_sesion.style.display = "none";
        formulario_Inicio_de_sesion.style.display = "block";
        contenedor_de_Inicio_de_sesion_y_registrarse.style.left = "0px";
        formulario_registrarse.style.display = "none";   
    }
}

anchoPage();


    function iniciarSesion(){
        if (window.innerWidth > 850){
            formulario_Inicio_de_sesion.style.display = "block";
            contenedor_de_Inicio_de_sesion_y_registrarse.style.left = "10px";
            formulario_registrarse.style.display = "none";
            contenedor_trasero_registrarse.style.opacity = "1";
            contenedor_trasero_Inicio_de_sesion.style.opacity = "0";
        }else{
            formulario_Inicio_de_sesion.style.display = "block";
            contenedor_de_Inicio_de_sesion_y_registrarse.style.left = "0px";
            formulario_registrarse.style.display = "none";
            contenedor_trasero_registrarse.style.display = "block";
            contenedor_trasero_Inicio_de_sesion.style.display = "none";
        }
    }

    function register(){
        if (window.innerWidth > 850){
            formulario_registrarse.style.display = "block";
            contenedor_de_Inicio_de_sesion_y_registrarse.style.left = "410px";
            formulario_Inicio_de_sesion.style.display = "none";
            contenedor_trasero_registrarse.style.opacity = "0";
			contenedor_trasero_Inicio_de_sesion.style.opacity = "1";
        }else{
            formulario_registrarse.style.display = "block";
            contenedor_de_Inicio_de_sesion_y_registrarse.style.left = "0px";
            formulario_Inicio_de_sesion.style.display = "none";
            contenedor_trasero_registrarse.style.display = "none";
            contenedor_trasero_Inicio_de_sesion.style.display = "block";
            contenedor_trasero_Inicio_de_sesion.style.opacity = "1";
        }
}

