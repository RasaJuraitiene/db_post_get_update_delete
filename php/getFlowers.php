<?php
include('Database.php');

use database\Database;


$sql = "SELECT * FROM flowers";
$info = [];
$selectFlowers = New database();
$selectFlowers->select($sql, $info);

var_dump($selectFlowers);


?>

<!--1. sukurti if, elseif, else cikla ir jame pritaikyti salygas-->
<!--kai kintamasis maziau uz 5 atspausdina - $kintamasis yra-->
<!--maziau uz 5 kai kintamasis yra lygus 5 atspausdina --->
<!--$kintamasis yra lygus 5 ir kai kintamasis daugiau uz 5-->
<!--atspausdina - $kintamasis yra daugiau uz 5-->
<!---->
<!--2. sukurti cikla for taip kad mums ekrane atspausdintu-->
<!--5 kartus vis is naujos eilutes siklus kiek ju yra prabege-->
<!---->
<!--3. sukurti funkcija su antra uzduotimi ir ja iskviesti.-->
