$(document).ready(function () {

    if ($('.swiper-multiply').length) {
        $('.swiper-multiply').each(function () {
            var prev = $(this).parent().find('.multiply-prev');
            var next = $(this).parent().find('.multiply-next');
            var swiperProducts = new Swiper($(this), {
                slidesPerView: 1,
                //spaceBetween: 10,
                loop: true,
                navigation: {
                    nextEl: next,
                    prevEl: prev,
                    clickable: true,
                },
            });
        });
    }

    //выпадающее меню бутстрап
    if (jQuery(window).width() > '1200') {
        $('.hover-drop.dropdown > a').hover(
            function () {
                //show its submenu
                $(this).parent().children('.dropdown-menu').stop().fadeIn(300);
                $(this).addClass('show');
            }
        );
        $('.hover-drop.dropdown').hover(null,
            function (e) {
                //hide its submenu
                $(this).children('.dropdown-menu').stop().fadeOut(100);
                $(this).find('>a').removeClass('show');
            }
        );
    }

    $('.humb').click(function () {
        $('.mobile-menu, .humb, .menu-back').toggleClass('active');
    });
    $('.menu-back, .close-menu').click(function () {
        $('.menu-back, .mobile-menu, .humb').removeClass('active');
    });

    jQuery(".go-to-block").click(function (e) {
        e.preventDefault();
        var target = jQuery(this).data('target');

        jQuery('html, body').animate({
            scrollTop: jQuery(target).offset().top - 30
        }, 400);
    });


    //перенос коллапсов под кнопки
    if ($(window).width() < 768) {
        $('.collapse-content').each(function () {
            var block = $(this),
                collapse = block.find('.collapse');

            collapse.each(function () {
                var it = $(this),
                    id = it.attr('id'),
                    btn = block.find('.btn[data-bs-target="#' + id + '"]');

                btn.after($('#' + id));
            });
        });
    }

    $('.send').click(function () {
        var it = $(this);

        var form = $(this).closest('form');

        it.prop('disabled', true);
        it.addClass('disabled');

        if (form[0].checkValidity()) {
            console.log('success');

            form.removeClass('was-validated');
            form.submit();
        } else {
            form.addClass('was-validated');

            it.prop('disabled', false);
            it.removeClass('disabled');
        }
    });

});

$(window).on('load', function () {
    $(".twentytwenty-container").twentytwenty({
        default_offset_pct: 0.5, // How much of the before image is visible when the page loads
        orientation: 'horizontal', // Orientation of the before and after images ('horizontal' or 'vertical')
        before_label: 'До', // Set a custom before label
        after_label: 'После', // Set a custom after label
        no_overlay: true, //Do not show the overlay with before and after
        move_slider_on_hover: false, // Move slider on mouse hover?
        move_with_handle_only: true, // Allow a user to swipe anywhere on the image to control slider movement. 
        click_to_move: false // Allow a user to click (or tap) anywhere on the image to move the slider to that location.
    });
});

$('#effects').on('slid.bs.carousel', function (e) {

    var slide = $(this).find('.carousel-item');

    console.log(slide);

    slide.eq(e.to).find('.twentytwenty-container').twentytwenty({
        default_offset_pct: 0.5, // How much of the before image is visible when the page loads
        orientation: 'horizontal', // Orientation of the before and after images ('horizontal' or 'vertical')
        before_label: 'До', // Set a custom before label
        after_label: 'После', // Set a custom after label
        no_overlay: true, //Do not show the overlay with before and after
        move_slider_on_hover: false, // Move slider on mouse hover?
        move_with_handle_only: true, // Allow a user to swipe anywhere on the image to control slider movement. 
        click_to_move: false // Allow a user to click (or tap) anywhere on the image to move the slider to that location.
    });

});

function appendBlocks(block, windowMin, windowMax, appendTo) {
    var exists = $(appendTo).find(block)

    if (!exists.length) {
        if (windowMax == 0) {
            if ($(window).width() > windowMin) {
                $(block).appendTo($(appendTo));
            }
        } else {
            if ($(window).width() > windowMin && $(window).width() < windowMax) {
                $(block).appendTo($(appendTo));
            }
        }
    }
}

$(window).on('load', function () {

    setWidth('.cart-products-result', '.cp-price');
    setWidth('.data-blocks', '.inputblock p:not(.for-select)');
    setWidth('.product-inner-top', '.pi-row .tit');

    setHeight('#effects', '.s-inner');

    if ($(window).width() < 992) {

        $('.cart-row .col-auto').each(function (index) {
            setWidth('.cart-block', '.cc-' + index);
        });

        var mainWidth = 0;
        $('.cart-head .col-auto').each(function (index) {
            mainWidth += $('.cart-head .cc-' + (index + 1)).parent().outerWidth();

            $(this).parents('.cart-block').css({
                width: mainWidth
            });

            console.log(mainWidth);
        });
    }

    if ($('#products-slider').length && $(window).width() < 576) {
        $('#products-slider .prod-outer').addClass('carousel-item');
    }

});

function setWidth(parent, block) {

    $(parent).each(function () {

        var width = 0,
            blockk = $(this).find(block);

        blockk.each(function () {

            var blockWidth = $(this).outerWidth();

            if (width < blockWidth) {
                width = blockWidth;
            }

        });

        blockk.css({
            width: width
        });


    });
}

function setHeight(parent, block) {

    $(parent).each(function () {

        var height = 0,
            blockk = $(this).find(block);

        blockk.each(function () {

            var blockHeight = $(this).outerHeight();

            if (height < blockHeight) {
                height = blockHeight;
            }

        });

        blockk.css({
            height: height
        });


    });
}
