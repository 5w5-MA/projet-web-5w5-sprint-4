let boutonMenu = document.querySelector('.Partie1');
let selectionMenu = document.querySelector(".boutonMenuProjet");
let menuDeroulant = document.querySelector('.menuDeroulant');
let lesBoutons = document.querySelectorAll('.boutonFiltreProjet');
let enfants = document.querySelectorAll('.Rangee2 .galerieProjets');

let menuVisible = false;

boutonMenu.addEventListener('click', () => {

    if (menuVisible == false) {
        menuDeroulant.style.height = 'auto';

        menuVisible = true;
    } else {
        menuVisible = false;
        menuDeroulant.style.height = '0px';
    }

})

lesBoutons.forEach(element => {
    element.addEventListener('click', () => {
        menuDeroulant.style.height = '0px';

        if (element.innerHTML == 'Tout') {
            selectionMenu.innerHTML = "&#x2193;";
            enfants.forEach(enfant => {
                enfant.style.display = 'flex';
            })

        }
        else {
            selectionMenu.innerHTML = element.innerHTML;
            enfants.forEach(enfant => {
                //diviser les classes
                let tableauClasses = enfant.className.split(" ");

                if (tableauClasses[0] != element.innerHTML.toLowerCase()) {
                    enfant.style.display = 'none';
                }
                else {
                    enfant.style.display = 'flex';
                }

            })
        }
    })
});