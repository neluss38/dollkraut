<?php

 //Header file

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
        <link href="<?php bloginfo('template_directory'); ?>/css/site.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header class="header">
            <div class="header-wrapper">
                <ul>
                    <li>
                        <a class="menu-home">home</a>
                    </li>
                    <li>
                        <a href="https://www.residentadvisor.net/widget/eventlisting?dj=dollkraut&bgcolor=282425&libkcolor=93119f&textcolor=93119f&darkbuttons=true" class="tour">tour data</a>
                    </li>
                    <li>
                        <a class="music">music</a>
                    </li>
                    <li>
                        <a class="bio submenu-title-bio">bio</a>
                        <span>
                            <a class="bio-dj submenu-item-bio">dj</a>
                        </span>
                        <span>
                            <a class="bio-band submenu-item-bio">band</a>
                        </span>
                    </li>
                    <li>
                        <a class="bookings submenu-title-booking">bookings</a>
                        <span>
                            <a class="booking-dj submenu-item-booking">dj</a>
                        </span>
                        <span>
                            <a class="booking-band submenu-item-booking">band</a>
                        </span>
                    </li>
                </ul>
                <ul class="social-media">
                    <li class="social-media__item">
                        <a></a>
                    </li>
                    <li class="social-media__item social-media__item--instagram">
                        <a></a>
                    </li>
                </ul>
            </div>
            <div class="hamburger-icon">
                <div class="ham-stripe"></div>
                <div class="ham-stripe"></div>
                <div class="ham-stripe"></div>
            </div>
        </header>
        <header class="header header--dark">
        </header>
