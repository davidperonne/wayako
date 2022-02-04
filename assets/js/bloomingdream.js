jQuery(function($) {

    // Mobile menu modal is open

    jQuery('#menuModal').on('show.bs.modal', function(e) {
        jQuery('body').addClass('mobile-menu-is-open');
    });


    // Mobile menu modal is close

    jQuery('#menuModal').on('hide.bs.modal', function(e) {
        jQuery('body').removeClass('mobile-menu-is-open');
    });


    // Magic line on desktop menu (first level).

    var $el, leftPos, newWidth,
        $mainNav = $("#desktop_menu ul");

    $mainNav.append("<li id='magic-line'></li>");

    var $magicLine = $("#magic-line");

    var isCurrentPageItemExist = document.getElementsByClassName('current_page_item');
    //var isCurrentPageItemExist = document.querySelectorAll('.desktop-menu > .current_page_item');

    if (isCurrentPageItemExist.length > 0) {
        $magicLine
            .width($(".current_page_item").width())
            .css("left", $(".current_page_item").position().left)
            .data("origLeft", $magicLine.position().left)
            .data("origWidth", $magicLine.width());
    } else {
        // For others pages not in desktop menu.
        $magicLine
            .width(0)
            .css("left", $("#desktop_menu ul li:first-child").position().left)
            .data("origLeft", $("#desktop_menu ul li:first-child").position().left)
            .data("origWidth", 0);
    }

    // On hover menu item.
    $("#desktop_menu li a").hover(function() {
        $el = $(this);
        leftPos = $el.parent().position().left;
        newWidth = $el.parent().width();
        $magicLine.stop().animate({
            left: leftPos,
            width: newWidth
        });
    }, function() {
        $magicLine.stop().animate({
            left: $magicLine.data("origLeft"),
            width: $magicLine.data("origWidth")
        });
    });

    // On resize screen.
    window.addEventListener('resize', function() {

        var isCurrentPageItemExist = document.getElementsByClassName('current_page_item');
        if (isCurrentPageItemExist.length > 0) {
            $magicLine
                .width($(".current_page_item").width())
                .css("left", $(".current_page_item").position().left)
                .data("origLeft", $magicLine.position().left)
                .data("origWidth", $magicLine.width());
        } else {
            // For others pages not in desktop menu.
            $magicLine
                .width(0)
                .css("left", $("#desktop_menu ul li:first-child").position().left)
                .data("origLeft", $("#desktop_menu ul li:first-child").position().left)
                .data("origWidth", 0);
        }

        $magicLine.stop().animate({
            left: $magicLine.data("origLeft"),
            width: $magicLine.data("origWidth")
        });
    });


    // To top button

    var offset = 100,
        speed = 250,
        duration = 500,
        scrollButton = $('#topbutton');
    $(window).on('scroll', function() {
        if ($(this).scrollTop() < offset) {
            scrollButton.fadeOut(duration);
        } else {
            scrollButton.fadeIn(duration);
        }
    });
    scrollButton.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, speed);
    });


    // Partners flexslider

    $('.partners__flexslider').flexslider({
        animation: "slide",
        //   rtl: false,
        slideshow: false,
        slideshowSpeed: 4000,
        animationSpeed: 600,
        controlNav: false,
        directionNav: true,
        itemWidth: 175,
        itemMargin: 20,
        minItems: 1,
        maxItems: 5,
        move: 1,
    });


    // Testimonials flexslider

    $('.testimonials__flexslider').flexslider({
        animation: "slide",
        slideshow: true,
        slideshowSpeed: 4000,
        animationSpeed: 600,
        controlNav: true,
        directionNav: false,
        move: 1,
    });


    // Scrool magic animations

    var controller = new ScrollMagic.Controller();

    // Fade-up scene

    /*var revealElements = document.getElementsByClassName('fade-up');
    for (var i = 0; i < revealElements.length; i++) { // create a scene for each element
        new ScrollMagic.Scene({
                triggerElement: revealElements[i], // y value not modified, so we can use element as trigger as well
                offset: 50, // start a little later
                triggerHook: 0.9,
            })
            .setClassToggle(revealElements[i], 'visible') // add class toggle
            // .addIndicators({ name: 'fade-up ' + (i + 1) }) // add indicators (requires plugin)
            .addTo(controller);
    }*/

    // build scene

    var revealElements1 = document.getElementsByClassName('reveal1');

    for (var i = 0; i < revealElements1.length; i++) { // create a scene for each element
        new ScrollMagic.Scene({
                triggerElement: revealElements1[i],
                triggerHook: 0.9, // show, when scrolled 10% into view
                //  duration: "80%", // hide 10% before exiting view (80% + 10% from bottom)
                offset: 50 // move trigger to center of element
            })
            .setClassToggle(revealElements1[i], "visible") // add class to reveal
            //    .addIndicators() // add indicators (requires plugin)
            .addTo(controller);
    }

});