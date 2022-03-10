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