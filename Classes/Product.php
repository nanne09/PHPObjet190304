<?php

class Product {
    const DEFAULT_NB_VIEWS = 0;

	private $name;
	private $description;
	private $price;

    public function getName() : string {
	        return $this->name;
    }

    public function setName(string $nouveauNom) : void {
        if(strlen($nouveauNom >55)){
            die('Le nom du produit ne doit pas dépasser 55 caractères.');
        } else{
	        $this->name = $nouveauNom;
        }
    }

    public function getPrice() : float {
	    return $this->price;
    }

    public function setPrice(float $nouveauPrix) : void {
        if ($nouveauPrix<0) {
            die('Le prix doit être supérieur à 0');
        } else {
	    $this->price = $nouveauPrix;
        }}

    public function getDescription() : string {
	    return $this->description;
    }

    public function setDescription(string $nouveauDesc) : void {
	    $this->description = $nouveauDesc;
    }
}
