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
</head>

    <style>
        body{
            background-image: url('dist/img/bg-image1.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        .container{
            margin-top: 17%;
            color: rgba(0, 255, 255, 1);
            background: rgba(0, 0, 0, 0.5);
        }

    </style>
<body>

    <?php
        const PAGE = 'home';
        require_once 'partials/navbar.php';
    ?>

    <div class="container" style="max-width: 1000px;">
        <div class="row g-0"> 
            <div class="col-md-12">
                <div class="card-body text-center">
                    <h1 class="card-title"><b>Vape Shop</b></h1>
                    <h5 class="card-text">"Experience the difference with our premium e-liquids."</h5>

                    <div class="mt-4">
                        <a href="order.php" class="btn btn-outline-primary btn-lg"><b>Order Now</b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="dist/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>