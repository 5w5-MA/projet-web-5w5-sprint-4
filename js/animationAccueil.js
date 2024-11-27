document.addEventListener("DOMContentLoaded", function () {
    // Observer pour l'élément .LangProg
    const langProg = document.querySelector(".LangProg");
  
    if (langProg) {
      const langProgObserver = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              // Lorsque l'élément devient visible, ajouter la classe pour déclencher l'animation
              entry.target.classList.add("LangProgVisible");
            }
          });
        },
        { threshold: 0.1 } // 10% visible
      );
  
      // Démarrer l'observation
      langProgObserver.observe(langProg);
    }
  });
  