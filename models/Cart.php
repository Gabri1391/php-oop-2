<?php

 require_once __DIR__ . '/Product.php';

class Cart
{
    private $products = [];

    public function getProductsLIst()
    {
        return $this->products;
    }

    public function getTotal()
    {
        $total = 0;
        foreach($products as $product){
            $total += $product->getPrice();
        }

        return $total;
    }

    public function addProduct($product){
        if($product instanceof Product){
            
            $this->products [] = $product;
        }else{
            throw new Exception("$product must be instance of Product!");
        }
    }

    public function removeProduct($product){
        if($product instanceof Product){
            
            $id = $product->getId();
            foreach($this->products as $id => $value){
                if($value->getId() === $id) unset($this->products[$key]);
            }
        }
    }
}

?>