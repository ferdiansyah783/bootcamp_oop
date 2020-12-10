<?php

namespace App;
use App\Pertalite;

/**
 * Motorcycle
 */

class Motorcycle
{
    /**
     * Motorcycle fuel
     * 
     * @var string.int
     */

    private $fuel;

    /**
     * Take a pertalite class
     * 
     * @param
     * @return
     */

    public function __construct()
    {
        $this->fuel=new Pertalite();
    }

    /**
     * Get method of pertalite class
     * 
     * @return string.int
     */

    public function fillup()
    {
        $string="this motorcycle is filled up with {$this->fuel->getPertalite()} and you have to pay Rp {$this->fuel->getPrice()}";

        echo $string;
    }
}