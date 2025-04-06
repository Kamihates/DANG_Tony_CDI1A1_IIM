<?php

// Inclure l'autoloader de Composer pour charger automatiquement les classes nécessaires
require __DIR__ . '/../vendor/autoload.php'; // Chargement de l'autoloader Composer depuis le répertoire parent

// Utilisation de la classe Pokémon qui est définie dans le namespace 'Pokemon'
use Pokemon\Pokemon;

// Récupérer les paramètres de filtrage et de pagination à partir de l'URL (query string)
$filter = $_GET['filter'] ?? null; // Si le paramètre 'filter' est présent dans l'URL, on l'utilise, sinon on le définit à null
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Si 'page' est défini, on la récupère, sinon on met la page par défaut à 1
$pageSize = 16; // Nombre de cartes par page

// Initialisation de la requête pour récupérer les cartes Pokémon
$query = Pokemon::Card(); // Utilisation de la méthode Card() de la classe Pokémon pour récupérer les cartes

// Si un filtre est défini (autre que 'all'), on l'ajoute à la requête
if ($filter !== 'all') {
    $query = $query->where(['subtypes' => $filter]); // Filtre les cartes selon le sous-type passé en paramètre
}

// Appel de l'API avec pagination : on définit la page actuelle et le nombre de cartes par page
$cards = $query->page($page)->pageSize($pageSize)->all(); // Récupère toutes les cartes correspondant à la requête, en tenant compte de la pagination

// Trier les cartes par rareté en ordre croissant
usort($cards, function($a, $b) {
    // Comparaison des cartes selon leur rareté
    $rarityA = $a->getRarity(); // Récupère la rareté de la première carte
    $rarityB = $b->getRarity(); // Récupère la rareté de la deuxième carte
    if ($rarityA !== $rarityB) {
        // Si les raretés sont différentes, on les trie par ordre croissant
        return ($rarityB < $rarityA) ? -1 : 1; // Si raretéA est inférieure à raretéB, on place raretéA avant
    }

    return 0; // Si les raretés sont identiques, on ne change pas l'ordre des cartes
});

// Affichage des cartes triées
foreach ($cards as $card) {
    // Récupérer l'URL de l'image de la carte
    $cardImage = $card->getImages()->getLarge(); // On récupère l'image de grande taille associée à la carte
    // Générer le code HTML pour afficher chaque carte
    echo '<div class="card">'; // Début de la carte
    echo '<img src="' . $cardImage . '" alt="' . $card->getName() . '" class="card-image">'; // Affichage de l'image de la carte avec le nom comme attribut alt
    echo '</div>'; // Fin de la carte
}
?>
