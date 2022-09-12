<?php

class Products
{
    protected $name;
    protected $image;
    protected $description;
    protected $price;
    protected $discount = 0;

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
    protected function setName($name)
    {
        if(strlen($name) <= 0) return false;
        $this->name = $name;
        return true;
    }

    protected function setImage($image)
    {
        if(!$image) return 'Immagine non disponibile';
        $this->image = $image;
        return true;
    }

    protected function setDescription($description)
    {
        if(!$description) return 'Descrizione non disponibile';
        $this->description = $description;
        return true;
    }
    
    protected function setPrice($price)
    {
        if(!is_numeric($price) || $price <= 0) return;
        $this->price = $price;
    }

}




?>