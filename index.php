<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once("php/getFlowers.php");
include_once("php/postOrder.php");
include_once("php/getOrders.php");
include_once("php/updateOrder.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Order</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="w§idth=device-width, initial-scale=1, maximum-scale=1">
    <!-- local css file-->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<section>
    <?php
    //forma kuria uzpildzius galime sukurti orderi
    postOrder();
    //forma kuria uzpildzius galime pakeisti orderio reiksmes
    updateOrder();
    ?>
</section>
<section>
    <?php
    //orderiu lenteles atvaizdavimas
    getOrders();
    ?>
</section>
</body>
</html>