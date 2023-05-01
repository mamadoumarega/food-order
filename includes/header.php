<?php

    session_start();
    const APPURL = "http://localhost/foodOrdering";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Freshcery | Groceries Organic Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="<?php echo APPURL; ?>/assets/fonts/sb-bistro/sb-bistro.css" rel="stylesheet" type="text/css">
    <link href="<?php echo APPURL; ?>/assets/fonts/font-awesome/font-awesome.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" media="all" href="<?php echo APPURL; ?>/assets/packages/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo APPURL; ?>/assets/packages/o2system-ui/o2system-ui.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo APPURL; ?>/assets/packages/owl-carousel/owl-carousel.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo APPURL; ?>/assets/packages/cloudzoom/cloudzoom.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo APPURL; ?>/assets/packages/thumbelina/thumbelina.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo APPURL; ?>/assets/packages/bootstrap-touchspin/bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo APPURL; ?>/assets/css/theme.css">

</head>
<body>
<div class="page-header">
    <!--=============== Navbar ===============-->
    <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-transparent" id="page-navigation">
        <div class="container">
            <!-- Navbar Brand -->
            <a href="<?= APPURL; ?>/index.php" class="navbar-brand">
                <img src="<?php echo APPURL; ?>/assets/img/logo/logo.png" alt="">
            </a>

            <!-- Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarcollapse">
                <!-- Navbar Menu -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="<?= APPURL; ?>/shop.php" class="nav-link">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= APPURL; ?>/faq.php" class="nav-link">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= APPURL; ?>/contact.php" class="nav-link">Contact</a>
                    </li>
                    <?php if(!isset($_SESSION['username'])) :?>
                        <li class="nav-item">
                            <a href="<?php echo APPURL; ?>/auth/register.php" class="nav-link">Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo APPURL; ?>/auth/login.php" class="nav-link">Login</a>
                        </li>
                    <?php else: ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar-header"><img src="<?php echo APPURL; ?>/assets/img/logo/avatar.jpg" alt=""></div> <?= $_SESSION['username'] ;?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= APPURL; ?>/transaction.php">Transactions History</a>
                            <a class="dropdown-item" href="<?= APPURL; ?>/setting.php">Settings</a>
                            <a class="dropdown-item" href="<?= APPURL; ?>/auth/logout.php">Logout</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-shopping-basket"></i> <span class="badge badge-primary">5</span>
                        </a>
                        <div class="dropdown-menu shopping-cart">
                            <ul>
                                <li>
                                    <div class="drop-title">Your Cart</div>
                                </li>
                                <li>
                                    <div class="shopping-cart-list">
                                        <div class="media">
                                            <img class="d-flex mr-3" src="<?php echo APPURL; ?>/assets/img/logo/avatar.jpg" width="60" alt="">
                                            <div class="media-body">
                                                <h5><a href="javascript:void(0)">Carrot</a></h5>
                                                <p class="price">
                                                    <span class="discount text-muted">Rp. 700.000</span>
                                                    <span>Rp. 100.000</span>
                                                </p>
                                                <p class="text-muted">Qty: 1</p>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <img class="d-flex mr-3" src="<?php echo APPURL; ?>/assets/img/logo/avatar.jpg" width="60" alt="">
                                            <div class="media-body">
                                                <h5><a href="javascript:void(0)">Carrot</a></h5>
                                                <p class="price">
                                                    <span class="discount text-muted">Rp. 700.000</span>
                                                    <span>Rp. 100.000</span>
                                                </p>
                                                <p class="text-muted">Qty: 1</p>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <img class="d-flex mr-3" src="<?php echo APPURL; ?>/assets/img/logo/avatar.jpg" width="60" alt="">
                                            <div class="media-body">
                                                <h5><a href="javascript:void(0)">Carrot</a></h5>
                                                <p class="price">
                                                    <span class="discount text-muted">Rp. 700.000</span>
                                                    <span>Rp. 100.000</span>
                                                </p>
                                                <p class="text-muted">Qty: 1</p>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <img class="d-flex mr-3" src="<?php echo APPURL; ?>/assets/img/logo/avatar.jpg" width="60" alt="">
                                            <div class="media-body">
                                                <h5><a href="javascript:void(0)">Carrot</a></h5>
                                                <p class="price">
                                                    <span class="discount text-muted">Rp. 700.000</span>
                                                    <span>Rp. 100.000</span>
                                                </p>
                                                <p class="text-muted">Qty: 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="drop-title d-flex justify-content-between">
                                        <span>Total:</span>
                                        <span class="text-primary"><strong>Rp. 2000.000</strong></span>
                                    </div>
                                </li>
                                <li class="d-flex justify-content-between pl-3 pr-3 pt-3">
                                    <a href="<?= APPURL; ?>/cart.php" class="btn btn-default">View Cart</a>
                                    <a href="<?= APPURL; ?>/checkout.php" class="btn btn-primary">Checkout</a>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</div>