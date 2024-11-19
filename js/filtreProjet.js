let boutonMenu = document.querySelector('.boutonMenuProjet');
let menuDeroulant = document.querySelector('.menuDeroulant');
let lesBoutons = document.querySelectorAll('.boutonFiltreProjet');
let enfants = document.querySelectorAll('.Rangee2 div');

let menuVisible = false;

boutonMenu.addEventListener('click',()=>{

    if(menuVisible == false){
        menuDeroulant.style.height = 'auto';
        menuVisible  = true;
    }else{
        menuDeroulant.style.height = '0px';
        menuVisible = false;
    }
    
})

lesBoutons.forEach(element => {
    element.addEventListener('click', () => {
     
        if(element.innerHTML=='Tout'){
            boutonMenu.innerHTML= "-";
            enfants.forEach(enfant => {
                enfant.style.display = 'flex';
            })  
        }
        else{
            boutonMenu.innerHTML= element.innerHTML;
            enfants.forEach(enfant => {
                if(enfant.className != element.innerHTML.toLowerCase()){
                    enfant.style.display = 'none';
                }
                else{
                    enfant.style.display = 'flex';
                }
            })
        }
    })
});