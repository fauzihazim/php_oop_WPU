<?php
    // Komik
    // Game
    class Product {
        public $judul,
                $penulis,
                $penerbit,
                $harga;
        
        public function __construct($judul, $penulis, $penerbit, $harga)
        {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function getLabel() {
            return "$this->judul, $this->penerbit";
        }
    }

    $product1 = new Product("Naruto", "Mashasi Kisimoto", "Shonen", 20000);
    $product2 = new Product("Uncharted", "Neil Drukmann", "Sony Games", 250000);
    
    echo "Komik : " . $product1->getLabel();
    echo "<br>";
    echo "Games : " . $product2->getLabel();
?>