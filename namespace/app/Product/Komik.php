<?php
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
?>