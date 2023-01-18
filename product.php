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
            background-image: url('dist/img/bg-image2.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;

            color: white;
        }

        .container{
            margin-top: 10%;
            background: rgba(0, 0, 0, 0.5);
        }

        .card-body{
            margin-top: 20%;
        }

    </style>
<body>

    <?php
        const PAGE = 'product';
        require_once 'partials/navbar.php';
    ?>
   <div class="container" style="max-width: 1000px;">
        <div class="row g-0">
            <div class="col-md-3">
                <img src="dist/img/E-Juices.jpg" class="img-fluid rounded-start" alt="Juices">
            </div>
            <div class="col-md-8">
                <div class="card-body text-center">
                    <h2 class="card-title"><b>E-Liquid</b></h2>
                    <p class="card-text">E-liquid, also known as e-juice or vape juice, is the liquid used in electronic cigarettes and vaporizers. It typically consists of propylene glycol and/or vegetable glycerin, flavoring, and may or may not contain nicotine. The liquid is heated by the device to produce a vapor that is inhaled. E-liquids come in a wide variety of flavors and nicotine strengths, allowing users to customize their vaping experience. It's important to note that the long-term health effects of vaping are not yet fully understood and more research is needed.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-4" style="max-width: 1000px;">
        <div class="row g-0"> 
            <div class="col-md-3">
                <img src="dist/img/Devices.jpg" class="img-fluid rounded-start" alt="Devices">
            </div>
            <div class="col-md-8">
                <div class="card-body text-center">
                    <h2 class="card-title"><b>Devices</b></h2>
                    <p class="card-text">There are many different types of vaping devices available, each with their own unique features and capabilities. E-cigarettes also known as cigalikes, Vape pens, Box mods, and Pod systems. <br><br>It's important to note that vaping devices should be used responsibly and with caution. The batteries can be dangerous if not handled correctly and it's also important to make sure that the device is used with the correct type and amount of e-liquid.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-4" style="max-width: 1000px;">
        <div class="row g-0"> 
            <div class="col-md-3">
                <img src="dist/img/Accessories.jpg" class="img-fluid rounded-start" alt="Accessories">
            </div>
            <div class="col-md-8">
                <div class="card-body text-center">
                    <h2 class="card-title"><b>Accessories</b></h2>
                    <p class="card-text">There are many different types of accessories available for vaping devices, each with their own unique function and purpose. Some examples include: Coils, Tanks, Batteries, Chargers, Drip Tips, Protective Carrying Cases, Cotton, and Building Tools. <br><br>It's important to ensure that all accessories are compatible with the specific vaping device being used and that they are used in accordance with the manufacturer's instructions.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-4" style="max-width: 1000px;">
        <div class="row g-0"> 
            <div class="col-md-3">
                <img src="dist/img/Starter Kit.jpg" class="img-fluid rounded-start" alt="Starter Kit">
            </div>
            <div class="col-md-8">
                <div class="card-body text-center">
                    <h2 class="card-title"><b>Starter Kit</b></h2>
                    <p class="card-text">A vaping starter kit is a package that includes everything a person needs to start vaping. These kits typically include a vaping device, a charger, and one or more tanks or cartridges. Starter kits are often designed for beginners who are new to vaping and may not have a lot of experience with the different types of devices and accessories that are available.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="dist/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>