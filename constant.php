<?php
    // tidak dapat dimasukkan di dalam class atau objek sehingga menjadi variable global
    define("NAMA", "Fauzi Hazim");
    echo NAMA;
    echo "<hr>";

    class Constant {
        const UMUR = 21;
    }

    echo Constant::UMUR;
    echo "<hr>";
    
    // Magic Method
    echo __LINE__;
?>