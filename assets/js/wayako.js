//document.addEventListener( 'click', twentytwentyoneCollapseMenuOnClickOutside );

/*
var navMenu = function(i) {
    var wrapper = document.body, // this is the element to which a CSS class is added when a mobile nav menu is open
        mobileButton = document.getElementById('primary-mobile-menu'),
        navMenuEl = document.getElementById('site-navigation');

    // If there's no nav menu, none of this is necessary.
    if (!navMenuEl) {
        return;
    }

    if (mobileButton) {
        mobileButton.onclick = function() {
            wrapper.classList.toggle('primary-navigation-open');
            wrapper.classList.toggle('lock-scrolling');
            //    twentytwentyoneToggleAriaExpanded(mobileButton);
            //   mobileButton.focus();
        };
    }
};

window.addEventListener('load', function() {
    new navMenu('primary');
});
*/






jQuery(function($) {



















    // Show on hover
    $('ul.main-menu li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(300);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(300);
    });

    $('ul.main-menu li.shop-dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(300);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(300);
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

});