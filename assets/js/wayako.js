// Show the banner when a html element with class 'cmplz-show-banner' is clicked.
function addEvent(event, selector, callback, context) {
    document.addEventListener(event, e => {
        if (e.target.closest(selector)) {
            callback(e);
        }
    });
}
addEvent('click', '.cmplz-show-banner', function() {
    document.querySelectorAll('.cmplz-manage-consent').forEach(obj => {
        obj.click();
    });
});








// To top button
document.addEventListener("scroll", handleScroll);

// get a reference to our predefined button
var scrollToTopBtn = document.querySelector(".scrollToTopBtn");

function handleScroll() {
    var scrollableHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var GOLDEN_RATIO = 0.25;

    if ((document.documentElement.scrollTop / scrollableHeight) > GOLDEN_RATIO) {
        //show button
        if (!scrollToTopBtn.classList.contains("showScrollBtn"))
            scrollToTopBtn.classList.add("showScrollBtn")
    } else {
        //hide button
        if (scrollToTopBtn.classList.contains("showScrollBtn"))
            scrollToTopBtn.classList.remove("showScrollBtn")
    }
}

scrollToTopBtn.addEventListener("click", scrollToTop);

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}

/**/





/* ScrollTrigger */

gsap.registerPlugin(ScrollTrigger);



// Animations
function addScrollClass(element, index) {

    ScrollTrigger.create({
        trigger: element,
        start: "top 80%",
        toggleClass: "visible",
        once: true,
        //markers: true
    });
}


if (document.querySelector('.fade-right')) {

    const fadeRightTriggers = document.querySelectorAll(".fade-right");

    fadeRightTriggers.forEach(addScrollClass);
}

if (document.querySelector('.fade-left')) {

    const fadeLeftTriggers = document.querySelectorAll(".fade-left");

    fadeLeftTriggers.forEach(addScrollClass);
}

if (document.querySelector('.fade-up')) {

    const fadeUpTriggers = document.querySelectorAll(".fade-up");

    fadeUpTriggers.forEach(addScrollClass);
}

if (document.querySelector('.fade-down')) {

    const fadeDownTriggers = document.querySelectorAll(".fade-down");

    fadeDownTriggers.forEach(addScrollClass);
}


if (document.querySelector('.is-style-header')) {

    const fadeMediaTextTriggers = document.querySelectorAll(".is-style-header");

    fadeMediaTextTriggers.forEach(addScrollClass);
}





document.addEventListener("DOMContentLoaded", function(event) {


    /* GLightbox Image pure js */

    (function() {
        const glightboxImage = document.querySelector('.glightbox-image a');

        if (!glightboxImage) {
            return;
        }

        const lightboxImage = GLightbox({
            selector: '.glightbox-image a',
            touchNavigation: true
        });

    }());


});