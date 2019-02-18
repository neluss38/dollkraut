$(document).ready(function () {

    var $menuhome = $('.menu-home');
    var $mobilemenu = $('.hamburger-icon');
    var $header = $('.header-wrapper');
    var $stripe = $('.ham-stripe');
    var $menutitlebio = $('.submenu-title-bio');
    var $menutitlebooking = $('.submenu-title-booking');

    menucontenttoggle();
        function menucontenttoggle() {
            $menuhome.click(function() {
                $menuhome.toggleClass('active');
                $('.home-image').toggleClass('active');
            });
        }

    mobilemenutoggle();
        function mobilemenutoggle() {
            $mobilemenu.click(function() {
                $mobilemenu.toggleClass('active');
                $header.toggleClass('active');
                $stripe.toggleClass('active');
            });
        }

    submenutogglebio();
        function submenutogglebio() {
            $menutitlebio.click(function() {
                $('.submenu-item-bio').toggleClass('active');
            });
        }

    submenutogglebooking();
        function submenutogglebooking() {
            $menutitlebooking.click(function() {
                $('.submenu-item-booking').toggleClass('active');
            });
        }
});
