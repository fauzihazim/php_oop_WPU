<?php
    // Komik
    // Game
    class Product {
        private $judul,
                $penulis,
                $penerbit,
                $diskon = 0,
                $harga;

        public function SetJudul( $judul ) {
            $this->judul = $judul;
        }

        public function GetJudul() {
            return $this->harga - ($this->harga * $this->diskon / 100);
        }

        public function SetPenulis( $penulis ) {
            $this->penulis = $penulis;
        }

        public function GetPenulis() {
            return $this->penulis;
        }

        public function SetPenerbit( $penerbit ) {
            $this->penerbit = $penerbit;
        }

        public function GetPenerbit() {
            return $this->penerbit;
        }

        public function SetDiskon( $diskon ) {
            $this->diskon = $diskon;
        } 

        public function GetDiskon() {
            return $this->diskon;
        }

        public function SetHarga( $harga ) {
            $this->harga = $harga;
        }

        public function GetHarga() {
            return $this->harga - ($this->harga * $this->diskon / 100);
        }

        public function __construct($judul, $penulis, $penerbit, $harga)
        {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function getLabel() {
            return "$this->judul | $this->penerbit";
        }

        public function getInfoProduct() {
            $str = "{$this->getLabel()} {Rp. {$this->harga}} - ";
            return $str;
        }
    }

    class Komik extends Product {
        public $jmlHalaman;

        function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman)
        {
            parent:: __construct($judul, $penulis, $penerbit, $harga);
            $this->$jmlHalaman = $jmlHalaman;
        }
        public function getInfoProduct() {
            $str = "Komik : " . parent::getInfoProduct() . " {$this->jmlHalaman} Halaman";
            return $str;
        }
    }
    
    class Game extends Product{
        public $jmlJam;

        function __construct($judul, $penulis, $penerbit, $harga, $jmlJam)
        {
            parent:: __construct($judul, $penulis, $penerbit, $harga);
            $this->$jmlJam = $jmlJam;
        }
        public function getInfoProduct() {
            $str = "Games : " . parent::getInfoProduct() . " {$this->jmlJam} Jam";
            return $str;
        }
    }

    class CetakInfoProduct {
        public function cetak( Product $product) {
            $str = "{$product->judul} | {$product->getLabel()} {Rp. {$product->harga}}";
            return $str;
        }
    }

    $product1 = new Komik("Naruto", "Mashasi Kisimoto", "Shonen", 20000, 100);
    $product2 = new Game("Uncharted", "Neil Drukmann", "Sony Games", 250000, 0, 50);
    $infoProduct1 = new CetakInfoProduct();

    echo $product1->getInfoProduct();
    echo "<br>";
    echo $product2->getInfoProduct();
    echo "<hr>";
    
    $product1->SetDiskon(20);
    echo $product1->GetHarga();
    echo "<br>";
    echo $product2->GetHarga();
?>