const modalContacto = document.querySelector("#modalContacto");
const btnOpenModal = document.querySelector("#btn-open-contacto");
const btnCloseModal = document.querySelector("#btn-close-contacto");

const modalContactoEnd = document.querySelector("#modalContactoEnd");
const btnOpenModalEnd = document.querySelector("#btn-open-contactoEnd");
const btnCloseModalEnd = document.querySelector("#btn-close-contactoEnd");


btnOpenModal.addEventListener('click',()=>{    modalContacto.showModal(); })
btnCloseModal.addEventListener('click',()=>{   modalContacto.close(); })

btnOpenModalEnd.addEventListener('click',()=>{    modalContactoEnd.showModal(); })
btnCloseModalEnd.addEventListener('click',()=>{   modalContactoEnd.close(); })



$(document).ready(function(){
    $('.carrusel-equipo').slick({
        infinite: true,
        slidesToShow: 2, 
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        draggable: true, 
        swipeToSlide: true, 
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1 
                }
            }
        ]
    });
});

$(document).ready(function(){
    $('.carrusel-testimonios').slick({
        infinite: true,
        slidesToShow: 1, 
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        draggable: true, 
        swipeToSlide: true, 
    });
});

$(document).ready(function(){
    $('.carrusel-programas').slick({
        infinite: true,
        slidesToShow: 3, 
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        draggable: true, 
        swipeToSlide: true, 
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1 
                }
            }
        ]
    });
});

$(document).ready(function(){
    $('.carrusel-alianzas').slick({
        infinite: true,
        slidesToShow: 3, 
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        draggable: true, 
        swipeToSlide: true, 
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1 
                }
            }
        ]
    });
});


