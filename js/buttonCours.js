window.addEventListener("load", () => {
  let main = document.querySelector("main");

  if (main.id != "cours") {
    localStorage.setItem("doitReload", "true");
  }

  if (main.id === "acceuil") {
    // Sélectionner l'élément avec la classe "custom-logo"
    var logo = document.querySelector(".custom-logo");
    let menuBurger = document.getElementById("menuBurger");

    menuBurger.style.position = "absolute";
    menuBurger.style.top = "0.5vh";
    menuBurger.style.right = "1vw";

    // Vérifier si l'élément existe avant de modifier la propriété
    if (logo) {
      logo.style.position = "absolute"; // Vous pouvez changer 'relative' par 'absolute', 'fixed', etc.
    }
  }
});

let btns = [
  {
    btn: document.getElementsByClassName("btnSession1")[0],
    wrap: document.getElementsByClassName("btnSession1Wrap")[0],
    chk: document.getElementById("chkBtnSession1"),
  },
  {
    btn: document.getElementsByClassName("btnSession2")[0],
    wrap: document.getElementsByClassName("btnSession2Wrap")[0],
    chk: document.getElementById("chkBtnSession2"),
  },
  {
    btn: document.getElementsByClassName("btnSession3")[0],
    wrap: document.getElementsByClassName("btnSession3Wrap")[0],
    chk: document.getElementById("chkBtnSession3"),
  },
  {
    btn: document.getElementsByClassName("btnSession4")[0],
    wrap: document.getElementsByClassName("btnSession4Wrap")[0],
    chk: document.getElementById("chkBtnSession4"),
  },
  {
    btn: document.getElementsByClassName("btnSession5")[0],
    wrap: document.getElementsByClassName("btnSession5Wrap")[0],
    chk: document.getElementById("chkBtnSession5"),
  },
  {
    btn: document.getElementsByClassName("btnSession6")[0],
    wrap: document.getElementsByClassName("btnSession6Wrap")[0],
    chk: document.getElementById("chkBtnSession6"),
  },
];

function loadCheckState() {
  if (btns[0].chk != null) {
    for (let i = 0; i < btns.length; i++) {
      if (localStorage.getItem("checked" + i) == "true") {
        btns[i].chk.checked = true;
        gestionChangementCheckbox(btns[i].chk);
      } else {
        btns[i].chk.checked = false;
      }
    }
  }
}

window.addEventListener("load", loadCheckState);

function gestionChangementCheckbox(changeChk) {
  btns.forEach(({ btn, wrap, chk }) => {
    if (chk === changeChk) {
      if (chk.checked) {
        btn.classList.add("actif");
        wrap.classList.add("wrapActif");
      } else {
        btn.classList.remove("actif");
        wrap.classList.remove("wrapActif");
      }
    } else {
      chk.checked = false;
      btn.classList.remove("actif");
      wrap.classList.remove("wrapActif");
    }
  });
}

if (btns[0].chk != null) {
  btns.forEach(({ chk }) => {
    chk.addEventListener("change", function () {
      gestionChangementCheckbox(this);
    });
  });
}

let varDyna = {};

let lesForms = [
  {
    form: document.getElementById("form1"),
  },
  {
    form: document.getElementById("form2"),
  },
];

document.addEventListener("change", (evt) => {
  let event = evt.target;

  console.log(event.id);

  for (let i = 0; i < btns.length; i++) {
    let checkbox = btns[i].chk;

    let nomVar = "checked" + i;

    varDyna[nomVar] = btns[i].chk.checked;

    let nbr = i + 1;

    if (btns[i].chk.checked == true) {
      localStorage.setItem("checked" + i, "true");
      if (event.id == "chkBtnSession" + nbr) {
        window.location.reload();
      }
    } else {
      localStorage.setItem("checked" + i, "false");
    }
  }
});

if (btns[0].chk != null) {
  document.addEventListener("DOMContentLoaded", function () {
    // Fonction pour gérer les changements dans les checkboxes
    function handleCheckboxChange(formClass) {
      const form = document.querySelector(formClass);

      // Écoute l'événement 'change' sur le formulaire
      form.addEventListener("change", function () {
        // Récupère toutes les checkboxes sélectionnées dans ce formulaire
        const checkedCategories = [];
        const checkboxes = form.querySelectorAll(
          'input[type="checkbox"]:checked'
        );

        // Pour chaque checkbox sélectionnée, ajoute sa valeur au tableau
        checkboxes.forEach(function (checkbox) {
          checkedCategories.push(checkbox.value);
        });

        // Met à jour l'URL pour inclure les catégories sélectionnées
        updateURL(checkedCategories);
      });
    }

    // Fonction pour mettre à jour l'URL avec les catégories sélectionnées
    function updateURL(checkedCategories) {
      let url = new URL(window.location.href);
      if (checkedCategories.length > 0) {
        url.searchParams.set("categories", checkedCategories.join(","));
      } else {
        url.searchParams.delete("categories"); // Supprime le paramètre s'il n'y a pas de catégorie sélectionnée
      }
      window.history.replaceState(null, "", url.toString()); // Met à jour l'URL sans recharger la page
    }

    // Applique la fonction aux deux formulaires
    handleCheckboxChange(".displayFlexBtn1");
    handleCheckboxChange(".displayFlexBtn2");
  });
}

//

// Fonction pour mettre à jour l'URL avec les catégories sélectionnées
function updateURL() {
  const checkedCategories = [];

  // Parcours toutes les checkboxes pour récupérer celles qui sont cochées
  btns.forEach(({ chk }) => {
    if (chk.checked) {
      checkedCategories.push(chk.value);
    }
  });

  // Crée l'URL à partir de l'URL actuelle
  let url = new URL(window.location.href);

  if (checkedCategories.length > 0) {
    // Si des catégories sont sélectionnées, on les ajoute dans l'URL
    url.searchParams.set("categories", checkedCategories.join(","));
  } else {
    // Si aucune catégorie n'est sélectionnée, on supprime le paramètre 'categories'
    url.searchParams.delete("categories");
  }

  // Met à jour l'URL sans recharger la page
  window.history.replaceState(null, "", url.toString());
}

// Fonction pour charger l'état des checkboxes et mettre à jour l'URL au démarrage
function initializeFromCheckboxes() {
  // On crée une liste des catégories sélectionnées
  if (btns[0].chk != null) {
    const checkedCategories = [];

    btns.forEach(({ chk }) => {
      if (chk.checked) {
        checkedCategories.push(chk.value); // Ajoute la valeur de la checkbox cochée
      }
    });

    // Si des catégories sont déjà sélectionnées, on met à jour l'URL
    if (checkedCategories.length > 0) {
      let url = new URL(window.location.href);
      url.searchParams.set("categories", checkedCategories.join(","));
      window.history.replaceState(null, "", url.toString());
    }
  }
}

// Fonction pour gérer les changements d'état des checkboxes
function handleCheckboxChanges() {
  // Écoute les événements de changement pour chaque checkbox
  if (btns[0].chk != null) {
    btns.forEach(({ chk }) => {
      chk.addEventListener("change", updateURL);
    });
  }
}

const lSDR = localStorage.getItem("doitReload");

if (lSDR == null) {
  localStorage.setItem("doitReload", "true");
  window.location.reload();
}

let doitReload = true;

// Initialisation des checkboxes au chargement de la page
window.addEventListener("load", () => {
  if (lSDR == "false") {
    doitReload = false;
  }

  // Si on arrive sur la page et qu'il n'y a pas de paramètre 'categories' dans l'URL,
  // alors on doit mettre à jour l'URL avec l'état actuel des checkboxes.
  initializeFromCheckboxes();
  handleCheckboxChanges(); // Ajoute les écouteurs d'événements
  if (doitReload == true) {
    setTimeout(() => {
      window.location.reload();
    }, 0);
    localStorage.setItem("doitReload", "false");
  }
});
