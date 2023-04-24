<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Квітковий Рай</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.ico">

    <?php wp_head(); ?>
</head>

<body>

    <!--===== Pre-Loading area Start =====-->
    <div id="preloader">
        <div class="preloader">
            <div class="spinner-block">
                <h1 class="spinner spinner-3 mb-0">.</h1>
            </div>
        </div>
    </div>
    <!--==== Pre-Loading Area End ====-->

    <!-- Header Area Start Here -->
    <header class="main-header-area">
        <!-- Main Header Area Start -->
        <div class="main-header header-transparent">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-xl-2 col-md-6 col-6 col-custom">
                        <div class="header-logo d-flex align-items-center">
                            <a href="index.html">
                            <?php the_custom_logo() ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 d-none d-lg-flex justify-content-center col-custom">
                        <nav class="main-nav d-none d-lg-flex">
                            <ul class="nav">
                                <li>
                                    <a class="active" href="<?php echo get_option('home'); ?>/shop">
                                        <span class="menu-text"> Магазин</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo get_option('home'); ?>/#about">
                                        <span class="menu-text"> Про нас</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo get_option('home'); ?>/#sale">
                                        <span class="menu-text"> Знижки</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo get_option('home'); ?>/#feedback">
                                        <span class="menu-text"> Відгуки</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#contacts">
                                        <span class="menu-text"> Контакти</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-md-6 col-6 col-custom">
                        <div class="header-right-area main-nav">
                            <ul class="nav">
                                <li class="minicart-wrap">
                                    <a href="<?php echo get_option('home'); ?>/cart" class="minicart-btn toolbar-btn">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End Here -->