document.addEventListener("DOMContentLoaded", () => {
    // Sélection de la boîte
    const boite = document.querySelector(".boite");

    // Création de l'observer
    const observer = new IntersectionObserver(
      (entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            // Ajouter l'animation lorsque l'élément est visible
            boite.classList.remove("inactive"); // Supprime la classe pour activer l'animation
            boite.style.animation = "opening 5s cubic-bezier(0.16, 1, 0.3, 1) forwards";

            // Arrête d'observer une fois l'animation déclenchée
            observer.unobserve(boite);
          }
        });
      },
      {
        threshold: 0.5, // L'élément doit être visible à 50% pour déclencher
      }
    );

    // Observer la boîte
    observer.observe(boite);

    // Ajouter l'écouteur pour l'animation finie
    boite.addEventListener("animationend", () => {
      // Une fois l'animation terminée, afficher le contenu progressivement
      const imgGraph = boite.querySelector(".imgGraph");
      const infoGraph = boite.querySelector(".infoGraph");

      imgGraph.classList.add("openedImgGraph");
      infoGraph.classList.add("openedInfoGraph");
    });
});
