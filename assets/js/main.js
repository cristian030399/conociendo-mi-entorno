let carruseles = new Map();

window.onload = function() {
    inicializarColapsable();
    inicializarCarrusel();
    agregarEventoFlechas();

    closeMenu();

}

// Manejador de pestañas

function inicializarColapsable() {
    let triguerColapsable = document.getElementsByClassName("abrirColapsable");
    for (let boton of Array.from(triguerColapsable)) {

        boton.addEventListener('click', function() {
            controlarTab(boton);
            cambiarTitulo(boton);
        });
    }

}

function controlarTab(boton) {
    const isActive = boton.classList.contains("activo");
    if (isActive) {
        return;
    }
    cerrarContenido();
    abrirColapsable(boton);
}

function abrirColapsable(boton) {
    let idContetido = boton.dataset.contenidoid;
    let contenido = document.getElementById(idContetido);
    contenido.classList.add('activo');
    boton.classList.add('activo');
}

function cerrarContenido() {
    let elementosActivos = document.getElementsByClassName("activo");
    for (let elemento of Array.from(elementosActivos)) {
        elemento.classList.remove("activo");
    }
}

function closeMenu() {
    let menu = document.getElementById("menu-principal");
    menu.addEventListener("click", function() {
        let checkMenu = document.getElementById("navbar__checkbox");
        checkMenu.checked = 0;
    });
}

// Carrusel

function inicializarCarrusel() {
    let documentCarruseles = document.getElementsByClassName("carrusel");
    for (let carrusel of Array.from(documentCarruseles)) {
        let carruselInfo = {
            carrusel: carrusel,
            posicion: 0
        }
        carruseles.set(carrusel.id, carruselInfo);
    }


}

function agregarEventoFlechas() {
    let flechasIzquierda = document.getElementsByClassName("carrusel__flechaIzquierda");
    let flechasDerecha = document.getElementsByClassName("carrusel__flechaDerecha");
    for (let flechaIzquierda of Array.from(flechasIzquierda)) {
        let carruselId = flechaIzquierda.dataset.carruselid;
        flechaIzquierda.addEventListener('click', function() {
            moverCarrusel(carruselId, -1);
        });
    }
    for (let flechaDerecha of Array.from(flechasDerecha)) {
        let carruselId = flechaDerecha.dataset.carruselid;
        flechaDerecha.addEventListener('click', function() {
            moverCarrusel(carruselId, 1);
        });
    }
}

function moverCarrusel(carruselId, movimiento) {
    let carruselObj = carruseles.get(carruselId);
    let carrusel = carruselObj.carrusel;
    let carruselposicion = carruselObj.posicion + movimiento;

    let slides = carrusel.getElementsByClassName("carrusel__slide");
    let lengthSlides = slides.length;


    let nuevaposicion = -(lengthSlides + carruselposicion) % lengthSlides;

    nuevaposicion = nuevaposicion > 0 ? -1 * nuevaposicion : nuevaposicion;
    for (let slide of Array.from(slides)) {
        slide.style.transform = `translateX(${100 * nuevaposicion}%)`;
    }

    carruselObj.posicion = carruselposicion;
    carruseles.set(carruselId, carruselObj);
}

// Titulo

function cambiarTitulo(boton) {
    let tituloName = boton.dataset.sectionName;
    console.log(document.getElementById("navbar__titulo"));
    document.getElementById("navbar__titulo").innerHTML = tituloName;
    // tituloElement.innerHTML(tituloName);
    // console.log(tituloName);
}