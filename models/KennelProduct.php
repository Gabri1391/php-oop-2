<?php
   
   include_once __DIR__ . '/Product.php';

   class KennelProduct extends Product 
   {
      private $size;
      private $production_country;
      private $weight;
      private $materials;  


      public function  __construct($name, $description, $price, 
       $size, $production_country, $weight)
      {
         parent:: __construct($name, $description, $price);
         $this->setSize($size);
         $this->setProduction_country($production_country);
         $this->setWeight($weight);
         $this->setMaterials($materials);
      }

      

      /**
       * Get the value of size
       */
      public function getSize()
      {
            return $this->size;
      }

      /**
       * Set the value of size
       */
      public function setSize($size): self
      {
            $this->size = $size;

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
       * Get the value of weight
       */
      public function getWeight()
      {
            return $this->weight;
      }

      /**
       * Set the value of weight
       */
      public function setWeight($weight): self
      {
            $this->weight = $weight;

            return $this;
      }

      /**
       * Get the value of materials
       */
      public function getMaterials()
      {
            return $this->materials;
      }

      /**
       * Set the value of materials
       */
      public function setMaterials($materials): self
      {
            $this->materials = $materials;

            return $this;
      }
  }


?>