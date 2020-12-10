<?php

namespace App;

/**
 * description fuel and the price
 */

 class Pertalite
 {
    /**
     * Prices for fuel
     * 
     * @var int
     */

     private $price;

    /**
     * Fuel
     * 
     * @var string
     */

     private $pertalite;
     private $pertamax;

    /**
     * Set the fuel and the price
     * 
     * @param
     * @return 
     */

     public function __construct()
     {
         $this->price=16000;
         $this->pertalite='pertalite';
         $this->pertamax='pertamax';
     }

     /**
      * Get the price of the fuel
      *
      * @return int
      */
    
     public function getPrice()
     {
         return $this->price;
     }

    /**
     * Get the fuel
     * 
     * @return string
     */

     public function getPertalite()
     {
         return $this->pertalite;
     }

     public function getPertamax()
     {
         return $this->pertamax;
     }
 }
