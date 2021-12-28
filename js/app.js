let boton = document.getElementById("boton");
let tipo = document.getElementById("tipo");
let numero = document.getElementById("numero");
numero.addEventListener("keyup", (e)=>{
    e.preventDefault();
    if (tipo.value > 0 && numero.value != 0) {
        boton.removeAttribute ("disabled");
    }
})

