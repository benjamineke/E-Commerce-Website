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
        top: 89%;
        }

        #myBtn:hover {
        background: #ddd;
        color: black;
        }
    </style>

</head>
<body>

    <?php
        const PAGE = 'contact';
        require_once 'partials/navbar.php';
    ?>

    <video autoplay muted loop id="myVideo">
        <source src="dist/img/VideoBG.mp4" type="video/mp4">
    </video>

    <div class="content text-info">
        <h1>Contact Us:</h1>
        <ul>
            <li>
                <a href="https://twitter.com/BenjieMondia" class="link-info"><h5>https://twitter.com/BenjieMondia</h5></a>
            </li>
            <li>
                <a href="https://www.instagram.com/benji_e17/" class="link-info"><h5>https://www.instagram.com/benji_e17/</h5></a>
            </li>  
            <li>
                <a href="https://www.facebook.com/ast4roth69" class="link-info"><h5>https://www.facebook.com/ast4roth69</h5></a>
            </li>
            <li>  
                <a href="https://www.linkedin.com/in/benjie-mondia-74a24325b/" class="link-info"><h5>https://www.linkedin.com/in/benjie-mondia-74a24325b/</h5></a>
            </li>
            <li>   
                <a href="https://github.com/benjamineke" class="link-info"><h5>https://github.com/benjamineke</h5></a>
            </li>
        </ul>
        <button class="btn btn-outline-info" id="myBtn" onclick="myFunction()">Pause</button>
    </div>
    
    <script src="main.js"></script>


    <!-- Bootstrap JS -->
    <script src="dist/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>