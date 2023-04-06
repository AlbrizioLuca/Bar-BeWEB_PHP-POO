<?php

echo "Bienvenue dans le BeWEB Bar <br>";


include('ListeRecette.php');
include('reserve.php');
include('classes/Shaker.php');
include('classes/Bar.php');

$bar = new Bar($carte, $reserve);
$bar->faireCocktail("Cuba Libre", 1);


// echo "<pre>";
// var_dump($bar);
// echo "<pre>";
// var_dump($carte);