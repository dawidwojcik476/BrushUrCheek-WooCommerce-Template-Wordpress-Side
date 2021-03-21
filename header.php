<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head(); ?>
    <script src="https://kit.fontawesome.com/84e5dea409.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?> >
    <div class="container">
        <div class="bgc-header">
            <header class="main-header">
                <div class="main-header__logo">
                   <a href="http://127.0.0.1/brushurcheekwoocomerce"> <img class="logo" src="http://127.0.0.1/brushurcheekwoocomerce/wp-content/uploads/2021/03/logo.png" alt=""></a>
                </div>

                <nav class="main-header__nav">
                    <div class="menu-link">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                   <?php 

                    wp_nav_menu( array(
                        'theme_location' => 'top-menu',
                        'container' => false
                    ));

                   ?>
                </nav>
                <div class="main-header__tools">
                    <a href="#"><i class="fas fa-search"></i></a>
                    <a href="<?php echo wc_get_cart_url(); ?>"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </header>