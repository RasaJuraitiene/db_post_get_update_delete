<?php

function getFlowers()
{
    include("php/database.php");

//Is duomenu bazes paimami duomenys ir atvaizduojami i lentele

    $flowers = $pdo->query("SELECT * FROM flowers");
    $flowers->execute();
    $result = $flowers->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $value) {
        print '<option value="' . $value['id_flowers'] . '">' . $value['name_flower'] . "</option>";
    }
    $pdo = null;
}

?>