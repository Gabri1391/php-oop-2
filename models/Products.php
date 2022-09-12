<?php

class Products
{
    public $name;
    public $image;
    public $description;
    public $price;
    public $discount = 0;

    //  Costruttore
    public function  __construct($name, $image, $description, $price, $discount)
    {
        $this->setName($name);
        $this->setImage($image);
        $this->setDescription($description);
        $this->setPrice($price);
        $this->setDiscount($discount);
    }

    // Metodi GETTER
    public function getName(){
        return $this->name;
    }

    public function getImage(){
        return $this->image;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getDiscount(){
        return $this->discount;
    }

    // Metodi SETTER
    public function setName($name)
    {
        if(strlen($name) <= 0) return false;
        $this->name = $name;
        return true;
    }

    public function setImage($image)
    {
        if(!$image) return 'Immagine non disponibile';
        $this->image = $image;
        return true;
    }

    public function setDescription($description)
    {
        if(!$description) return 'Descrizione non disponibile';
        $this->description = $description;
        return true;
    }
    
    public function setPrice($price)
    {
        if(!is_numeric($price) || $price <= 0) return;
        $this->price = $price;
    }

}




?>