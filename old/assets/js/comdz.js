jQuery(function($) {

    // Scrool magic animations
    var controller = new ScrollMagic.Controller();

    // Fade-up scene
    var revealElements = document.getElementsByClassName('fade-up');
    for (var i = 0; i < revealElements.length; i++) { // create a scene for each element
        new ScrollMagic.Scene({
                triggerElement: revealElements[i], // y value not modified, so we can use element as trigger as well
                offset: 50, // start a little later
                triggerHook: 0.9,
            })
            .setClassToggle(revealElements[i], 'visible') // add class toggle
            // .addIndicators({ name: 'fade-up ' + (i + 1) }) // add indicators (requires plugin)
            .addTo(controller);
    }

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

    // TEST horizontal title scene
    /*   var parallaxScrollBandeauParallaxTL = new TimelineMax();
       parallaxScrollBandeauParallaxTL
           .from(".termes .element-1", { x: "-15%", ease: Linear.easeNone });
       var parallaxScrollBandeauParallaxScene = new ScrollMagic.Scene({
               triggerElement: ".termes",
               triggerHook: "onEnter",
               duration: "200%"
           })
           .setTween(parallaxScrollBandeauParallaxTL)
           .addTo(controller);*/


    // TEST vertical title scene
    /*    var defisTL = new TimelineMax();
        defisTL
            .from(".defis img", { y: "50%", ease: Linear.easeNone });
        var defisScene = new ScrollMagic.Scene({
                triggerElement: ".defis",
                triggerHook: "onEnter",
                duration: "200%"
            })
            .setTween(defisTL)
            .addTo(controller);*/



    // Collapse/Expand main menu on click.
    $(window).on('click', function() {
        $('#wrapper-navbar').removeClass('sidebar-expanded');
        $('body').removeClass('menu-is-open');
    });

    $('#wrapper-navbar .menu-title').on('click', function() {
        event.stopPropagation();
        $('#wrapper-navbar').addClass('sidebar-expanded');
        $('body').addClass('menu-is-open');
    });

    // test on scroll
    /*  $(window).on('scroll', function() {
          $('.blog #wrapper-navbar').removeClass('sidebar-expanded');
          $('body.blog').removeClass('menu-is-open');
      });*/



    // Mobile menu modal is open
    jQuery('#menuModal').on('show.bs.modal', function(e) {
        jQuery('body').addClass('mobile-menu-is-open');
    });
    jQuery('#menuModal').on('hide.bs.modal', function(e) {
        jQuery('body').removeClass('mobile-menu-is-open');
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


    // Customers ajax modal.
    $('body').on('click', '.view-customers', function() {
        var data = {
            'action': 'load_customers_logo_by_ajax',
            'security': blog.security
        };

        $.post(blog.ajaxurl, data, function(response) {
            response = JSON.parse(response);
            //$('#customersModal h5#customersModalLabel').text(response.title);
            $('#customersModal .modal-body').html(response.content);

            var customersModal = new bootstrap.Modal(document.getElementById('customersModal'));
            customersModal.show();
        });
    });


    // Team member ajax modal.
    $('body').on('click', '.view-team-member', function() {
        var data = {
            'action': 'load_team_member_post_by_ajax',
            'id': $(this).data('id'),
            'security': blog.security
        };

        $.post(blog.ajaxurl, data, function(response) {
            response = JSON.parse(response);
            $('#teamMemberPostModal .modal-body').html(response.content);

            var postModal = new bootstrap.Modal(document.getElementById('teamMemberPostModal'));
            postModal.show();
        });
    });


});