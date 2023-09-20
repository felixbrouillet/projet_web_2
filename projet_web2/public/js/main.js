// ******************************************************************************************************************
// NAV
// ******************************************************************************************************************

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






