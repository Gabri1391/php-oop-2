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

      // Metodi GETTER
   public function getId(){
      return $this->id;
   }

   public function getFlavour(){
         return $this->flavour;
   }

   public function getProduction_country(){
         return $this->production_country;
   }


   // Metodi SETTER
   protected function setId($id)
   {
         if(!is_numeric($id) || $id < 0) return false;
         $this->id = $id;
         return true;
   }

   protected function setImage($image)
   {
         if(!$flavour) return;
         $this->flavour = $flavour;
         return true;
   }

   protected function setDescription($description)
   {
         if(!$production_country) return;
         $this->production_country = $production_country;
         return true;
   }
   

   }




?>