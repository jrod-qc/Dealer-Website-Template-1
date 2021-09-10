// Mobile Nav Section
function mobileNav() {
    $(".nav-mobile-btn").click(() => {
        $(".mobile-nav-container").css("right", "0");
    })
    $(".mobile-nav-exit-btn").click(() => {
        $(".mobile-nav-container").css("right", "-250px");
    })
}

mobileNav();

// Nav Background Color Changes When Scroll
function navScrollColor() {
    var targetOffset = $(".hero-content").offset().top;
    var $w = $(window).scroll(function() {
        if ($w.scrollTop() > targetOffset) {
            $(".nav-container").css("background-color", "#fff");
            $(".nav-mobile-btn").css("color", "#373737");
            $(".nav-a").css("color", "#373737");
        } else {
            $(".nav-container").css("background-color", "rgba(255, 255, 255, 0.125)");
            $(".nav-mobile-btn").css("color", "#fff");
            $(".nav-a").css("color", "#fff");
        }
    });
}
navScrollColor();

// This function will open and close the Form modal
function formModal() {
    $(".form-modal-btn").click(() => {
        $(".form-modal-container").addClass("form-modal-container-animation");
        $(".form-modal-container").removeClass("form-modal-container-exit");
        $(".form-modal-content").removeClass("form-modal-content-exit");
    })
    $(".form-modal-exit-btn").click(() => {
        $(".form-modal-container").removeClass("form-modal-container-animation");
        $(".form-modal-container").addClass("form-modal-container-exit");
        $(".form-modal-content").addClass("form-modal-content-exit");
    })
}

formModal();