<?php

//include ('Database.php');
//use database\select;

    function getOrders()
{
    include("php/database1.php");
    ?>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Order id:</th>
            <th scope="col">Email:</th>
            <th scope="col">Flowers:</th>
            <th scope="col">Units:</th>
            <th scope="col">Pack:</th>
        </tr>
        </thead>
        <tbody>
        <?php

        $ordersData = $pdo->query("SELECT `id_order`, `email_order`, `flower_name`, `unit_order`, `boxing_order` FROM `flower_order`");
        $ordersData->execute();
        $orderArray = $ordersData->fetchAll(PDO::FETCH_ASSOC);

        foreach ($orderArray as $order) {
            print '<tr>
                <td>' . $order['id_order'] . '</td>
                <td>' . $order['email_order'] . '</td>
                <td>' . $order['flower_name'] . '</td>
                <td>' . $order['unit_order'] . '</td>
                <td>' . $order['boxing_order'] . '</td>
          </tr>';
        }
        $pdo = null;
        ?>
    </table>
    <?php
}

?>