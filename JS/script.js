    
    let ventanax = document.querySelector(".ventana"); // seleccionamos la ventana
    let boton = document.querySelector(".btn"); // Seleccionamos el Boton

    boton.addEventListener('click', function(event) {
        console.log(event.target);
        ventanax.style.display = "block";

        setTimeout( function() {
            ventanax.style.display = "none";
        }, 2000);
    })
    console.log(ventanax);
    console.log(boton);