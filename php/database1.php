<?php

//Sukuriami duomenu bazes prijungimo kintamieji
$dbHost = "localhost:8889"; //lokalaus serverio pavadinimas
$dbUser = "root"; //db prisijungimo vardas
$dbPassword = "root"; //db prisijungimo slaptazodis
$dbName = "geliu_uzsakymas"; //db pavadinimas

//Sukuriamas prisijungimas prie duomenu bazes naudojant PDO
try {
    $dsn = "mysql:host=" . $dbHost . ";dbname=" . $dbName; //sukuriamas mechanizmas prisijungti prie db
    $pdo = new PDO($dsn, $dbUser, $dbPassword); //sukuriamas objektas PDO ir jam paduodamas db prisijungimo mechanizmas, db prisijungimo vardas, db prisijungimo slaptazodis
} catch (PDOException $e) {
    print "DB Connection Failed: " . $e->getMessage();//jei db neprisijungia ismeta error i ekrana
}

?>