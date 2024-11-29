let lesDivProjet = document.querySelectorAll(".galerieProjets");
console.log(lesDivProjet.length);

lesDivProjet.forEach(unProjet => {
    unProjet.querySelector(".infoProjet").querySelector("p").style.height = "0px";
    unProjet.addEventListener("click", ApparitionTexte);
});


function ApparitionTexte() {
    let ceTexte = this.querySelector(".infoProjet").querySelector("p");

    if (ceTexte.style.height == "0px") {

        ceTexte.style.height = "max-content";
    } else {

        ceTexte.style.height = "0px";
    }
}
