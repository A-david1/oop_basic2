<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';



$monGrosCamion = new Truck('rouge avec des flammes', 3, 'gaz', 32000);

var_dump($monGrosCamion->setFillingLevel('320'));
echo $monGrosCamion->checkingLevel();


echo $monGrosCamion->forward();
echo '<br> Vitesse du camion : ' . $monGrosCamion->getCurrentSpeed() . " km/h." . '<br>';
echo $monGrosCamion->brake();
echo '<br> Vitesse du camion : ' . $monGrosCamion->getCurrentSpeed() . " km/h." . '<br>';
echo $monGrosCamion->brake();





