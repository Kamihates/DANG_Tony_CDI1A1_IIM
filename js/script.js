// Fonction pour ouvrir le modal avec l'image cliquée
function openModal(imageSrc) {
    const modal = document.getElementById("modal");
    const modalImage = document.getElementById("modal-image");
    modalImage.src = imageSrc;
    modal.style.display = "flex";
}

function closeModal() {
    const modal = document.getElementById("modal");
    modal.style.display = "none";
}

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
