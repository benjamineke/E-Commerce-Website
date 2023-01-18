<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="dist/img/BenjaminekeLogo.png">
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
        const PAGE = 'order';
        require_once 'partials/navbar.php';
    ?>

    <div class="container">
        <div class="mb-4">
            <h1>Order Form</h1>
        </div>

        <form method="POST" action="invoice.php">
            <!-- Full Name -->
            <div class="mb-3">
                <label><b>Full Name:</b></label>
                <input type="text" class="form-control text-light" id="full-name" name="full-name" required>
            </div>

            <!-- Address -->
            <div class="mb-3 text-light">
                <label><b>Address:</b></label>
                <input type="text" class="form-control text-light" id="address" name="address" required>
            </div>

            <!-- Mode -->
            <div class="mb-3">
                <label><b>Mode:</b></label>
                <br>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="pickup" name="mode" value="Pickup" checked>
                    <label for="pickup" class="form-check-label">Pickup</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="delivery" name="mode" value="Delivery">
                    <label for="delivery" class="form-check-label">Delivery</label>
                </div>
            </div>

            <!-- Item and Weight -->
            <div class="mb-3">
                <div class="row">
                    <!-- Item -->
                    <div class="col-sm-6">
                        <label><b>Product:</b></label>
                        <select class="form-control text-light" id="item" name="item">
                            <option class="form-control" value="E-Liquid">E-Liquid</option>
                            <option class="form-control" value="Devices">Devices</option>
                            <option class="form-control" value="Accessories">Accessories</option>
                            <option class="form-control" value="Starter Kit">Starter Kit</option>
                        </select>
                    </div>

                    <!-- Kilograms -->
                    <div class="col-sm-6 mt-3 mt-sm-0">
                        <label><b>Piece/s:</b></label>
                        <input type="number" class="form-control text-light" id="pieces" name="pieces" value="1" min="1" max="20">
                    </div>
                </div>

            </div>

            <!-- Buttons -->
            <div class="mb-3 pt-2">
                <button type="submit" class="btn btn-primary btn-lg" name="checkout">Checkout</button>
            </div>
        </form>
    </div>



    <!-- Bootstrap JS -->
    <script src="dist/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>