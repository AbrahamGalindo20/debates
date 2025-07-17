const sliderImages = document.querySelectorAll(".slide");
const arrowRigth = document.querySelector(".arrow-right");
const arrowLeft = document.querySelector(".arrow-left");

let numberSlideOnDisplay = 0;


//Eventos
window.addEventListener("DOMContentLoaded", () => {

    //Iniciamos con la primer imagen del slide
    startSlide();

    //Avanzar hacia la izquirda
    arrowLeft.addEventListener("click", slideLeft)

    //Avanzar hacía la derecha
    arrowRigth.addEventListener("click", slideRigth)
}); 
//Limpia las imagenes del Slider
function reset() {

    for( let i = 0; i < sliderImages.length; i++) {
        sliderImages[i].style.display = "none";
    }
}

//Inicia con la primer imagen del slider
function startSlide() {
    reset();
    sliderImages[0].style.display = "block";
}

//Mostrar anterior 
function slideLeft() {

    reset();
    if(numberSlideOnDisplay === 0) {
        numberSlideOnDisplay = sliderImages.length-1;
        sliderImages[numberSlideOnDisplay].style.display = "block";
        

    } else {
        sliderImages[numberSlideOnDisplay - 1].style.display = "block";
        numberSlideOnDisplay --;
        
    }
    
}

//Mostrar siguiente
function slideRigth() {
    reset();

    if(numberSlideOnDisplay === sliderImages.length - 1) {
        numberSlideOnDisplay = 0;
        sliderImages[numberSlideOnDisplay].style.display = "block";
        
    } else {

        sliderImages[numberSlideOnDisplay + 1].style.display = "block";
        numberSlideOnDisplay ++;
        
    }
}

//Slider automatico 
function sliderAutomatic() {

    reset();

    if(numberSlideOnDisplay === sliderImages.length - 1) {
        numberSlideOnDisplay = 0;
        sliderImages[numberSlideOnDisplay].style.display = "block";
    } else {

        sliderImages[numberSlideOnDisplay + 1].style.display = "block";
        numberSlideOnDisplay ++;
    }
    
}
setInterval(slideRigth, 50000000); 

function abrirEnlace() {
    // Obtener el elemento select
    var selectElement = document.getElementById("enlaces");

    // Obtener el valor seleccionado
    var selectedValue = selectElement.value;
    var link = "./test.php?it=" + selectedValue;


    window.location.href = link;

}