// Sélection des éléments du DOM pour interagir avec la page
let menuBtn = document.querySelector('#menu-btn'); // Bouton hamburger pour afficher/masquer la navigation
let navbar = document.querySelector('.header .navbar'); // Menu de navigation
let modal = document.querySelector('#modal'); // Modal pour afficher les images en grand
let modalImage = document.querySelector('#modal-image'); // Image à afficher dans le modal
let loginModal = document.querySelector('#login-modal'); // Modal de connexion
let musicBtn = document.querySelector('#music-btn'); // Bouton de musique

// Fonction pour activer/désactiver la navigation mobile (hamburger menu)
menuBtn.onclick = () =>{
   menuBtn.classList.toggle('fa-times'); // Ajoute ou enlève l'icône "fa-times" pour le menu mobile
   navbar.classList.toggle('active'); // Affiche ou cache le menu de navigation
};

// Événement pour contrôler la musique via le bouton
musicBtn.addEventListener("click", () => {
    // Si la musique est en pause, on la lance, sinon on la met en pause
    if (son1.paused) {
        son1.play(); // Lecture de la musique
    }
    else {
        son1.pause(); // Pause de la musique
    }
});

// Fonction pour ouvrir ou fermer la modal de connexion
function toggleLoginModal() {
  if (loginModal.style.display === 'block') {
    loginModal.style.display = 'none'; // Ferme la modal si elle est déjà ouverte
  } else {
    loginModal.style.display = 'block'; // Ouvre la modal si elle est fermée
  }
}

// Fermeture des modals lorsque l'utilisateur clique en dehors d'elles
window.onclick = function (event) {
  // Si l'utilisateur clique sur la modal de connexion, on la ferme
  if (event.target === loginModal) {
    loginModal.style.display = 'none';
  }
  // Si l'utilisateur clique sur la modal d'image, on la ferme
  if (event.target === modal) {
    modal.style.display = "none";
  }
};

// Fonction pour activer/désactiver le mode sombre
function darkMode() {
    var element = document.body; // Sélectionne l'élément body
    element.classList.toggle("dark-mode"); // Ajoute ou enlève la classe dark-mode pour activer/désactiver le mode sombre
}

// Fonction qui gère le comportement du menu lors du scroll
window.onscroll = () =>{
   // Lorsque l'utilisateur scroll, on ferme le menu mobile et les modals
   menuBtn.classList.remove('fa-times');
   navbar.classList.remove('active');
   loginModal.style.display = 'none';
   modal.style.display = "none";

   // Si le scroll dépasse 650px, on affiche la navigation en haut de la page
   if(window.scrollY > 650){
      document.querySelector('.header').classList.add('active');
   }else{
      document.querySelector('.header').classList.remove('active');
   };
};

// Fonction pour ouvrir une modal avec une image en grand
function openModal(imageSrc) {
    modalImage.src = imageSrc;  // On affecte la source de l'image à afficher dans la modal
    modal.style.display = "flex";  // Affiche la modal
}

// Fonction pour fermer la modal d'image
function closeModal() {
    modal.style.display = "none";  // Cache la modal
}

// Variables pour gérer la pagination et les filtres de cartes
let currentPage = 1;
let currentFilter = 'all';

// Fonction asynchrone pour filtrer les cartes selon une catégorie et une page
async function filterCards(category, page = 1) {
    currentFilter = category; // Met à jour le filtre actuel
    currentPage = page; // Met à jour la page actuelle

    const buttons = document.querySelectorAll('.buttons button'); // Récupère tous les boutons de filtre

    try {
        // Effectue un appel AJAX pour récupérer les cartes filtrées
        const response = await fetch(`../php/displaycards.php?filter=${category}&page=${page}`);
        if (!response.ok) throw new Error("Erreur lors de la recherche"); // Si la requête échoue, on lance une erreur

        const html = await response.text(); // Récupère le HTML des cartes filtrées
        document.getElementById("card-container").innerHTML = html; // Affiche les cartes filtrées
        document.getElementById("page-number").textContent = currentPage; // Met à jour le numéro de la page

        // Applique un événement de clic à chaque carte pour ouvrir la modal de l'image
        const cards = document.querySelectorAll('.card img');
        cards.forEach(card => {
            card.onclick = function () {
                openModal(card.src); // Affiche l'image en grand dans la modal
            }
        });

        // Mise à jour de l'apparence des boutons de filtre pour indiquer lequel est actif
        buttons.forEach(button => {
            button.classList.remove('active');
        });
        const activeButton = document.querySelector(`button[onclick="filterCards('${category}')"]`);
        if (activeButton) activeButton.classList.add('active');

    } catch (error) {
        console.error("Erreur lors du filtrage des cartes:", error); // Si une erreur survient, on la loggue
    }
}

// Fonction pour changer de page dans les filtres de cartes
function changePage(offset) {
    if (currentPage + offset <= 0) return; // Ne permet pas d'aller à une page avant la première
    filterCards(currentFilter, currentPage + offset); // Charge la page suivante/précédente
}

// Initialisation du Swiper (carrousel) pour les cartes
var swiper = new Swiper(".mySwiper", {
  effect: "flip", // Effet de flip lors du changement de slide
  grabCursor: true, // Permet de saisir et glisser les slides
  pagination: {
    el: ".swiper-pagination", // Pagination pour naviguer entre les slides
  },
  navigation: {
    nextEl: ".swiper-button-next", // Bouton pour passer au slide suivant
    prevEl: ".swiper-button-prev", // Bouton pour revenir au slide précédent
  },
  autoplay: {
    delay: 2000, // Intervalle de 2 secondes entre chaque slide
    disableOnInteraction: false, // L'autoplay ne s'arrête pas après une interaction
  },
  loop: true, // Permet de revenir au premier slide après le dernier
  on: {
    slideChange: function () {
      // Récupère le nom de la carte du slide actif et l'affiche
      const activeSlide = this.slides[this.activeIndex];
      const cardName = activeSlide.getAttribute('data-name');
      document.getElementById('card-name').textContent = cardName;
    },
  },
});
