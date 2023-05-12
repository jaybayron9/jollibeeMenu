<?php
session_start();

require('core/functions.php');

require(core('connection'));
require(core('auth'));
require(core('menu'));
require(core('route/routes'));

$start = $_POST['start_date'];
$end = $_POST['end_date'];

$query = Menu::$conn->query("
        SELECT * FROM transactions 
        WHERE DATE(date) BETWEEN DATE('{$start}') AND DATE('{$end}')
    ");

?>
<style>
    th,
    td {
        padding: 5px;
    }
</style>

<table border="2">
    <thead>
        <tr>
            <th>ID</th>
            <th>Customer Name</th>
            <th>Purchase</th>
            <th>Date</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <?php

        $total = 0;
        foreach ($query as $row) {
            $total += $row['price'];

            $fix_purchase = array_filter(explode("| ", $row['purchase']));

            $purchase = '';
            for ($i = 0; $i < count($fix_purchase); $i++) {
                $purchase .= $fix_purchase[$i] . "<br>";
            }
        ?>

            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['customer_name'] ?></td>
                <td><?= $purchase ?></td>
                <td><?= $row['date'] ?></td>
                <td><?= $row['price'] ?></td>
            </tr>
        <?php } ?>
        <tr>
            <td colspan="4"><center>Total</center></td>
            <td><?= $total ?></td>
        </tr>
    </tbody>
</table>

<script>
    window.onload = function() {
        window.print();
    };

    window.onbeforeprint = function() {
        // The "Print" button was clicked
        console.log("Print button clicked");
    };

    window.onafterprint = function() {
        // The print dialog was closed (either by clicking "Print" or "Close")
        window.close();
    };
</script>