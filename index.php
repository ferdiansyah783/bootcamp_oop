<?php

use App\Car;
use App\Motorcycle;

require "vendor/autoload.php";

$motorcycle=new Motorcycle();
$motorcycle->fillup();

echo "<br/>";

$car=new Car();
$car->fillup();