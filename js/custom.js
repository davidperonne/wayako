jQuery.noConflict();

jQuery(document).ready(function() {


    AOS.init({
        duration: 1200,
        once: true,
    });



    jQuery('#menuModal').on('show.bs.modal', function(e) {
        jQuery('body').addClass('menu-modal-open');
    });


    jQuery('#menuModal').on('hide.bs.modal', function(e) {
        jQuery('body').removeClass('menu-modal-open');
    });



});

/* END */