<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" href="<?php bloginfo(template_url); ?>/css/style.css">
        <link rel="stylesheet" href="<?php bloginfo(template_url); ?>/css/projects.css">
        <link rel="stylesheet" href="<?php bloginfo(template_url); ?>/css/portfolio.css">
        <link rel="stylesheet" href="<?php bloginfo(template_url); ?>/css/etlineicons.css">
        <link rel="stylesheet" href="<?php bloginfo(template_url); ?>/bower_components/animate.css/animate.css">
        <link rel="stylesheet" href="<?php bloginfo(template_url); ?>/bower_components/wow/css/site.css">
        <link rel="stylesheet" href="<?php bloginfo(template_url); ?>/bower_components/imagehover.css/css/imagehover.css">
        <link rel="stylesheet" href="<?php bloginfo(template_url); ?>/bower_components/OwlCarousel/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="<?php bloginfo(template_url); ?>/bower_components/OwlCarousel/owl-carousel/owl.theme.css">
        <meta name="viewport" content="initial-scale=1.0 user-scalable=false">
        <meta charset="utf-8">
        <?php wp_head(); ?>
        <title><?php bloginfo('name'); ?></title>
    </head>
    <body>
        <header id="page-top">
            <?php if(is_front_page()) : ?>
            <div class="navbar">
                <div class="navbg"></div>
                <h1>
                    <img src="<?php bloginfo(template_url); ?>/img/marcos_fonseca.svg" alt="Marcos Fonseca">
                </h1>
                <nav class='home-menu'>
                    <i class="nav-mobile fa fa-navicon"></i>
                        <?php wp_nav_menu(
                        array('theme_location' => 'header-menu')
                        );   ?>
                    <div class="nav-menu">
                        <?php wp_nav_menu(
                        array('theme_location' => 'header-menu')
                        );   ?>
                    </div>
                </nav>
            </div>
        <?php endif; ?>
        </header>
