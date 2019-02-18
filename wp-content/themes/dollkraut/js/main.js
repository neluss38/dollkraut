$(document).ready(function () {

    var $menuhome = $('.menu-home');
    var $mobilemenu = $('.hamburger-icon');
    var $header = $('.header-wrapper');
    var $stripe = $('.ham-stripe');
    var $menutitlebio = $('.submenu-title-bio');
    var $menutitlebooking = $('.submenu-title-booking');

    // menucontenttoggle();
    //     function menucontenttoggle() {
    //         $menuhome.click(function() {
    //             $menuhome.toggleClass('active');
    //             $('.home-image').toggleClass('active');
    //         });
    //     }

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

    $links = $('.header-wrapper .primary a');
    $pages = $('.page');

    $links.each(function(index) {
        
        $(this).click(function(e){

            // stop link from going anywhere
            e.preventDefault();

            // remove active class from all active menu items
            $('.header-wrapper .primary a').removeClass('is-active');

            // add active class to the clicked menu items
            $(this).addClass('is-active');


            // remove active class from all active pages
            $('.page').removeClass('is-active');
            
            // get index of this menu item
            $index = $(this).data('index');
            
            // loop over all pages, find the matching index, add active class
            $('.page').each(function() {
                if($(this).data('index') == $index) {
                    $(this).addClass('is-active');
                }
            });
        });
    })
});
