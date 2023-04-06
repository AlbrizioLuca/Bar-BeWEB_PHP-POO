<?php

class Shaker {

    const CONTENANCE = 750;

    public $isClean = true;

    public function __construct($contenu) {
        $this->contenu = $contenu ;
    }

    public function secouer() {
        $result = 0 ; 
        // additioner les ingrédients
        foreach ($this->contenu as $key => $value) {
            $result += $value;
        }
        return $result;
    }

    public function verser($cocktail, $nom){
        echo "Voici votre " .$nom. " de " .$cocktail." cl. Enjoy ! <br>";
    }

    public function laver(){
    }

    public function getContenu(){
        return $this->contenu;
    }

    public function setContenu($key, $value){
        $this->contenu[$key] = $value;
    }
}