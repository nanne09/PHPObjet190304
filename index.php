<?php

// Les inclusions
require_once('autoloader.php');

echo 'Bonjour';

// Création d'un premier objet Produit : hamac
$hamac = new Product();

// Changement des valeurs de la propriété name
$hamac->setName('Hamac');
echo '<p>'.$hamac->getName().'</p>';

// Changement des valeurs de la propriété description
$hamac->setDescription('pour se reposer');
echo '<p>'.$hamac->getDescription().'</p>';

// Changement des valeurs de la propriété prix
$hamac->setPrice(10.49);
echo '<p>'.$hamac->getPrice().'</p>';


// Création d'un deuxième objet Produit : parasol
$parasol = new Product();
$parasol->setName ('Parasol');
$parasol->setDescription('Pour faire de l\'ombre');
$parasol->setPrice (25.47);

echo '<p>'.$parasol->getName().'</p>';
echo '<p>'.$parasol->getDescription().'</p>';
echo '<p>'.$parasol->getPrice().'</p>';

// Création d'un premier objet Catégory : voyage
$voyage = new Category();




