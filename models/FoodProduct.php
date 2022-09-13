<?php
   
   include_once __DIR__ . '/Product.php';

   class FoodProduct extends Product 
   {
      private $flavour;
      private $production_country;
      private $expiration;


      public function  __construct($id, $name, $description, $price, $flavour, $production_country, $expiration)
      {
         parent:: __construct($id, $name, $description, $price);
         $this->setFlavour($flavour);
         $this->setProductionCountry($production_country);
         $this->setExpiration($expiration);
      }



      /**
       * Get the value of flavour
       */
      public function getFlavour()
      {
            return $this->flavour;
      }

      /**
       * Set the value of flavour
       */
      public function setFlavour($flavour): self
      {
            $this->flavour = $flavour;

            return $this;
      }

      /**
       * Get the value of production_country
       */
      public function getProductionCountry()
      {
            return $this->production_country;
      }

      /**
       * Set the value of production_country
       */
      public function setProductionCountry($production_country): self
      {
            $this->production_country = $production_country;

            return $this;
      }

      /**
       * Get the value of expiration
       */
      public function getExpiration()
      {
            return $this->expiration;
      }

      /**
       * Set the value of expiration
       */
      public function setExpiration($expiration): self
      {
            $this->expiration = $expiration;

            return $this;
      }
  }


?>