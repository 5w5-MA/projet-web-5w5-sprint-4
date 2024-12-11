let boutonMenu = document.querySelector('.Partie1');
let menuDeroulant = document.querySelector('.menuDeroulant');
let lesBoutons = document.querySelectorAll('.boutonFiltreProjet');
let enfants = document.querySelectorAll('.Rangee2 .galerieProjets');

let menuVisible = false;

boutonMenu.addEventListener('click', () => {

    if (menuVisible == false) {
        menuDeroulant.style.height = 'auto';
        menuVisible = true;
    } else {
        menuDeroulant.style.height = '0px';
        menuVisible = false;
    }

})

lesBoutons.forEach(element => {
    element.addEventListener('click', () => {

        if (element.innerHTML == 'Tout') {
            boutonMenu.innerHTML = "&#x2193;";
            enfants.forEach(enfant => {
                enfant.style.display = 'flex';
            })
            menuDeroulant.style.height = '0px';
            menuVisible = false;
        }
        else {
            boutonMenu.innerHTML = element.innerHTML;
            enfants.forEach(enfant => {
                //diviser les classes
                let tableauClasses = enfant.className.split(" ");

                if (tableauClasses[0] != element.innerHTML.toLowerCase()) {
                    enfant.style.display = 'none';
                }
                else {
                    enfant.style.display = 'flex';
                }
                menuDeroulant.style.height = '0px';
                menuVisible = false;
            })
        }
    })
});