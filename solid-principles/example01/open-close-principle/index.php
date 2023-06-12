<?php

require_once __DIR__.'./vendor/autoload.php';

use Solid\Tarek;
use Solid\Monjur;
use Solid\Ahammed;
use Solid\CoffeeMaker;

$tarek = new Tarek();
$coffeeMaker = new CoffeeMaker($tarek);
echo "Tarek's coffee - ".$coffeeMaker->makeCoffee();

$monjur = new Monjur();
$coffeeMaker = new CoffeeMaker($monjur);
echo "Monjur's coffee - ".$coffeeMaker->makeCoffee();

$ahammed = new Ahammed();
$coffeeMaker = new CoffeeMaker($ahammed);
echo "Ahammed's coffee - ".$coffeeMaker->makeCoffee();