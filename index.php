<?php

use App\Car;
use App\Motorcycle;

require "vendor/autoload.php";

/**
 * The result of the motorcycle class
 * 
 * @return string.int
 */

$motorcycle=new Motorcycle();
$motorcycle->fillup();

echo "<br/>";

/**
 * The result of the car class
 * 
 * @return string.int
 */

$car=new Car();
$car->fillup();