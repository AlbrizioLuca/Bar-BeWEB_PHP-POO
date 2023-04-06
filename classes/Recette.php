<?php

class Recette {
    
    public $nom; 
    private $ingredients=[];

    public function __construct($nom, $ingredients) {
        $this->nom=$nom;
        $this->ingredients = $ingredients;
    }

    public function listeIngredients(){
        return $this->ingredients;
    }
}