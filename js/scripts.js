function gasolWordPress() {
    // Menu hamburguesa
    const hamburger = document.querySelector('.list-icon svg');
    hamburger.addEventListener('click', function() {
        const menuPrincipal = document.querySelector('.contenedor-menu');
        menuPrincipal.classList.toggle('mostrar');
    });

    const submenu = document.querySelector('.menu-item-has-children a');
    const menuList = document.querySelector('.sub-menu');
    submenu.addEventListener('click', function() {
        menuList.classList.toggle('mostrar');
    });
}

function gasolInit() {
    // Menu principal
    const submenu = document.querySelectorAll('.menu-item-has-children a:not(.sub-menu a)');
    submenu.forEach(b=>b.removeAttribute('href'));

    // Tarjetas contraibles
    var listCardCollapsabed = document.querySelectorAll('.card.contraible');
    
    listCardCollapsabed.forEach(cuerpo => {
        var elementCuerpo = cuerpo.querySelector(".cuerpo");
        var elementCabecera = cuerpo.querySelector(".cabecera");
        var elementImg = cuerpo.querySelector(".imagen img");
        var elementArrow = cuerpo.querySelector(".arrow");
        
        elementCuerpo.setAttribute("data-height", elementCuerpo.offsetHeight);
        if (elementImg != null) {
            elementImg.setAttribute("data-height", elementImg.offsetHeight);
            elementImg.style.maxHeight = elementImg.getAttribute("data-height")+"px";
            elementImg.classList.remove("collapse");
        }
        elementCuerpo.style.maxHeight = elementCuerpo.getAttribute("data-height")+"px";
        elementCuerpo.classList.remove("collapse");

        elementCabecera.addEventListener("click", function() {
            if (elementCuerpo.getAttribute("data-height") === "unset" ) {
                elementCuerpo.setAttribute("data-height", elementCuerpo.offsetHeight);
                if (elementImg != null) {
                    elementImg.setAttribute("data-height", elementImg.offsetHeight);
                    elementImg.style.maxHeight = elementImg.getAttribute("data-height")+"px";
                }
                elementCuerpo.style.maxHeight = elementCuerpo.getAttribute("data-height")+"px";
            }
            if (elementCuerpo.classList.contains("collapse")) {
                elementCuerpo.style.maxHeight = elementCuerpo.getAttribute("data-height")+"px";
                elementCuerpo.classList.remove("collapse");
                elementArrow.classList.add("up");
                elementArrow.classList.remove("down");
                if (elementImg != null) {
                    elementImg.style.maxHeight = elementImg.getAttribute("data-height")+"px";
                    elementImg.classList.remove("collapse");
                }
            } else {
                elementCuerpo.style.maxHeight = "0px";
                elementCuerpo.classList.add("collapse");
                elementArrow.classList.add("down");
                elementArrow.classList.remove("up");
                if (elementImg != null) {
                    elementImg.style.maxHeight = "0px";
                    elementImg.classList.add("collapse");
                }
            }
        });
    });
    window.addEventListener('resize', gasolResize);

    // Carrusel
    const slider = document.querySelector('.slider .slider-tarjetas .card-page-list');
    if (slider) {
        const puntos = document.querySelectorAll('.slider .slider-tarjetas .punto');
        const menuItems = document.querySelectorAll('.slider .slider-navegacion .menu-item');
        
        sliderActiveCard(0);
        
        // Recorrer TODOS los puntos
        menuItems.forEach( ( item , i )=> {
            item.addEventListener('click', () => {
                let posicion  = i;
                let nuevaPos = posicion * -100;
                slider.style.transform = `translateX(${ nuevaPos }%)`
                
                sliderActiveCard( i );
            })
        });
        
        // Recorrer TODOS los puntos
        puntos.forEach( ( punto , i )=> {
            punto.addEventListener('click', () => {
                let posicion  = i;
                let nuevaPos = posicion * -100;
                slider.style.transform = `translateX(${ nuevaPos }%)`
                
                sliderActiveCard( i );
            })
        });
        
        function sliderActiveCard( indice ) {
            puntos.forEach( ( punto , i )=>{
                menuItems[i].classList.remove('activo');
                puntos[i].classList.remove('activo');
            })
            menuItems[indice].classList.add('activo');
            puntos[indice].classList.add('activo');
        }
    }
        

}

function gasolResize() {
    var listCardCollapsabed = document.querySelectorAll('.card.contraible');
    listCardCollapsabed.forEach(cuerpo => {
        var elementCuerpo = cuerpo.querySelector(".cuerpo");
        var elementImg = cuerpo.querySelector(".imagen img");
        
        elementCuerpo.style.maxHeight = "unset";
        elementImg.style.maxHeight = "unset";
        elementCuerpo.setAttribute("data-height", "unset");
        elementImg.setAttribute("data-height", "unset");
    });
}

document.addEventListener('DOMContentLoaded', gasolWordPress);
document.addEventListener('DOMContentLoaded', gasolInit);
