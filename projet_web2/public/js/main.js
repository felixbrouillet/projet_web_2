// ******************************************************************************************************************
// NAV
// ******************************************************************************************************************

// ICONE DE MENU HAMBURGER
// ********************************

// Icône du menu hamburger
const hamburgerIcon = document.querySelector(".hamburger-icon");

// Liens du menu
const menuLinks = document.querySelector(".menu-links");

// Icône de fermeture
const closeIcon = document.getElementById("closeIcon");

// Ajouter un gestionnaire d'événements pour le clic sur l'icône du menu hamburger
hamburgerIcon.addEventListener("click", function() {
    // Ajoutez la classe "show" pour afficher les liens avec l'animation
    menuLinks.classList.add("show");
});

// Ajouter un gestionnaire d'événements pour le clic sur l'icône de fermeture
closeIcon.addEventListener("click", function() {
    // Supprimez la classe "show" pour masquer les liens avec l'animation
    menuLinks.classList.remove("show");
});


// ICONE DE COMPTE
// ********************************

// Icône du compte utilisateur
const compteIcon = document.getElementById("compteIcon");

// Sous-menu du compte utilisateur
const compteMenu = document.getElementById("compteMenu");

// Icône de fermeture du sous-menu utilisateur
const closeCompteMenuIcon = document.getElementById("closeCompteMenuIcon");

// Ajouter un gestionnaire d'événements pour le clic sur l'icône du compte utilisateur
compteIcon.addEventListener("click", function() {
    // Basculer la classe "show" pour afficher ou masquer le sous-menu
    compteMenu.classList.toggle("show");
});

// Ajouter un gestionnaire d'événements pour le clic sur l'icône de fermeture du sous-menu utilisateur
closeCompteMenuIcon.addEventListener("click", function() {
    // Masquer le sous-menu en supprimant la classe "show"
    compteMenu.classList.remove("show");
});



const cursor = document.getElementById('cursor');

document.addEventListener('mousemove', (e) => {
  cursor.style.left = e.clientX + 'px';
  cursor.style.top = e.clientY + 'px';
});

document.addEventListener('scroll', () => {
  const { clientX, clientY } = getLastCursorPosition();
  updateCursorPosition(clientX, clientY);
});

function getLastCursorPosition() {
  return {
    clientX: parseFloat(cursor.style.left) || 0,
    clientY: parseFloat(cursor.style.top) || 0,
  };
}

function updateCursorPosition(x, y) {
  const scrollX = window.scrollX || window.pageXOffset;
  const scrollY = window.scrollY || window.pageYOffset;

  cursor.style.left = x + scrollX + 'px';
  cursor.style.top = y + scrollY + 'px';
}
