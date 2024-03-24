function gasolWordPress() {
    // Menu hamburguesa
    const hamburger = document.querySelector('.list-icon');
    const icon = hamburger.querySelector('.burger-menu');
    hamburger.addEventListener('click', function() {
        const menuPrincipal = document.querySelector('.contenedor-menu');
        menuPrincipal.classList.toggle('mostrar');
        icon.classList.toggle('cross');
    });

    const submenu = document.querySelector('.menu-item-has-children');
    const menuList = document.querySelector('.sub-menu');
    submenu.addEventListener('click', function() {
        menuList.classList.toggle('mostrar');
        submenu.classList.toggle('clicked');
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
        slider.dataset.mouseDownAt = "0";  
        slider.dataset.percentage = "0";
        let posicionActual = 0;
        let posicionNueva = 0;
        let indiceActual = 0;
        let indiceMaximo = menuItems.length -1;
        let mouseDownEvent = false;
        let autoslide = null;
        let tiemSlider = 3500;
        
        sliderActiveCard(0);

        // Deshabilitar drag and drop
        slider.addEventListener('dragstart', event => {
            event.preventDefault();
        });
        
        slider.addEventListener('drop', event => {
            event.preventDefault();
        });
        
        // Funciones al clickear sobre menu
        menuItems.forEach( ( item , i )=> {
            item.addEventListener('click', () => {
                indiceActual = i;                
                sliderActiveCard( i );
                startAutoSlider();
            })
        });
        
        // Funciones al clickear sobre puntos
        puntos.forEach( ( punto , i )=> {
            punto.addEventListener('click', () => {
                indiceActual = i;                
                sliderActiveCard( i );
                startAutoSlider();
            })
        });

        // Funciones al hacer scroll en el carrusel
        slider.addEventListener('touchstart', onHoldClick);
        slider.addEventListener('touchend', onLeaveClick);
        slider.addEventListener('touchmove', onMove);

        slider.addEventListener('mousedown', onHoldClick);
        slider.addEventListener('mouseup', onLeaveClick);
        slider.addEventListener('mousemove', onMove);
        slider.addEventListener('mouseover', stopAutoSlider);
        slider.addEventListener('mouseleave', startAutoSlider);
        
        function onHoldClick(event) {
            // Detengo el scroll automatico
            stopAutoSlider();
            // Veo donde hago click
            if( event.clientX === undefined ){
                slider.dataset.mouseDownAt = event.touches[0].clientX
            }
            else {
                slider.dataset.mouseDownAt = event.clientX;
            }
            mouseDownEvent = true;
        }

        function onLeaveClick(event) {
            let pointX = 0;
            if( event.clientX === undefined ){
                pointX = event.changedTouches[0].clientX
            }
            else {
                pointX= event.clientX;
            }
            // Veo donde suelto el mouse
            if (Math.abs(slider.dataset.mouseDownAt - pointX) < 20 ) {
                // Si la posición entre donde se hace click y donde se suelta no hay mucha dierencia, se mantiene posición
                sliderActiveCard( indiceActual );
            }
            else {
                if (slider.dataset.mouseDownAt > pointX) {
                    // Deslizo a izquierda
                    if (indiceActual < indiceMaximo) {
                        // puedo cambiar
                        sliderActiveCard( ++indiceActual );
                    }
                    else {
                        sliderActiveCard( indiceActual );
                    }
                }
                else {  
                    // Deslizo a derecha
                    if (indiceActual > 0) {
                        // puedo cambiar
                        sliderActiveCard( --indiceActual );
                    }
                    else {
                        sliderActiveCard( indiceActual );
                    }
                }
            }

            // Reinicio la posicion
            slider.dataset.mouseDownAt = "0";  
            slider.dataset.prevPercentage = slider.dataset.percentage;
            mouseDownEvent = false;

            // Arranco el scroll automatico
            startAutoSlider();
        }

        function onMove(event) {
            let pointX = 0;
            if( event.clientX === undefined ){
                pointX = event.touches[0].clientX
            }
            else {
                pointX= event.clientX;
            }
            const mouseDelta = parseFloat(slider.dataset.mouseDownAt) - pointX;
      
            let percentage = (mouseDelta / slider.offsetWidth) * -100;
            posicionNueva = Math.max(Math.min(posicionActual + percentage, 10), (indiceMaximo * -100) - 10 );
            
            if ( mouseDownEvent ) {
                slider.style.transform = `translateX(${ posicionNueva }%)`
            }
        }

        function sliderActiveCard( indice ) {
            if(indice > indiceMaximo){
                indiceActual = indiceMaximo;
            }
            else if(indice < 0){
                indiceActual = 0;
            }
            indice = indiceActual;

            posicionActual = indice * -100;
            slider.style.transform = `translateX(${ posicionActual }%)`

            puntos.forEach( ( punto , i )=>{
                menuItems[i].classList.remove('activo');
                puntos[i].classList.remove('activo');
            })
            menuItems[indice].classList.add('activo');
            puntos[indice].classList.add('activo');
        }

        function startAutoSlider() {
            clearInterval(autoslide);
            autoslide = setInterval(function(){
                            if(indiceActual == indiceMaximo){
                                indiceActual = 0;
                            }
                            else{
                                indiceActual++;
                            }
                            sliderActiveCard( indiceActual );
                        }, tiemSlider);
        }

        function stopAutoSlider() {
            clearInterval(autoslide);
        }

        startAutoSlider();
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
