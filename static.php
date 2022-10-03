<?php
    class ContohStatic {
        public static $angka = 1;

        public static function halo() {
            return "Halo. " . self::$angka++ . "<br>";
        }
    }

    echo ContohStatic::halo();
    echo ContohStatic::$angka;

    echo "<hr>";

    class Contoh {
        public $number = 1;

        public function contohNonStatic() {
            return "Contoh Non Static " . $this->number++ . "<br>";
        }
    }

    $obj1 = new Contoh();
    echo $obj1->contohNonStatic();
    echo $obj1->contohNonStatic();
    echo $obj1->contohNonStatic();
    $obj2 = new Contoh();
    echo $obj2->contohNonStatic();
    echo $obj2->contohNonStatic();
    echo $obj2->contohNonStatic();
?>