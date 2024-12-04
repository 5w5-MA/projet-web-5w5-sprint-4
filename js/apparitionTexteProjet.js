let lesDivProjet = document.querySelectorAll(".galerieProjets");
console.log(lesDivProjet.length);

lesDivProjet.forEach(unProjet => {
    unProjet.querySelector(".infoProjet").style.height = "0px";
    unProjet.addEventListener("click", ApparitionTexte);
});


function ApparitionTexte() {
    let ceTexte = this.querySelector(".infoProjet");

    if (ceTexte.style.height == "0px") {

        ceTexte.style.height = "100%";
    } else {

        ceTexte.style.height = "0px";
    }
}
