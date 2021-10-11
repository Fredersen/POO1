<?php

// Les fichiers requis :

require 'Car.php';
require 'Bicycle.php';

// Challenge sur l'objet Car :

$twingo = new Car('Yelow', 4, 'diesel');

// Déplacement de la voiture :

echo $twingo->start();
echo '<br> Speed of the car : ' . $twingo->getCurrentSpeed() . 'km/h </br>';
echo $twingo->forward();
echo '<br> Speed of the car  : ' . $twingo->getCurrentSpeed() . 'km/h </br>';
echo $twingo->brake();
echo '<br> Speed of the car  : ' . $twingo->getCurrentSpeed() . 'km/h </br>';


// Quete 1 : Cours sur l'objet Bicycle :

$bike = new Bicycle('Blue');
$bike->setCurrentSpeed(0);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('Yellow');

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('Black');