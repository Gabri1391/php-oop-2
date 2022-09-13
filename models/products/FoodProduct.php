<?php
   
   include_once __DIR__ . '/Product.php';

   class FoodProduct extends Product 
   {
      protected $id;
      protected $flavour;
      protected $production_country;

      public function  __construct($name, $image, $description, $price, $discount, 
      $id, $flavour, $production_country)
      {
         parent:: __construct($name, $image, $description, $price, $discount);
         $this->setId($id);
         $this->setFlavour($flavour);
         $this->setProduction_country($production_country);
      }


  }


?>