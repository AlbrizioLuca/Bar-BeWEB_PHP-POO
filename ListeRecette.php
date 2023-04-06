<?php
include("classes/Recette.php");

$mojito = new Recette('Mojito', array(
    'Rhum'=> 10,
    'Menthe'=> 10, 
    'Perrier'=> 10, 
    'Citron' => 5,
    'Glace' => 20
));

$cubaLibre = new Recette('Cuba Libre', array(
    'Rhum'=> 10,
    'Coca-Cola'=> 15,
    'Citron Vert' => 5,
    'Glace' => 20
));

$carte = [$mojito, $cubaLibre];