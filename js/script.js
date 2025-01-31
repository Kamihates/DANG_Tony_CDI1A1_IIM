let menuBtn = document.querySelector('#menu-btn'); // Hamburger menu
let navbar = document.querySelector('.header .navbar'); // Navbar
let modal = document.querySelector('#modal');
let modalImage = document.querySelector('#modal-image');
let loginModal = document.querySelector('#login-modal') // Bouton login
let musicBtn = document.querySelector('#music-btn'); // Bouton de musique

menuBtn.onclick = () =>{
   menuBtn.classList.toggle('fa-times');
   navbar.classList.toggle('active');
};


// Evenement pour la musique
musicBtn.addEventListener("click", () => {
    if (son1.paused) {
        son1.play();
    }
    else {
        son1.pause();
    }
});

// Fonction pour ouvrir ou fermer la modal de connexion
function toggleLoginModal() {
  if (loginModal.style.display === 'block') {
    loginModal.style.display = 'none';
  } else {
    loginModal.style.display = 'block';
  }
}

// Fermeture automatique de la modal si on clique en dehors
window.onclick = function (event) {
  // Fermeture du modal login
  if (event.target === loginModal) {
    loginModal.style.display = 'none';
  }
  // Fermeture du modal carte
  if (event.target === modal) {
    modal.style.display = "none";
  }
};

// Fonction pour dark mode
function darkMode() {
    var element = document.body;
    element.classList.toggle("dark-mode");
}

// Evenement lors du scroll
window.onscroll = () =>{
   menuBtn.classList.remove('fa-times');
   navbar.classList.remove('active');
   loginModal.style.display = 'none';
   modal.style.display = "none";

   if(window.scrollY > 650){
      document.querySelector('.header').classList.add('active');
   }else{
      document.querySelector('.header').classList.remove('active');
   };
};


// Fonction pour ouvrir le modal d'une carte
function openModal(imageSrc) {
    modalImage.src = imageSrc;
    modal.style.display = "flex";
}

// Fonction pour fermer le modal d'une carte
function closeModal() {
    modal.style.display = "none";
}

// Fonction pour filtrer les cartes
function filterCards(category) {
    const cards = document.querySelectorAll('.card');
    const buttons = document.querySelectorAll('.buttons button');

    // Afficher/masquer les cartes selon la catégorie
    cards.forEach(card => {
        if (category === 'all') {
            card.style.display = 'block';
        } else {
            if (card.classList.contains(category)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        }
    });

    // Mettre à jour le bouton actif
    buttons.forEach(button => {
        button.classList.remove('active'); // Retirer la classe 'active' de tous les boutons
    });

    // Ajouter la classe 'active' au bouton cliqué
    document.querySelector(`.buttons button[onclick="filterCards('${category}')"]`).classList.add('active');
}

var swiper = new Swiper(".mySwiper", {
  effect: "flip",
  grabCursor: true,
  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 2000, // 2 secondes
    disableOnInteraction: false, // Ne pas désactiver l'autoplay après une interaction
  },
  loop: true, // Revenir au premier slide après le dernier
  on: {
    slideChange: function () {
      // Récupérer le nom de la carte à partir de l'attribut data-name du slide actif
      const activeSlide = this.slides[this.activeIndex];
      const cardName = activeSlide.getAttribute('data-name');

      // Afficher le nom de la carte dans l'élément #card-name
      document.getElementById('card-name').textContent = cardName;
    },
  },
});
