<!DOCTYPE html>
<html lang="fr">
<html>
	<head>

		<?php include '../php/header.php'; ?>
		  <?php include '../php/config.php'; ?>

    <link rel="stylesheet" href="../css/morecards.css">

	</head>

	<body>

    <!-- Début section home  -->

    <section class="home" id="home">

      <div class="content">
        <h3>Cartedex Pokémon</h3>
        <p>Découvrez l'univers du jeu de cartes à collectionner Pokémon !</p>
      </div>

    </section>

    <!-- Fin section home -->

		<!-- Début section morecards -->

		<section class="morecards" id="morecards">

		    <div class="buttons">
		        <button onclick="filterCards('all')" class="btn active">Tout Afficher</button>
		        <button onclick="filterCards('Pokémon Tool')" class="btn">Outil Pokémon</button>
		        <button onclick="filterCards('Supporter')" class="btn">Supporters</button>
						<button onclick="filterCards('EX')" class="btn">Pokémon-EX</button>
						<button onclick="filterCards('VMAX')" class="btn">VMAX</button>
						<button onclick="filterCards('VSTAR')" class="btn">VSTAR</button>

		    </div>

				<div class="card-container" id="card-container"></div>

				<div id="modal" class="modal">
					<span class="close" onclick="closeModal()">&times;</span>
					<img class="modal-content" id="modal-image">
				</div>

				<div class="pagination" id="pagination">
				  <button onclick="changePage(-1)" class="pagination-btn">
				    <i class="fas fa-chevron-left"></i>
				  </button>
				  <span id="page-number">1</span>
				  <button onclick="changePage(1)" class="pagination-btn">
				    <i class="fas fa-chevron-right"></i>
				  </button>
				</div>

		</section>

		<!-- Fin section morecards -->

		<!-- Début section footer  -->

	  <?php include '../php/footer.php'; ?>

	  <!-- Fin section footer -->

		<!-- Link script js   -->
		<script src="../js/script.js"></script>

		<script>
    // Appel au filtre "all" pour afficher toutes les cartes dès que la page est chargée
    document.addEventListener('DOMContentLoaded', function() {
        filterCards('all');
    });
		</script>


	</body>
</html>
