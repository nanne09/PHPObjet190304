<?php

// Les inclusions
require_once('autoloader.php');

// On créé une instance de produit
$product1 = new Product();
$product1->setName('Hamac');

// On créé un clone qui fonctionne par copie
$product2 = clone $product1;
echo '<p>'.$product2->getName().'</p>';
// par copie : hamac

// On créé une variable qui fonctionne par référence
$product3 = $product1;

$product1->setName('Parasol');
echo '<p>'.$product3->getName().'</p>';
// par référence : parasol
echo '<p>'.$product2->getName().'</p>';
// par copie : hamac

$product3->setName('Brouette');
echo '<p>'.$product1->getName().'</p>';
// par référence : brouette


// TEST : COMPARER DES OBJETS
// Création de 2 objets
$produit1= new Product();
$produit1->setName('hamac');
$produit1->setDescription('pour se reposer');
$produit1->setPrice(10.99);

$produit2= new Product();
$produit2->setName('hamac');
$produit2->setDescription('pour se reposer');
$produit2->setPrice(10.99);

// Compare les propriétés des objets et s'ils pointent vers le même objet
if($produit1 === $produit2){
    echo '<p>C\'est la même chose</p>';
} else {
    echo '<p>Erreur</p>';
}

// Toutes les propriétés des deux objets sont égales
if ($produit1 == $produit2) {
    echo '<p>C\'est la même chose</p>';
} else {
    echo '<p>Erreur</p>';
}

?>