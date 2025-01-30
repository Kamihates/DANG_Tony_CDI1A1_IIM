<!DOCTYPE html>
<html lang="fr">
<html>
<head>
  <!-- Début section header  -->

  <?php include 'php/header.php'; ?>

  <!-- Fin section header  -->
</head>
<body>
  <!-- Début section home  -->

  <section class="home" id="home">

    <div class="content">
      <h3>Pokémon</h3>
      <p>Cartes à jouer et à collectionner</p>
      <a href="php/morecards.php" class="btn">Voir nos cartes</a>
    </div>

    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide" data-name="Latios">
          <img src="images/cartes/LatiosSpé.png" alt="Latios Spécial">
        </div>
        <div class="swiper-slide" data-name="Créfollet">
          <img src="images/cartes/CréfolletSpé.png" alt="Créfollet Spécial">
        </div>
        <div class="swiper-slide" data-name="Milobellus EX">
          <img src="images/cartes/MilobellusEX.png" alt="Milobellus EX">
        </div>
        <div class="swiper-slide" data-name="Pikachu EX">
          <img src="images/cartes/PikachuEX.png" alt="Pikachu EX">
        </div>
        <div class="swiper-slide" data-name="Malvalame EX">
          <img src="images/cartes/MalvalameEX.png" alt="Malvalame EX">
        </div>
        <div class="swiper-slide" data-name="Fulgulairo EX">
          <img src="images/cartes/FulgulairoEX.png" alt="Fulgulairo EX">
        </div>
      </div>
    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div id="card-name" class="card-name"></div>

  </section>

  <!-- Fin section home -->

  <!-- Début section about  -->

  <section class="about" id="about">

    <div class="image">
      <img src="../images/charizard-revised-fr-unscreen.gif" alt="">
    </div>

    <div class="content">
      <h2>Qu'est-ce que c'est?</h2>
      <h3>Le jeu de cartes à collectionner Pokémon ! </h3>
      <p>Collectionnez des cartes à l’effigie de vos Pokémon préférés. Ce jeu fortement fédérateur a été distribué dans 14 langues et 89 pays ou régions, donnant aux fans du monde entier l’occasion de plonger dans l’univers Pokémon !</p>
      <a href="https://tcgpocket.pokemon.com/fr-fr/" class="btn">Site officiel Pokémon</a>
    </div>

  </section>

  <!-- Fin section about -->

  <!-- Début section cards -->

  <section class="cards" id="cards">
    <h1 class="heading">Cartes en vedette</h1>
    <p>Cliquez sur une carte pour la voir de plus près</p>

    <div class="card-row">

      <div class="card-container">
        <img src="../images/card1.png" alt="Carte Vedette 1" class="card" onclick="openModal('../images/card1.png')">
        <button class="zoom-button" onclick="openModal('../images/card1.png')">
          <i class="fas fa-search"></i>
        </button>
      </div>

      <div class="card-container">
        <img src="../images/card2.png" alt="Carte Vedette 2" class="card" onclick="openModal('../images/card2.png')">
        <button class="zoom-button" onclick="openModal('../images/card2.png')">
          <i class="fas fa-search"></i>
        </button>
      </div>

      <div class="card-container">
        <img src="../images/card3.gif" alt="Carte Vedette 3" class="card" onclick="openModal('../images/card3.gif')">
        <button class="zoom-button" onclick="openModal('../images/card3.gif')">
          <i class="fas fa-search"></i>
        </button>
      </div>

      <div class="card-container">
        <img src="../images/card4.gif" alt="Carte Vedette 4" class="card" onclick="openModal('../images/card4.gif')">
        <button class="zoom-button" onclick="openModal('../images/card4.gif')">
          <i class="fas fa-search"></i>
        </button>
      </div>

    </div>

    <a href="php/morecards.php" class="btn">Voir plus de cartes</a>


    <div id="modal" class="modal">
      <span class="close" onclick="closeModal()">&times;</span>
      <img class="modal-content" id="modal-image">
    </div>
  </section>

  <!-- Fin section cards -->

  <!-- Début section team  -->

  <section class="review" id="review">

    <h1 class="heading">Avis utilisateurs</h1>

    <div class="box-container">

      <div class="box">
        <img src="images/gunderella.webp" class="user" alt="">
        <h3>Elise</h3>
        <p>Attrapez les tous ! Toutes les cartes sont collectables sans dépenser d'argent ce qui est parfait si vous n'avez pas les moyens !</p>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
      </div>

      <div class="box">
        <img src="images/scrapss.webp" class="user" alt="">
        <h3>Scrapss</h3>
        <p>Merci de nous faire retomber en enfance, c'est vraiment incroyable! J'ai toujours aimé collectionner les cartes Pokémon</p>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>

      </div>

      <div class="box">
        <img src="images/LA8.png" class="user" alt="">
        <h3>LA8</h3>
        <div class="stars">
          <p>J'aime beaucoup, étant un fan de Pokémon depuis petit, j'ai toujours aimé les jeux Pokémon et les cartes à collectionner!</p>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>

      </div>

    </div>

  </section>

  <!-- Fin section team -->

  <!-- Début section footer  -->

  <?php include 'php/footer.php'; ?>

  <!-- Fin section footer -->

  <!-- Link script js   -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="js/script.js"></script>

</body>
</html>
