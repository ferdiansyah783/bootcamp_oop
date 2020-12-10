<?php

namespace App;

/**
 * description fuel and the price
 */

 class Pertalite
 {
     private $price;
     private $pertalite;
     private $pertamax;

     public function __construct()
     {
         $this->price=16000;
         $this->pertalite='pertalite';
         $this->pertamax='pertamax';
     }
    
     public function getPrice()
     {
         return $this->price;
     }

     public function getPertalite()
     {
         return $this->pertalite;
     }

     public function getPertamax()
     {
         return $this->pertamax;
     }
 }
