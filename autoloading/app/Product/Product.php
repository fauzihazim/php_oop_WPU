<?php
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
?>