<?php if(!defined('PAGE')) exit(); ?>

<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <h1><a class="navbar-brand text-info fw-bold" href="index.php"><b>Assbok Oragon</b></a></h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title text-info" id="offcanvasDarkNavbarLabel"><b>Vape Shop</b></h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link<?= PAGE === 'home' ? ' active' : '' ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= PAGE === 'product' ? ' active' : '' ?>" href="product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= PAGE === 'order' || PAGE === 'invoice' || PAGE === 'receipt' ? ' active' : '' ?>" href="order.php">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= PAGE === 'contact' ? ' active' : '' ?>" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= PAGE === 'about' ? ' active' : '' ?>" href="about.php">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>