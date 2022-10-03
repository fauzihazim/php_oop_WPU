<?php
    // Komik
    // Game
    class Product {
        public $judul,
                $penulis,
                $penerbit,
                $harga,
                $jmlHalaman,
                $jmlJam,
                $tipe;
        
        public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $jmlJam, $tipe)
        {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->jmlJam = $jmlJam;
            $this->tipe = $tipe;
        }

        public function getLabel() {
            return "$this->judul, $this->penerbit";
        }

        public function getInfoProduct() {
            $str = "{$this->judul} | {$this->getLabel()} {Rp. {$this->harga}} - ";
            if ($this->tipe == "komik") {
                $str .= "{$this->jmlHalaman} Halaman";
            } else if ($this->tipe == "game") {
                $str .= "{$this->jmlJam} Jam";
            }
            return $str;
        }
    }

    class CetakInfoProduct {
        public function cetak( Product $product) {
            $str = "{$product->judul} | {$product->getLabel()} {Rp. {$product->harga}}";
            return $str;
        }
    }

    $product1 = new Product("Naruto", "Mashasi Kisimoto", "Shonen", 20000, 100, 0, "komik");
    $product2 = new Product("Uncharted", "Neil Drukmann", "Sony Games", 250000, 0, 50, "game");
    $infoProduct1 = new CetakInfoProduct();

    echo "Komik : " . $product1->getInfoProduct();
    echo "<br>";
    echo "Games : " . $product2->getInfoProduct();
    echo "<br>";
    echo $infoProduct1 -> cetak($product1);
    echo "<br>";
    echo $infoProduct1 -> cetak($product2);
?>