function scrollToElement(elem, time) {
    // default time value
    time = time || 1000;

    $('html, body').animate({
        scrollTop: elem.offset().top
    }, time);
}


$(document).ready(function(){

    // menu-toggler
    $('#MenuToggler').on('click', function(){
        if (!$('#page').hasClass('menu-open')) {
            $('#page').addClass('menu-open');
        } else {
            $('#page').removeClass('menu-open');
        }
    });


    // tel input mask
    if ($('input[type="tel"]').length) {
        $('input[type="tel"]').mask('0-000-0000000');
    }


    // callback-popup
    {
        // open
        $('.OpenCallbackPopup').on('click', function(){
            $('#overlay').fadeIn();
            $('.block__callback-popup').fadeIn();
            $('#page').addClass('popup-open');
            $(".block__callback-popup .foc input").focus();

            return false;
        });

        // close
        $('.block__callback-popup .close').on('click', function(){
            $('#overlay').fadeOut();
            $('.block__callback-popup').fadeOut();
            $('#page').removeClass('popup-open');

            return false;
        });

        // close
        $('#overlay').on('click', function(){
            $('#overlay').fadeOut();
            $('.block__callback-popup').fadeOut();
            $('#page').removeClass('popup-open');

            return false;
        });

        // close
        $(document).keyup(function(e) {
            if (e.keyCode == 27 && $('#page').hasClass('popup-open')) {
                $('#overlay').fadeOut();
                $('.block__callback-popup').fadeOut();
                $('#page').removeClass('popup-open');
            }
        });


    }
    // callback-popup

    // menu second level show animation
    $('.block__menu').on('click', 'a', function(){
        if ($(this).next('ul').length) {
            var link = $(this);

            if (!link.hasClass('animated')) {
                link.addClass('animated');

                if (!link.hasClass('active')) {
                    link.addClass('active');
                    link.next('ul').slideDown(300, function(){
                        link.removeClass('animated');
                        $(this).addClass('active');
                    });
                } else {
                    link.removeClass('active');
                    link.next('ul').slideUp(150, function(){
                        link.removeClass('animated');
                        $(this).removeClass('active');
                    });
                }
            }

            return false;
        }
    });
    // menu second level show animation


    // index page scripts
    if ($('#page').hasClass('page__index')) {

        // fullpage init
        $('#fullpage').fullpage({
            bigSectionsDestination:'top',
            scrollOverflow:true,
            // responsiveWidth:997,
            // responsiveHeight:415,
            onLeave: function(index, nextIndex, direction){
                var leavingSection = $(this);

                if(index == 1 && direction =='down'){
                    $('.section__features').addClass('inview');
                }
            }
        });


        // reveal animations
        if ($('.section__company-information').length) {
            $('.section__company-information .subsection-two .button').on('inview', function(event, isInView) {
                if (isInView) {
                    $('.section__company-information .subsection-two .plane').addClass('inview');
                }
            });
        }
    }
    // index page scripts


    // contacts page scripts
    if ($('#page').hasClass('page__contacts')) {

        $('#contactsSelect').on('change', function(){
            $('#contactsList').find('.block__content').hide().removeClass('active');
            $('#contactsList').find('#city' + this.value).fadeIn(150);
        });

        // $(document).click(function(e){
        //     var child = e.target;
        //     var parent = document.getElementById('officeSelector');
        //     var result = parent.contains(child);
        //
        //     if (!result && e.target!=toggler) {
        //         list.slideUp(100);
        //         toggler.removeClass('active');
        //     }
        // });

        // list.find('span').on('click', function(){
        //     if (!$(this).parent('.item').hasClass('active')) {
        //         list.find('.item').removeClass('active');
        //         $(this).parent('.item').addClass('active');
        //
        //         toggler.find('span').html($(this).html());
        //
        //         tabs.find('.tab').hide();
        //         tabs.find('#contactsTab' + $(this).data('city')).fadeIn(time);
        //     }
        // });
    }
    // contacts page scripts

});
