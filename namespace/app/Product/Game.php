<?php
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
?>