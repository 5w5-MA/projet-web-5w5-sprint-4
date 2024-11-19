// Sélectionne les boutons et la zone .vide
const buttons = document.querySelectorAll('.option1, .option2, .option3');
const videZone = document.querySelector('.vide');

// Fonction pour sélectionner le bouton "Stage" par défaut
function setDefaultSelection() {
    const stageButton = document.querySelector('.option1');
    const defaultColor = getComputedStyle(stageButton).backgroundColor;

    // Applique la couleur d'origine de "Stage" à la zone .vide
    videZone.style.backgroundColor = defaultColor;

    // Applique le style de sélection par défaut au bouton "Stage"
    stageButton.classList.add('selected-button');
    stageButton.setAttribute('data-selected', 'true');
}

// Fonction de gestion du clic sur les boutons
buttons.forEach(button => {
    button.addEventListener('click', () => {
        // Vérifie si le bouton est déjà sélectionné
        if (button.getAttribute('data-selected') === 'true') return;

        const originalColor = getComputedStyle(button).backgroundColor;
        
        // Change la couleur de la zone .vide en fonction du bouton sélectionné
        videZone.style.backgroundColor = originalColor;

        // Réinitialise tous les boutons
        buttons.forEach(btn => {
            btn.classList.remove('selected-button');
            btn.setAttribute('data-selected', 'false');
        });

        // Applique le style de sélection sur le bouton cliqué
        button.classList.add('selected-button');
        button.setAttribute('data-selected', 'true');
    });
});

// Appelle la fonction de sélection par défaut au chargement de la page
window.onload = setDefaultSelection;
