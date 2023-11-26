const modalContacto = document.querySelector("#modalContacto");
const btnOpenModal = document.querySelector("#btn-open-contacto");
const btnCloseModal = document.querySelector("#btn-close-contacto");


btnOpenModal.addEventListener('click',()=>{    modalContacto.showModal(); })
btnCloseModal.addEventListener('click',()=>{   modalContacto.close(); })
