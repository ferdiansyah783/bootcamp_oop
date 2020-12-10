<?php

namespace App;
use App\Pertalite;
// require_once('Pertalite.php');

class Motorcycle
{
    private $fuel;

    public function __construct()
    {
        $this->fuel=new Pertalite();
    }

    public function fillup()
    {
        $string="this motorcycle is filled up with {$this->fuel->getPertalite()} and you have to pay Rp {$this->fuel->getPrice()}";

        echo $string;
    }
}