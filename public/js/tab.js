let pagina = 1;

document.addEventListener('DOMContentLoaded', function(){
    mostrarSeccion();

    cambiarSeccion();
})

function mostrarSeccion(){
    //eliminar mostrar-seccion de la seccion anterior
    const seccionAnterior = document.querySelector('.mostrar-seccion')
        if(seccionAnterior){
            seccionAnterior.classList.remove('mostrar-seccion');
        }

        const seccionActual = document.querySelector(`#paso-${pagina}`);
        seccionActual.classList.add('mostrar-seccion');

        //eliminar la clase actual en el tab anterior
        const tabAnterior = document.querySelector('.app-tabs .actual');
        if(tabAnterior){
            tabAnterior.classList.remove('actual');
        }

        //resaltar tab actual
        const tab = document.querySelector(`[data-paso="${pagina}"]`);
        tab.classList.add('actual');
}

function cambiarSeccion(){
    const enlaces = document.querySelectorAll('.app-tabs button');

    enlaces.forEach( enlace => {
        enlace.addEventListener('click', e => {
            e.preventDefault();
            pagina = parseInt(e.target.dataset.paso);

            mostrarSeccion();
        })
    })
}