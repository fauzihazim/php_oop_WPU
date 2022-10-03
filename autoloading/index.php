<?php
    require_once 'app/init.php';

    $product1 = new Komik("Naruto", "Mashasi Kisimoto", "Shonen", 20000, 100);
    $product2 = new Game("Uncharted", "Neil Drukmann", "Sony Games", 250000, 0, 50);

    $cetakProduk = new CetakInfoProduct();
    $cetakProduk->tambahProduk($product1);
    $cetakProduk->tambahProduk($product2);
    echo $cetakProduk->cetak();
?>