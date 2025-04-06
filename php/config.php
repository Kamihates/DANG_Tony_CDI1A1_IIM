<?php

// Inclure l'autoloader de Composer
require __DIR__ . '/../vendor/autoload.php';

// Utiliser la classe Pokémon
use Pokemon\Pokemon;

// Initialisation de l'API avec la clé API
Pokemon::ApiKey('76ba2266-adc0-4e1c-b08c-ec95f477dfd5');

// Fonction pour récupérer une carte par son ID
function getCard($card_id) {
    try {
        // Essayer de récupérer la carte
        $card = Pokemon::Card()->find($card_id);

        if ($card) {
            // Utilisation de la méthode publique pour obtenir le nom
            $name = $card->getName();

            // Utilisation de la méthode getImages pour obtenir l'objet d'images
            $images = $card->getImages();

            // Accès à l'image large via la méthode de l'objet CardImages
            $image = $images->getLarge();  // Méthode pour accéder à l'image large

            return [
                'name' => $name,
                'image' => $image,
            ];
        } else {
            return null; // Si la carte n'existe pas
        }
    } catch (Exception $e) {
        // Si une erreur se produit lors de la requête à l'API
        return null;
    }
}
?>
