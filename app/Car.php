<?php

namespace App;
use App\Pertalite;
// require_once('pertalite.php');

class Car
{
    private $fuel;

    public function __construct()
    {
        $this->fuel=new Pertalite();
    }

    public function fillup()
    {
        $string="this car is filled up with {$this->fuel->getPertamax()} and you have to pay Rp {$this->fuel->getPrice()}";

        echo $string;
    }
}