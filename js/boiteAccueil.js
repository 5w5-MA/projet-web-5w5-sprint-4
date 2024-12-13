document.addEventListener("DOMContentLoaded", () => {
  // Sélection de la boîte
  const boite = document.querySelector(".boite");

  // Sélection du bouton d'inscription
  const boutonInscription = document.querySelector(".boutton-inscription");

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
     
      
      // Animation des autres éléments
      const imgGraph = boite.querySelector(".titreBoite");
      const infoGraph = boite.querySelector(".infoGraph");
      const boutinInsc = boite.querySelector(".boutton-inscription");

      // Une fois l'animation terminée, afficher le bouton d'inscription progressivement
      boutonInscription.classList.add("bouttonInscriptionApparait");

      imgGraph.classList.add("titreBoiteOuverte");
      infoGraph.classList.add("openedInfoGraph");
  });
});
