<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('Database.php');

use database\Database;

class Flower
{

}

$flower_array = new Database();

$sql_flower = 'SELECT * FROM flowers';
$param_flower = 'Flower';

$result_flower = $flower_array->select($sql_flower, $param_flower);


class Order
{

}

$order_array = New Database();

$sql_order = 'SELECT `id_order`, `email_order`, `flower_name`, `unit_order`, `boxing_order` FROM `flower_order`';
$param_order = 'Order';

$result_order = $order_array->select($sql_order, $param_order);

//-------------------- UPDATE

if (isset($_POST['update'])) {
    $update_array = new Database();

    $sql_update = 'UPDATE `flower_order` SET `email_order`= :email_order,`flower_name`=:flower_name,`unit_order`=:unit_order,`boxing_order`=:boxing_order WHERE `id_order` = :id_order';
    $param_update = [
        'id_order' => $_POST['id_order'],
        'email_order' => $_POST['email_order'],
        'flower_name' => $_POST['flower_name'],
        'unit_order' => $_POST['unit_order'],
        'boxing_order' => $_POST['boxing_order'],
    ];

    $update_array->update($sql_update, $param_update);
}


//__________________ INSERT

if (isset($_POST['insert'])) {
    $insert_array = new Database();

    $sql_insert = "INSERT INTO `flower_order`(`email_order`, `flower_name`, `unit_order`, `boxing_order`) VALUES (:email_order, :flower_name, :unit_order, :boxing_order)";
    $param_insert = [
        'email_order' => $_POST['email_order_insert'],
        'flower_name' => $_POST['flower_name_insert'],
        'unit_order' => $_POST['unit_order_insert'],
        'boxing_order' => $_POST['boxing_order_insert'],
    ];
    $insert_array->insert($sql_insert, $param_insert);
}


//var_dump($result_flower);
var_dump($result_order);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form class="form-detail" action="#" method="post">

    <h2>UPDATE</h2>

    <div class="form-row">
        <input type="text" name="id_order" class="input-text" placeholder="ID" required>
    </div>
    <div class="form-row">
        <input type="email" name="email_order" id="full-email" class="input-text" placeholder="Email Address"
               required>
    </div>
    <div class="form-row">
        <select name="flower_name" class="input-text">
            <option value="">Geles</option>
        </select>
    </div>
    <div class="form-row">
        <input type="number" name="unit_order" id="units" class="input-text" placeholder="Units" required>
    </div>
    <div class="form-row">
        <select name="boxing_order" class="input-text">
            <option value="box">box</option>
            <option value="just">just ...</option>
        </select>
    </div>
    <div class="form-row-last">
        <input type="submit" name="update" class="register" value="Order">
    </div>
</form>
<form class="form-detail" action="#" method="post">
    <h2>INSERT</h2>
    <div class="form-row">
        <input type="email" name="email_order_insert" id="full-email" class="input-text" placeholder="Email Address"
               required>
    </div>
    <div class="form-row">
        <select name="flower_name_insert" class="input-text">
            <option value="Tulpes">Geles</option>
        </select>
    </div>
    <div class="form-row">
        <input type="number" name="unit_order_insert" id="units" class="input-text" placeholder="Units" required>
    </div>
    <div class="form-row">
        <select name="boxing_order_insert" class="input-text">
            <option value="box">box</option>
            <option value="just">just ...</option>
        </select>
    </div>
    <div class="form-row-last">
        <input type="submit" name="insert" class="register" value="Order">
    </div>
</form>
</body>
</html>
