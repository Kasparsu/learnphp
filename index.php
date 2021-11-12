<?php

//require_once './src/Cat.php';

require './vendor/autoload.php';

use App\Birds\Cat as BirdsCat;
use App\Birds\Hawk;
use App\Cat;

$cat = new Cat();
$birdCat = new BirdsCat();
$dog = new App\Dog();
$hawk = new Hawk();