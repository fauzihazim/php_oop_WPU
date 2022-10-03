<?php
    // Komik
    // Game
    class Product {
        public $judul,
                $penulis,
                $penerbit,
                $harga,
                $jmlHalaman,
                $jmlJam;
        
        public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $jmlJam)
        {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->jmlJam = $jmlJam;
        }

        public function getLabel() {
            return "$this->judul | $this->penerbit";
        }

        public function getInfoProduct() {
            $str = "{$this->judul} | {$this->getLabel()} {Rp. {$this->harga}} - ";
            return $str;
        }
    }

    class Komik extends Product {
        public function getInfoProduct() {
            $str = "Komik : {$this->getLabel()} {Rp. {$this->harga}} - {$this->jmlHalaman} Halaman";
            return $str;
        }
    }
    
    class Game extends Product{
        public function getInfoProduct() {
            $str = "Games : {$this->getLabel()} {Rp. {$this->harga}} - {$this->jmlJam} Jam";
            return $str;
        }
    }

    class CetakInfoProduct {
        public function cetak( Product $product) {
            $str = "{$product->judul} | {$product->getLabel()} {Rp. {$product->harga}}";
            return $str;
        }
    }

    $product1 = new Komik("Naruto", "Mashasi Kisimoto", "Shonen", 20000, 100, 0);
    $product2 = new Game("Uncharted", "Neil Drukmann", "Sony Games", 250000, 0, 50);
    $infoProduct1 = new CetakInfoProduct();

    echo $product1->getInfoProduct();
    echo "<br>";
    echo $product2->getInfoProduct();
    echo "<br>";
?>