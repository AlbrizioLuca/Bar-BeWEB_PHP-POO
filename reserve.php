<?php

include("classes/Bouteille.php");

$rhum = new Bouteille ('Rhum', 750);
$citron = new Bouteille ('Citron', 750);
$citronVert = new Bouteille ('Citron Vert', 750);
$glace = new Bouteille ('Glace', 750);
$coca = new Bouteille ('Coca-Cola', 750);
$perrier = new Bouteille ('Perrier', 750);

$reserve=[$rhum, $citron, $citronVert, $glace, $coca, $perrier];