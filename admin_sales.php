<?php
//Guard
require_once '_guards.php';
Guard::adminOnly();

$todaySales = Sales::getTodaySales();
$totalSales = Sales::getTotalSales();
$transactions = OrderItem::all();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Eden Royal Garden Fresh Stock Control And Sales System</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/admin.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/util.css">
    
    <!-- Datatables  Library -->
    <link rel="stylesheet" type="text/css" href="./assets/css/datatable.css">
    <script src="./assets/js/datatable.js"></script>
    <script src="./assets/js/main.js"></script>

</head>
<body>
    <?php require 'templates/admin_header.php' ?>

    <div class="flex">
        <?php require 'templates/admin_navbar.php' ?>
        <main>

            <div class="flex">
                <div style="flex: 2; padding: 16px;">
                    <div class="subtitle">Sales Informations</div>
                    <hr/>

                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Today's Sales</div>
                        </div>
                        <div class="card-content">
                            KES<?= $todaySales ?>
                        </div>
                    </div>

                    <div class="card mt-16">
                        <div class="card-header">
                            <div class="card-title">Total Sales</div>
                        </div>
                        <div class="card-content">
                            KES<?= $totalSales ?>
                        </div>
                    </div>

                </div>
                <div style="flex: 5; padding: 16px">
                    <div class="subtitle">Transactions</div>
                    <hr/>

                    <table id="transactionsTable">
                        <thead>
                            <tr>
                                <td>Product</td>
                                <td>Quantity</td>
                                <td>Price</td>
                                <td>Subtotal</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($transactions as $transaction) : ?>
                                <tr>
                                    <td><?= $transaction->product_name ?></td>
                                    <td><?= $transaction->quantity ?></td>
                                    <td><?= $transaction->price ?></td>
                                    <td>KES<?= $transaction->quantity * $transaction->price ?></td>
                            <?php endforeach ?>
                        </tbody>
                    </table>

                </div>
            </div>

        </main>
    </div>

<script type="text/javascript">
var dataTable = new simpleDatatables.DataTable("#transactionsTable")
</script>

</body>
</html>
