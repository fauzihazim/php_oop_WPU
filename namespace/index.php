<?php
    require_once 'app/init.php';

    use app\Service\User as ServicesUser;
    use app\Product\User as ServicesProduct;

    new ServicesUser();
    echo "<br>";
    new ServicesProduct();
?>