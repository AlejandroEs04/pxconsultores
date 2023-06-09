document.addEventListener('DOMContentLoaded', function() {
    eventListener();
    cajaMensaje();
});

function search_barra() {
    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('codigo');
    let y = document.getElementsByClassName('no');
      
    for (i = 0; i < x.length; i++) { 
        if (!y[i].innerHTML.toLowerCase().includes(input) && !x[i].innerHTML.toLowerCase().includes(input)) {
            y[i].style.display="none";
        }else {
            y[i].style.display="";
        }
    }
}
function cajaMensaje() {
    const cajaExistente = document.querySelector('.mensaje-show');

    if(cajaExistente) {
        const cajaRemover = document.querySelector('.cerrar-boton');
        cajaRemover.addEventListener('click', eliminarTabla);
    }
}
function eliminarTabla() {
    const mensajeMostrar = document.querySelector('.mensaje');
    mensajeMostrar.classList.remove('mensaje-show');
}
function eventListener() {
    const mostrar = document.querySelector('.hide-tab');
    mostrar.addEventListener('click', mostrartabla);

    const mostrar1 = document.querySelector('.hide-tab1');
    mostrar1.addEventListener('click', mostrartabla1);

    const mostrar2 = document.querySelector('.hide-tab2');
    mostrar2.addEventListener('click', mostrartabla2);

    const mostrarPOP = document.querySelector('.boton-export');
    mostrarPOP.addEventListener('click', mostrarMensaje);
}
function mostrartabla() {
    const tabla = document.querySelector('.hide');
    tabla.classList.toggle('mostrar');
}
function mostrartabla1() {
    const tabla1 = document.querySelector('.hide1');
    tabla1.classList.toggle('mostrar');
}
function mostrartabla2() {
    const tabla2 = document.querySelector('.hide2');
    tabla2.classList.toggle('mostrar');
}
function mostrarMensaje() {
    const mensajeMostrar = document.querySelector('.mensaje');
    mensajeMostrar.classList.toggle('mensaje-show');
    
    cajaMensaje();
}

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}