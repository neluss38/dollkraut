<?php

//Header file

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="describtion" content="official website of the dollkraut band and DJ, order here"/>
        <meta charset="utf-8"/>
        <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/assets/dist/img/icons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/assets/dist/img/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/assets/dist/img/icons/favicon-16x16.png">
        <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/assets/dist/img/icons/site.webmanifest">
        <link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/assets/dist/img/icons/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <title>dollkraut</title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header class="header">
            <div class="header-wrapper">
                <ul class="primary">
                    <li>
                        <a data-index="0" class="menu-home">home</a>
                    </li>
                    <li>
                        <a data-index="1"  class="tour">tour data</a>
                    </li>
                    <li>
                        <a data-index="2" class="music">music</a>
                    </li>
                    <li>
                        <button class="bio submenu-title-bio">bio</button>
                        <span>
                            <a data-index="3" class="bio-dj submenu-item-bio">dj</a>
                        </span>
                        <span>
                            <a data-index="4" class="bio-band submenu-item-bio">band</a>
                        </span>
                    </li>
                    <li>
                        <a data-index="5" class="bookings">bookings</a>
                    </li>
                </ul>
                <ul class="social-media">
                    <li class="social-media__item">
                        <a href="https://www.facebook.com/Dollkraut/" target="_blank"></a>
                    </li>
                    <li class="social-media__item social-media__item--instagram">
                        <a href="https://www.instagram.com/dollkraut/" target="_blank"></a>
                    </li>
                </ul>
            </div>
            <div class="hamburger-icon">
                <div class="ham-stripe"></div>
                <div class="ham-stripe"></div>
                <div class="ham-stripe"></div>
            </div>
        </header>
