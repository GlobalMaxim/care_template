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

});

$(window).on('load resize', function () {
    //appendBlocks('.header .h-bottom .menu', 0, 1199, '.mobile-menu');
});

$(window).on('load', function () {
    //menuFixed('.header .h-bottom', 0);
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

function menuFixed(menu, offseting) {

    var height = $(menu).outerHeight(),
        offsetParametr = offseting,
        offsetTop = $(menu).offset().top + offsetParametr,

        wrapper = 'wrapper-' + $(menu).attr('class');

    $(menu).wrap('<div class="' + wrapper + '"></div>');
    $('.' + wrapper).css({
        minHeight: height
    });

    $(window).scroll(function () {
        if ($(window).scrollTop() >= offsetTop) {
            $(menu).addClass('active');
        } else {
            $(menu).removeClass('active');
        }
    });

}

$(window).on('load', function () {
    
    setWidth('.cart-products-result', '.cp-price');
    setWidth('.data-blocks', '.inputblock p:not(.for-select)');
    setWidth('.product-inner-top', '.pi-row .tit');
    
    if ($(window).width() < 992) {
        
        $('.cart-row .col-auto').each(function(index){
            setWidth('.cart-block', '.cc-'+index);
        });
        
        var mainWidth = 0;
        $('.cart-head .col-auto').each(function(index){
            mainWidth += $('.cart-head .cc-'+(index+1)).parent().outerWidth();
            
            $(this).parents('.cart-block').css({width: mainWidth});
            
            console.log(mainWidth);
        });
    }
});

function setWidth (parent, block) {

    $(parent).each(function(){
        
        var width = 0,
            blockk = $(this).find(block);
        
        blockk.each(function(){
            
            var blockWidth = $(this).outerWidth();
            
           if(width < blockWidth) {
                width = blockWidth;
            } 
            
        });
        
        blockk.css({width: width});
        
        
    });
}