<?php

class Bar{
 
    public $nom;
    private $carte;
    private $reserve;

    public function __construct($carte, $reserve){
        $this->carte = $carte;
        $this->reserve = $reserve;
    }

    public function faireCocktail($nom, $nbVerre){
        // aller chercher la recette (elle existe ou pas ?)
        if ($recette = $this->chercherRecette($nom)) {
            echo "<br> Recette trouvée <br>";
            $shaker = new Shaker([]);
            // mettre ingredients dans shaker
            // var_dump($recette->listeIngredients());
            // Parcourir la liste des ingredients
            $ingredients = $recette->listeIngredients();
            foreach($ingredients as $key => $value){
                // Pour chaque ingredient
                foreach ($this->reserve as $bouteille) {
                    if($bouteille->nom == $key){
                        // S'il reste assez dans la bouteille
                        if ($bouteille->contenance >= $value) {
                            // je la soustrais de la bouteille
                            $bouteille->contenance -= $value;
                            // je l'ajoute dans le shaker
                            $shaker->setContenu($key, $value);
                            $shaker->isClean = false;
                        } else {
                            echo "Désolé j'ai fini le $bouteille->nom <br>";
                        }
                    } 
                }
            }
            $cocktail = $shaker->secouer();
            $shaker->verser($cocktail, $nom);
            $shaker->laver();
            // echo "<pre>";
            // var_dump($shaker);

            // Je secoue le shaker
            // Servir le cocktail dans un verre
        } else {
            echo "Désolé je ne connais pas cette recette";
        }
    }

    public function chercherRecette($nom){

        // chercher nom dans tableau carte
        foreach ($this->carte as $recette) { 
            if ($recette->nom == $nom) {
                return $recette ;
            }
        }
        // return Recette $recette ;
    }
}