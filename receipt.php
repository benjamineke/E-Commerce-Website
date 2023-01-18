<?php
    // check if payment form was submitted
    if(!isset($_POST['pay'])) {
        // if not, redirect to 'order.php'
        header('location: order.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Vape Shop</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">

    <style>
        body{
            background-image: url('dist/img/bg-image2.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;

            color:white;
        }

        .container{
            margin-top: 7%;
        }

        .form-control{
            background:transparent!important;
            color:black;
            font-size: 18px!important;
        }

    </style>

</head>
<body>

    <?php
        const PAGE = 'receipt';
        require_once 'partials/navbar.php';
    ?>

    <div class="container">
        <div class="mb-4">
            <h1>Receipt</h1>
        </div>

        <!-- Receipt -->
        <table class="table table-bordered text-light">
            <thead>
                <tr>
                    <th>Customer Name</th>
                    <td colspan="2"><?= $_POST['full-name'] ?></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td colspan="2"><?= $_POST['address'] ?></td>
                </tr>
                <tr>
                    <th colspan="2"></th>
                    <th class="text-center">Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Mode</th>
                    <td><?= $_POST['mode'] ?></td>
                    <td align="right"><?= number_format($_POST['mode_price'], 2) ?></td>
                </tr>
                <tr>
                    <th>Item</th>
                    <td><?= $_POST['item'] ?> (<b><?= $_POST['price'] ?></b> per pcs.)</td>
                    <td rowspan="2" class="align-middle" align="right"><?= number_format(($_POST['kilogram'] * $_POST['price']), 2) ?></td>
                </tr>
                <tr>
                    <th>Piece/s</th>
                    <td><b><?= $_POST['kilogram'] ?></b> pcs.</td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="table-warning">
                    <th colspan="2" class="py-3">TOTAL</th>
                    <td align="right" class="py-3"><b><?= number_format($_POST['invoice-total'], 2) ?></b></td>
                </tr>
                <tr class="table-primary">
                    <th colspan="2" class="py-3">PAYMENT</th>
                    <td align="right" class="py-3"><b><?= number_format($_POST['payment'], 2) ?></b></td>
                </tr>

                <?php
                    // compute change
                    $change  = $_POST['payment'] - $_POST['invoice-total'];

                    // determine table row style
                    $class = 'success';
                    $term  = 'CHANGE';
                    if($change < 0) {
                        $class = 'danger';
                        $term  = 'BALANCE';
                    }
                ?>
                <tr class="table-<?= $class ?>">
                    <th colspan="2" class="py-3"><?= $term ?></th>
                    <td align="right" class="py-3"><b><?= number_format(abs($change), 2) ?></b></td>
                </tr>
            </tfoot>
        </table>

        <!-- Order Again Link -->
        <div class="mt-4">
            <a href="order.php" class="btn btn-outline-primary btn-lg">Order Again</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="dist/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>