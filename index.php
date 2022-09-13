<?php
  
  //   includiamo il file dei vari tipi di prodotti
  include_once __DIR__ . '/models/FoodProduct.php';


  $prodotto1 = new FoodProduct(1,'Stick per denti', 'Ottimo per la pulizia dei denti del tuo felino', 4.50, 'Manzo e carote', 'Italia', '23/09/2023' );

  var_dump($prodotto1);



?>