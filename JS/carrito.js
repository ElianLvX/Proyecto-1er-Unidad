// Apartado de seleccion de Clases
let carrito = document.querySelector("#carrito"); // Seleccionamos el Carrito
let contenedorCarrito = document.querySelector("#lista-carrito tbody"); // Contenedor donde Agregaremso los cursos
let listaCursos = document.querySelector("#lista-cursos"); // seleccionamos el contenedor de cursos
let vaciarCarrito = document.querySelector("#vaciar-carrito"); // Enlace o boton para borrar algun curso
let articuloCarrito = [];

// Apartado de Listeners o Eventos

cargarEventListeners();
function cargarEventListeners() {
    // Cuando se agrega un curso presionando "Agregar al carrito"
    listaCursos.addEventListener("click", agregarCurso);

    // Elimina Cursos del Carrito
    carrito.addEventListener("click", eliminarCurso);

    // Vaciar Carrito
    vaciarCarrito.addEventListener("click", () => {
        articuloCarrito = [];
        limpiarHTML();
        total = 0;
        ubicacion = document.querySelector(".ubicacion");
        ubicacion.innerHTML = '';
        const cuenta = document.createElement('p');
        cuenta.innerHTML = `
        <th>
            <p>
                $ ${total}
            </p>
            
        </th>
        `;
        ubicacion.appendChild(cuenta);
        console.log(ubicacion);
    });

}

function agregarCurso(e){
    e.preventDefault();
    // console.log(e.target.parentElement.parentElement);
    if(e.target.classList.contains("agregar-carrito")){
        let cursoSeleccionado = e.target.parentElement.parentElement;
        leerDatosCurso(cursoSeleccionado);
    }
}
//Elimina los Cursos seleccionados
function eliminarCurso(e) {
    if(e.target.classList.contains("borrar")) {
        const cursorID = e.target.getAttribute("data-id");
        articuloCarrito = articuloCarrito.filter( curso => curso.id !== cursorID);
        carritoHTML();
    }
}
let total = 0;

function leerDatosCurso(curso) {
    // console.log(curso);
    let infoCurso = {
        imagen: curso.querySelector("img").src,
        titulo: curso.querySelector("h4").textContent,
        precio: curso.querySelector(".precio span").textContent,
        id: curso.querySelector("a").getAttribute("data-id"),
        cantidad: 1
    }

    total += parseInt(infoCurso.precio.split('$')[1]);
    console.log("precio" + infoCurso.precio);
    console.log("total:"+ total);

    // Seleccionar Ubicacion para poner el total
    let ubicacion = document.querySelector(".ubicacion");
    ubicacion.innerHTML = '';
    const cuenta = document.createElement('p');
    cuenta.innerHTML = `
    <th>
        <p>
            $ ${total}
        </p>
        
    </th>
    `;
    ubicacion.appendChild(cuenta);
    console.log(ubicacion);
    

    let existe = articuloCarrito.some( cursox => cursox.id === infoCurso.id);
    console.log(existe);
    if(existe){
        const cursos = articuloCarrito.map( curso => {
            if(curso.id === infoCurso.id) {
                curso.cantidad++;
                return curso;
            } else {
                return curso;
            }
        });
        articuloCarrito = [...cursos];
    } else {
        // agrega elementos al carrito 
        articuloCarrito = [...articuloCarrito, infoCurso];
    }
    carritoHTML();
}

function carritoHTML() {
    // limpiador de cursos
    limpiarHTML();
    // Creacion de html
    articuloCarrito.forEach( curso => {
        let {imagen, titulo, precio, cantidad} = curso;
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>
                <img src="${imagen}" wodth="100">
            </td>
            <td>${titulo}</td>
            <td>${precio}</td>
            <td>${cantidad}</td>
            <td>
                <a href="#" class="borrar" data-id="${curso.id}"> X </a>
            </td>
        `;
        contenedorCarrito.appendChild(row);
    })
}

function limpiarHTML() {
    while(contenedorCarrito.firstChild) {
        contenedorCarrito.removeChild(contenedorCarrito.firstChild);
    }  
}