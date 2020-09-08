$(document).ready(function () {

    // Menu Icon
    $(".menu-icon").click(function () {
        $(".menu-icon").toggleClass("active");
    });

    // Skills Bar
    $(".skill-html").waypoint(function () {
        $(".progress-bar").addClass("animation")
    }, {
        offset: 500
    });

    // about area
    $(".img-about").waypoint(function () {
        $(".img-about").addClass("animate__animated animate__zoomIn")
    }, {
        offset: 500
    });
    $(".about-text").waypoint(function () {
        $(".about-text").addClass("animate__animated animate__slideInRight")
    }, {
        offset: 500
    });
});