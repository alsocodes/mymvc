<?php defined ('BASEPATH') or exit ('No direct access'); ?>
<?php
    ob_start(); // Sementara pakai ini untuk menghilangkan error 'Cannot modify header information - headers already s ...'
?>
<!DOCTYPE html>
<html lang="en" id="fullpage" class="full-height">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <title><?php echo $seo['title']; ?></title> -->
        <meta name="keywords" content="<?php echo $seo['keywords']; ?>">
        <meta name="description" content="<?php echo $seo['description']; ?>">
        <meta name="author" content="<?php echo $seo['author']; ?>">
        <meta name="robots" content="index,follow">
        <meta name="format-detection" content="telephone=no">
        <meta name="sitelock-site-verification" content="" />

        <link href="<?php echo $this->base_url; ?>assets/images/static/thefavored-one-icon-black.png" type="image/x-icon" rel="icon">
	    <link href="<?php echo $this->base_url; ?>assets/images/static/thefavored-one-icon-black.png" type="image/x-icon" rel="shortcut icon">

        <link href="<?php echo $this->base_url; ?>assets/library/font-awesome/css/font-awesome.min.css" rel="stylesheet" >
        <link href="<?php echo $this->base_url; ?>assets/library/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Karma|Khula|Montserrat" rel="stylesheet">
        <link href="<?php echo $this->base_url; ?>assets/library/animate/animate.css" rel="stylesheet">
        <link href="<?php echo $this->base_url; ?>assets/css/app.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo $this->base_url; ?>assets/vendor/awn/awn.css">
        <!-- <link href="https://panel.chatcompose.com/static/EN/global/export/css\main.0ec6acf6.css" rel="stylesheet"> -->
        <!-- <script async type="text/javascript" src="https://panel.chatcompose.com/static/EN/global/export/js\main.dec259c7.js" user="alsod"></script>   -->
    </head>

        <body class="front">
            <!-- header -->
                <header>
                    <!-- navbar -->
                    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
                        <div class="container-fluid">
                            <div class="logo wow bounceIn" data-wow-delay="0.1s">
                                <a href="<?php echo $this->base_url; ?>">
                                    <img src="<?php echo $this->base_url; ?>assets/images/static/logo-white.png" alt="LOGO" height="100%" width="100%">
                                </a>
                            </div>

                            <div class="pull-left desktop-nav-left">
                                <ul class="nav">
                                    <li class="nav-item text-uppercase">
                                        <a class="nav-link font-nav" href="<?php echo $this->base_url; ?>">Home</a>
                                    </li>
                                    <li class="nav-item text-uppercase">
                                        <a class="nav-link font-nav" href="<?php echo $this->base_url; ?>membership">Membership</a>
                                    </li>
                                    <li class="nav-item text-uppercase">
                                        <a class="nav-link font-nav" href="<?php echo $this->base_url; ?>product">Product</a>
                                    </li>
                                     <li class="nav-item text-uppercase">
                                        <a class="nav-link font-nav" href="<?php echo $this->base_url; ?>about">About</a>
                                    </li>
                                     <li class="nav-item text-uppercase">
                                        <a class="nav-link font-nav" href="<?php echo $this->base_url; ?>contact">Contact Us</a>
                                    </li>
                                     <li class="nav-item text-uppercase">
                                        <a class="nav-link font-nav" href="<?php echo $this->base_url; ?>events">Events</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="pull-right desktop-nav-right">
                                <ul class="nav">
                                    <li class="nav-item text-uppercase">
                                        <a class="nav-link btn-login scrolling-navbar-btn" href="<?php echo $this->base_url; ?>member">Login Member</a>
                                    </li>
                                    <li class="nav-item text-uppercase">
                                        <a class="nav-link btn-cart scrolling-navbar-btn" href="<?php echo $this->base_url; ?>order"><i class="fa fa-shopping-cart"></i>  Cart</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link btn-login scrolling-navbar-btn" href="#"><i class="fa fa-shopping-cart"></i>Cart</a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- navbar -->

                    <!-- Mobile Device Menu -->
                    		<div class="sidebar-right-menu-fa">
                                <i class="fa fa-list fa-2x" style="padding-top:25px;"></i>
                            </div>

                            <div id="sidebar-right-menu" style="display:none">
                                <div class="menu-content">
                                    <div class="sidebar-right-menu-fa">
                                        <i class="fa fa-close fa-2x"></i>
                                    </div>
    
                                    <div class="menu-list" style="padding-top: 35px;margin-top: 10px;">

                                        <hr style="background-color:white">
                                        
                                        <a class="menu" href="<?php echo $this->base_url; ?>"> HOME </a>
                                        <a class="menu" href="<?php echo $this->base_url; ?>membership"> MEMBERSHIP </a>
                                        <a class="menu" href="<?php echo $this->base_url; ?>product"> PRODUCT </a>
                                        <!-- <a class="submenu" href="#"> PRODUCT
                                            <i class="fa fa-caret-down"></i>
                                        </a> -->
                                        <div class="dropdown-container">
                                            <!-- <a class="smooth" href="<?php echo $this->base_url; ?>?product#brightening-cool-down-toner">BRIGHTENING COOL DOWN TONER</a>
                                            <a class="smooth" href="<?php echo $this->base_url; ?>?product#real-skin-cc-cushion">REAL SKIN CC CHUSION</a>
                                            <a class="smooth" href="<?php echo $this->base_url; ?>?product#sun-gel">SUN GEL</a>
                                            <a class="smooth" href="<?php echo $this->base_url; ?>?product#acne-solutions-clarifying-cleansing-foam">ACNE SOLUTIONS CLARIFYING CLEANSING FOAM</a> -->
                                        </div>
                                        <a class="menu" href="<?php echo $this->base_url; ?>about"> ABOUT US </a>
                                        <a class="menu" href="<?php echo $this->base_url; ?>events"> EVENTS </a>
                                        <a class="menu" href="<?php echo $this->base_url; ?>member"> LOGIN MEMBER </a>
                                        <a class="menu" href="<?php echo $this->base_url; ?>order"> CART </a>
                                    </div>
                                </div>
                            </div>
                    <!-- Mobile Device Menu -->
                </header>
            <!-- header -->
