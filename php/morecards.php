<!DOCTYPE html>
<html lang="fr">
<html>
	<head>

		<?php include '../php/header.php'; ?>

    <link rel="stylesheet" href="../css/morecards.css">
    <link rel="stylesheet" href="../js/morecards.js">

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
		        <button onclick="filterCards('high-tech')" class="btn">High-Tech</button>
		        <button onclick="filterCards('special')" class="btn">Illustrations Spéciales</button>
						<button onclick="filterCards('pokemon-ex')" class="btn">Pokémon-EX</button>
		    </div>

		    <div class="card-container">

      			<div class="card all">
							<img src="../images/cartes/Noeunoeuf.png" alt="Noeunoeuf" onclick="openModal('../images/cartes/Noeunoeuf.png')">
						</div>

					  <div class="card all">
							<img src="../images/cartes/Noadkoko.png" alt="Noadkoko" onclick="openModal('../images/cartes/Noadkoko.png')">
						</div>

						<div class="card all">
							<img src="../images/cartes/Lépidonille.png" alt="Lépidonille" onclick="openModal('../images/cartes/Lépidonille.png')">
						</div>

						<div class="card pokemon-ex">
							<img src="../images/cartes/FermiteEx.png" alt="FermiteEX" onclick="openModal('../images/cartes/FermiteEx.png')">
						</div>

						<div class="card all">
							<img src="../images/cartes/Pérégrain.png" alt="Pérégrain" onclick="openModal('../images/cartes/Pérégrain.png')">
						</div>

						<div class="card all">
							<img src="../images/cartes/Prismillon.png" alt="Prismillon" onclick="openModal('../images/cartes/Prismillon.png')">
						</div>

						<div class="card all">
							<img src="../images/cartes/Spododo.png" alt="Spododo" onclick="openModal('../images/cartes/Spododo.png')">
						</div>

						<div class="card all">
							<img src="../images/cartes/Lampignon.png" alt="Lampignon" onclick="openModal('../images/cartes/Lampignon.png')">
						</div>


						<div class="card all">
							<img src="../images/cartes/Goupix.png" alt="Goupix" onclick="openModal('../images/cartes/Goupix.png')">
						</div>

						<div class="card all">
							<img src="../images/cartes/Feunard.png" alt="Feunard" onclick="openModal('../images/cartes/Feunard.png')">
						</div>

						<div class="card all">
							<img src="../images/cartes/Ho-Oh.png" alt="Ho-Oh" onclick="openModal('../images/cartes/Ho-Oh.png')">
						</div>

						<div class="card all">
							<img src="../images/cartes/Victini.png" alt="Goupix" onclick="openModal('../images/cartes/Goupix.png')">
						</div>

						<div class="card all">
							<img src="../images/cartes/Pyronille.png" alt="Pyronille" onclick="openModal('../images/cartes/Pyronille.png')">
						</div>

						<div class="card all">
							<img src="../images/cartes/Pyrax.png" alt="Pyrax" onclick="openModal('../images/cartes/Pyrax.png')">
						</div>

						<div class="card all">
							<img src="../images/cartes/Carmadura.png" alt="Carmadura" onclick="openModal('../images/cartes/Carmadura.png')">
						</div>

						<div class="card pokemon-ex">
							<img src="../images/cartes/MalvalameEX.png" alt="MalvalameEX" onclick="openModal('../images/cartes/MalvalameEX.png')">
						</div>

						<div class="card pokemon-ex">
							<img src="../images/cartes/PikachuEX.png" alt="PikachuEX" onclick="openModal('../images/cartes/PikachuEX.png')">
						</div>

						<div class="card all">
							<img src="../images/cartes/Zébibron.png" alt="Zébibron" onclick="openModal('../images/cartes/Zébibron.png')">
						</div>

						<div class="card all">
							<img src="../images/cartes/Zéblitz.png" alt="Zéblitz" onclick="openModal('../images/cartes/Zéblitz.png')">
						</div>

						<div class="card all">
							<img src="../images/cartes/Tokorico.png" alt="Tokorico" onclick="openModal('../images/cartes/Tokorico.png')">
						</div>

						<div class="card all">
							<img src="../images/cartes/Zapétrel.png" alt="Carmadura" onclick="openModal('../images/cartes/Carmadura.png')">
						</div>

						<div class="card all">
							<img src="../images/cartes/Fulgulairo.png" alt="Carmadura" onclick="openModal('../images/cartes/Carmadura.png')">
						</div>

						<div class="card pokemon-ex">
							<img src="../images/cartes/FulgulairoEX.png" alt="Carmadura" onclick="openModal('../images/cartes/Carmadura.png')">
						</div>

						<div class="card all">
							<img src="../images/cartes/Miraidon.png" alt="Carmadura" onclick="openModal('../images/cartes/Miraidon.png')">
						</div>

						<div class="card high-tech">
							<img src="../images/cartes/AmuletteEspoir.png" alt="AmuletteEspoir" onclick="openModal('../images/cartes/AmuletteEspoir.png')">
						</div>

						<div class="card high-tech">
							<img src="../images/cartes/MixeurBrillant.png" alt="MixeurBrillant" onclick="openModal('../images/cartes/MixeurBrillant.png')">
						</div>

						<div class="card high-tech">
							<img src="../images/cartes/RechercheEnergiePro.png" alt="RechercheEnergiePro" onclick="openModal('../images/cartes/RechercheEnergiePro.png')">
						</div>

						<div class="card high-tech">
							<img src="../images/cartes/SouffleurTitanesque.png" alt="SouffleurTitanesque" onclick="openModal('../images/cartes/SouffleurTitanesque.png')"></div>

						<div class="card high-tech">
							<img src="../images/cartes/CasqueMiracle.png" alt="CasqueMiracle" onclick="openModal('../images/cartes/CasqueMiracle.png')">
						</div>

						<div class="card high-tech">
							<img src="../images/cartes/ChariotPrécieux.png" alt="ChariotPrécieux" onclick="openModal('../images/cartes/ChariotPrécieux.png')">
						</div>

						<div class="card high-tech">
							<img src="../images/cartes/EchangeCombiné.png" alt="EchangeCombiné" onclick="openModal('../images/cartes/EchangeCombiné.png')">
						</div>

						<div class="card high-tech">
							<img src="../images/cartes/EnergieEnrichissante.png" alt="EnergieEnrichissante" onclick="openModal('../images/cartes/EnergieEnrichissante.png')">
						</div>

						<div class="card special">
							<img src="../images/cartes/AtalanteSpé.png" alt="AtalanteSpé" onclick="openModal('../images/cartes/AtalanteSpé.png')">
						</div>

						<div class="card special">
							<img src="../images/cartes/JasmineSpé.png" alt="JasmineSpé" onclick="openModal('../images/cartes/JasmineSpé.png')">
						</div>

						<div class="card special">
							<img src="../images/cartes/IridoSpé.png" alt="IridoSpé" onclick="openModal('../images/cartes/IridoSpé.png')">
						</div>

						<div class="card special">
							<img src="../images/cartes/SurfeurSpé.png" alt="SurfeurSpé" onclick="openModal('../images/cartes/SurfeurSpé.png')">
						</div>

						<div class="card special">
							<img src="../images/cartes/LatiosSpé.png" alt="LatiosSpé.png" onclick="openModal('../images/cartes/LatiosSpé.png')">
						</div>

						<div class="card special">
							<img src="../images/cartes/LampignonSpé.png" alt="LampignonSpé" onclick="openModal('../images/cartes/LampignonSpé.png')">
						</div>

						<div class="card special">
							<img src="../images/cartes/CréfolletSpé.png" alt="CréfolletSpé" onclick="openModal('../images/cartes/CréfolletSpé.png')">
						</div>

						<div class="card special">
							<img src="../images/cartes/GuériaigleSpé.png" alt="GuériaigleSpé" onclick="openModal('../images/cartes/GuériaigleSpé.png')">
						</div>

		    </div>

				<div id="modal" class="modal">
					<span class="close" onclick="closeModal()">&times;</span>
					<img class="modal-content" id="modal-image">
				</div>

		</section>

		<!-- Fin section morecards -->

		<!-- Début section footer  -->

	  <?php include '../php/footer.php'; ?>

	  <!-- Fin section footer -->

		<!-- Link script js   -->
		<script src="../js/script.js"></script>

	</body>
</html>
