<?php
    // check if order form was submitted
    if(!isset($_POST['checkout'])) {
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

            color: white;
        }

        .container{
            margin-top: 6%;
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
        const PAGE = 'invoice';
        require_once 'partials/navbar.php';

        // prepare item prices (per kilogram)
        $item_prices = [
            'E-Liquid'         => 260,
            'Devices'          => 180,
            'Accessories'      => 175,
            'Starter Kit'      => 480
        ];

        // prepare mode prices
        $mode_prices = [
            'Pickup'   => 0,
            'Delivery' => 20
        ];


        // get form inputs
        $full_name    = strip_tags($_POST['full-name']);
        $address      = strip_tags($_POST['address']);
        $mode         = $_POST['mode'];
        $item         = $_POST['item'];
        $pieces    = intval($_POST['pieces']);

        // compute
        $price      = $item_prices[$item];
        $item_price = $price * $pieces;
        $mode_price = $mode_prices[$mode];
    
        $invoice_total = $item_price + $mode_price;
    ?>

    <div class="container">
        <div class="mb-4">
            <h2>Invoice</h2>
            <p>
                Thank you for ordering
                <b class="text-info"><i><?= $full_name ?></i></b> of
                <b class="text-info"><i><?= $address ?></i>.</b>
                Please review your order details below:
            </p>
        </div>

        <!-- Invoice -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th colspan="2"></th>
                    <th class="text-center text-light">Charge</th>
                </tr>
            </thead>
            <tbody class="text-light">
                <tr>
                    <th>Mode</th>
                    <td><?= $mode ?></td>
                    <td align="right"><?= number_format($mode_price, 2) ?></td>
                </tr>
                <tr>
                    <th>Item</th>
                    <td><?= $item ?> (<b><?= $price ?></b> per pcs.)</td>
                    <td rowspan="2" class="align-middle" align="right"><?= number_format($item_price, 2) ?></td>
                </tr>
                <tr>
                    <th>Piece/s</th>
                    <td><b><?= $pieces ?></b> pcs.</td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="table-warning">
                    <th colspan="2" class="py-3">TOTAL</th>
                    <td align="right" class="py-3"><b><?= number_format($invoice_total, 2) ?></b></td>
                </tr>
            </tfoot>
        </table>

        <!-- Payment -->
        <div class="row pt-3">
            <div class="col-sm-6 offset-sm-6">
                <form method="POST" action="receipt.php">
                    <label class="form-label text-light fw-bold" for="payment"><h5>How much will you pay?</h5></label>
                    <div class="input-group input-group-lg mb-3">
                        <input type="number" class="form-control text-light" id="payment" name="payment" required>
                        <button class="btn btn-outline-primary" type="submit" name="pay">Pay</button>
                    </div>

                    <!-- Hidden Fields -->
                    <input type="hidden" name="full-name" value="<?= $full_name ?>">
                    <input type="hidden" name="address" value="<?= $address ?>">
                    <input type="hidden" name="mode" value="<?= $mode ?>">
                    <input type="hidden" name="mode_price" value="<?= $mode_price ?>">
                    <input type="hidden" name="item" value="<?= $item ?>">
                    <input type="hidden" name="price" value="<?= $price ?>">
                    <input type="hidden" name="kilogram" value="<?= $pieces ?>">
                    <input type="hidden" name="invoice-total" value="<?= $invoice_total ?>">
                </form>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="dist/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>