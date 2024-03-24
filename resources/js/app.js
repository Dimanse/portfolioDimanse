import './bootstrap';

document.addEventListener('DOMContentLoaded', function(){
    iniciarApp();
});

function iniciarApp() {
    navegacionFija();
    scrollNav();
    // paginaActual();
    mostrarNav();
}



function navegacionFija() {
    const barra = document.querySelector('header');
    const acerca = document.querySelector('#acerca');
    const body = document.querySelector('body');


    window.addEventListener('scroll', function() {
        if( acerca.getBoundingClientRect().top < 0  ) {
            barra.classList.add('fijo');
            body.classList.add('body-scroll');
        } else {
            barra.classList.remove('fijo');
            body.classList.remove('body-scroll');
        }
    });
}

function scrollNav() {
    const enlaces = document.querySelectorAll('nav a');

    enlaces.forEach( enlace => {
        enlace.addEventListener('click', function(e) {
            e.preventDefault();

            const seccionScroll = e.target.attributes.href.value;
            const seccion = document.querySelector(seccionScroll);
            seccion.scrollIntoView({ behavior: "smooth"});
        });
    });
}

const mobileMenuBtn = document.querySelector('#mobile-menu');

if(mobileMenuBtn){
    mobileMenuBtn.addEventListener('click', mostrarModal);
}


function mostrarModal(){
    const ventana_modal = document.querySelector('#ventana_modal');
    if(ventana_modal.classList = 'ocultar'){

        ventana_modal.classList.remove('ocultar')
        ventana_modal.classList.add('ventana_modal', 'mostrar');
    }

    const cerrar_menu = document.querySelector('.opciones button');
    // console.log(cerrar_menu);
    cerrar_menu.addEventListener('click', function(e){
        e.preventDefault();
        // console.log(e.target.classList.contains('cerrar-modal'))
        if(e.target.classList.contains('cerrar-modal')){
            ventana_modal.classList.remove('mostrar');
            ventana_modal.classList.add('ocultar');
        }

    });

    const enlacesNav = document.querySelectorAll('nav .enlace');
    enlacesNav.forEach(enlaceNav => {
        enlaceNav.addEventListener('click', function(e){
            e.preventDefault();
            console.log('Cerrando ventana');
            ventana_modal.classList.remove('mostrar');
            ventana_modal.classList.add('ocultar');
        })
    })

}


