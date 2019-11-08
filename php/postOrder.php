<?php

function postOrder()
{
    include_once('php/database.php');
    ?>

    <form class="form-detail" action="#" method="post">
        <h2>POST</h2>
        <h3>NENUSISIUNCIA</h3>
        <div class="form-row">
            <input type="email" name="email_order" id="full-email" class="input-text" placeholder="Email Address"
                   required>
        </div>
        <div class="form-row">
            <select name="flower_name" class="input-text">
                <?php getFlowers(); ?>
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
            <input type="submit" name="post" class="register" value="Order">
        </div>
    </form>
    <?php
    if (isset($_POST['post'])) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email_order = $_POST['email_order'];
            $flower_name = $_POST['flower_name'];
            $unit_order = $_POST['unit_order'];
            $boxing_order = $_POST['boxing_order'];

            if (empty($email_order) || empty($unit_order)) {
                print $status = "All inputs are empty !";
            } else {
                $sql = "INSERT INTO flower_order (email_order, flower_name, unit_order, boxing_order,) VALUES (:email_order, :flower_name, :unit_order, :boxing_order)";

                $stmt = $pdo->prepare($sql);

                $stmt->execute([
                    'email_order' => $email_order,
                    'flower_name' => $flower_name,
                    'unit_order' => $unit_order,
                    'boxing_order' => $boxing_order,
                ]);
                print $status = "Your order was sent";
            }
        }
    }
}

?>