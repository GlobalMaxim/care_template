<?php

error_reporting( 0 );
ini_set( 'display_errors', 0 );

require "./less/func.php";
require "./less/lessc.inc.php";

# Функция для компиляции CSS из Less
autoCompileLess( './less/style.less', './css/style.css' );

?>
<!DOCTYPE html>

<html>

<head>
    <title>Site</title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="title" content="Site" />

    <meta name="robots" content="noindex" />
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/twentytwenty/twentytwenty.css">
    <link rel="stylesheet" href="css/style.css?t=<?php echo date('U'); ?>">

</head>

<body>
    <!--***БОКОВОЕ МОБ МЕНЮ***-->
    <div class="for-mob-menu d-xl-none">
        <div class="manage">
            <div class="humb">
                <div class="dv-1"></div>
                <div class="dv-2"></div>
                <div class="dv-3"></div>
            </div>
            <div class="logo">
                <a href="#">
                    <img class="mw-100" src="images/logo.jpg" alt="logo">
                </a>
            </div>
            <div class="for-cart">
                <a href="" class="cart">
                    <span class="count">1</span>
                    <span class="icon">
                        <img src="images/cart_mob.png" alt="cart">
                    </span>
                </a>
            </div>
        </div>

        <div class="mobile-menu">
            <div class="close-menu">&times;
            </div>
            <div class="logo">
                <a href="#"><img class="mw-100" src="images/logo.jpg" alt="logo"></a>
            </div>
            <nav class="main-links my-4">
                <div class="link"><a href="#">О нас</a></div>
                <div class="link dropdown">
                    <a href="#" class="btn dropdown-toggle" data-bs-toggle="dropdown">
                        Интернет-магазин
                    </a>
                    <div class="dropdown-menu">
                        <div class="link"><a class="active" href="#">Дерево</a></div>
                        <div class="link"><a href="#">Замша</a></div>
                        <div class="link"><a href="#">Кожа</a></div>
                        <div class="link"><a href="#">Текстиль</a></div>
                        <div class="link"><a href="#">Акционные предложения</a></div>
                        <div class="link"><a href="#">Наборы</a></div>
                    </div>
                </div>
                <div class="link"><a href="#">Энциклопедия</a></div>
                <div class="link"><a href="#">Услуги мастерской</a></div>
                <div class="link"><a href="#">Цвет изделия</a></div>
                <div class="link"><a href="#">Контакты</a></div>
            </nav>
            <div class="languages">
                <div class="link"><a href="#">RU</a></div>
                <div class="link"><a class="active" href="#">EN</a></div>
                <div class="link"><a href="#">UA</a></div>
            </div>
        </div>
        <div class="menu-back"></div>
    </div>
    <!--//боковое моб. меню-->

    <div class="wrapper">
        <div class="header d-none d-xl-block">
            <div class="h-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="logo">
                                <a href="#">
                                    <img src="images/logo.jpg" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col ms-xl-3 ms-xxl-5">
                            <nav class="menu">
                                <div class="link"><a class="active" href="#">О нас</a></div>
                                <div class="link"><a href="#">Интернет-магазин</a></div>
                                <div class="link"><a href="#">Энциклопедия</a></div>
                                <div class="link"><a href="#">Услуги мастерской</a></div>
                                <div class="link"><a href="#">Цвет изделия</a></div>
                                <div class="link"><a href="#">Контакты</a></div>
                                <div class="languages dropdown link hover-drop">
                                    <a href="#" class="btn dropdown-toggle" data-bs-toggle="dropdown">RU</a>
                                    <div class="dropdown-menu">
                                        <div class="link"><a href="#">EN</a></div>
                                        <div class="link"><a href="#">UA</a></div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col me-5">
                            <nav class="categories">
                                <div class="link"><a class="active" href="#">Дерево</a></div>
                                <div class="link"><a href="#">Замша</a></div>
                                <div class="link"><a href="#">Кожа</a></div>
                                <div class="link"><a href="#">Текстиль</a></div>
                                <div class="link"><a href="#">Акционные предложения</a></div>
                                <div class="link"><a href="#">Наборы</a></div>
                            </nav>
                        </div>
                        <div class="col-auto">
                            <div class="for-cart">
                                <a href="" class="cart">
                                    <span class="count">1</span>
                                    <span class="icon">
                                        <img src="images/cart.png" alt="cart">
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
