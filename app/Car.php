<?php

namespace App;
use App\Pertalite;

/**
 * Car
 */

class Car
{
    /**
     * Car fuel
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
        $string="this car is filled up with {$this->fuel->getPertamax()} and you have to pay Rp {$this->fuel->getPrice()}";

        echo $string;
    }
}