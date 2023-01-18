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
        * {
        box-sizing: border-box;
        }

        body {
        margin: 0;
        font-family: Arial;
        font-size: 17px;
        }

        #myVideo {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%; 
        min-height: 100%;
        }

        .content {
        position: fixed;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        color: #f1f1f1;
        width: 100%;
        padding: 20px;
        }

        #myBtn {
        width: 200px;
        font-size: 18px;
        padding: 10px;
        cursor: pointer;
        position: fixed;
        left: 80%;
        top: 90%;
        }

        #myBtn:hover {
        background: #ddd;
        color: black;
        }
    </style>

</head>
<body>

    <?php
        const PAGE = 'about';
        require_once 'partials/navbar.php';
    ?>

    <video autoplay muted loop id="myVideo">
        <source src="dist/img/VideoBG.mp4" type="video/mp4">
    </video>

    <div class="content text-info">
        <h1>About Us:</h1>
        <h5>"Welcome to <b>Assbok Oragon</b> Vape Shop, your one-stop shop for all your vaping needs. We are a dedicated team of vaping enthusiasts who are passionate about providing our customers with the best products and services. <br><br>
            Our shop offers a wide range of vaping devices, e-liquids, and accessories to suit all levels of vapers, from beginners to experienced users. We only stock products from reputable brands, ensuring the highest quality and safety standards. <br><br>
            We pride ourselves on providing excellent customer service, and our friendly and knowledgeable staff are always happy to answer any questions you may have and help you find the right products for your needs. We also offer a variety of workshops, classes and events to help you learn more about vaping and to connect with other vaping enthusiasts. <br><br>
            Thank you for choosing <b>Assbok Oragon</b> Vape Shop, we look forward to serving you!"
        </h5>
        <h2>Address:</h2>
        <h3>Located @ San Francisco Nabua Camarines Sur</h3>
        <button class="btn btn-outline-info" id="myBtn" onclick="myFunction()">Pause</button>
    </div>
    
    <script src="main.js"></script>


    <!-- Bootstrap JS -->
    <script src="dist/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>