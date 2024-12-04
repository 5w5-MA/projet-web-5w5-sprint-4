
//récupérer toutes les div contenant cette classe
let lesDivProjet = document.querySelectorAll(".galerieProjets");
console.log(lesDivProjet.length);

//pour toutes les div donner un height 0 à la div infoprojet
//affecté à la div un event listener 
lesDivProjet.forEach(unProjet => {
    unProjet.querySelector(".infoProjet").style.height = "0px";
    unProjet.addEventListener("click", ApparitionTexte);
});


//fonction pour modifier l'appartition du contenu en modifiant sa taille
function ApparitionTexte() {
    let ceTexte = this.querySelector(".infoProjet");

    if (ceTexte.style.height == "0px") {

        ceTexte.style.height = "100%";
    } else {

        ceTexte.style.height = "0px";
    }
}
