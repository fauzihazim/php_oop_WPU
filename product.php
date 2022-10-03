<?php
    // Komik
    // Game
    class Product {
        public $judul,
                $penulis,
                $penerbit,
                $harga;
        
        public function getLabel() {
            return "$this->judul, $this->penerbit";
        }
    }

    $product1 = new Product();
    $product1->judul = "Naruto";
    $product1->penulis = "Masasi Kisimoto";
    $product1->penerbit = "Shonen";
    $product1->harga = 20000;

    $product2 = new Product();
    $product2->judul = "Uncharted";
    $product2->penulis = "Neil Drukmann";
    $product2->penerbit = "Sony Games";
    $product2->harga = 250000;
    // $product2 = new Product();
    // $product3 = new Product();

    // var_dump($product1->judul);
    // var_dump($product2);
    // var_dump($product3);
    echo "Komik : " . $product1->getLabel();
    echo "<br>";
    echo "Games : " . $product2->getLabel();
?>