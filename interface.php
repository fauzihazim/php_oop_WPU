<?php
    // Komik
    // Game

    interface InfoProduk{
        public function getInfoProduct();
    }

    abstract class Product {
        public $judul,
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

        abstract public function getInfo();
    }

    class Komik extends Product implements InfoProduk {
        public $jmlHalaman;

        function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman)
        {
            parent:: __construct($judul, $penulis, $penerbit, $harga);
            $this->$jmlHalaman = $jmlHalaman;
        }

        public function getInfo() {
            $str = "{$this->getLabel()} {Rp. {$this->harga}} - ";
            return $str;
        }

        public function getInfoProduct() {
            $str = "Komik : " . $this->getInfo() . " {$this->jmlHalaman} Halaman";
            return $str;
        }
    }
    
    class Game extends Product implements InfoProduk {
        public $jmlJam;

        function __construct($judul, $penulis, $penerbit, $harga, $jmlJam)
        {
            parent:: __construct($judul, $penulis, $penerbit, $harga);
            $this->$jmlJam = $jmlJam;
        }

        public function getInfo() {
            $str = "{$this->getLabel()} {Rp. {$this->harga}} - ";
            return $str;
        }

        public function getInfoProduct() {
            $str = "Games : " . $this->getInfo() . " {$this->jmlJam} Jam";
            return $str;
        }
    }

    class CetakInfoProduct {
        public $daftarProduk = array();

        public function tambahProduk (Product $product) {
            $this->daftarProduk[] = $product;
        }

        public function cetak() {
            $str = "DAFTAR PRODUK : <br>";
            
            foreach ($this->daftarProduk as $p)
            $str .= "- {$p->getInfoProduct()} <br>";
            return $str;
        }
    }

    $product1 = new Komik("Naruto", "Mashasi Kisimoto", "Shonen", 20000, 100);
    $product2 = new Game("Uncharted", "Neil Drukmann", "Sony Games", 250000, 0, 50);

    $cetakProduk = new CetakInfoProduct();
    $cetakProduk->tambahProduk($product1);
    $cetakProduk->tambahProduk($product2);
    echo $cetakProduk->cetak();
?>