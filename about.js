window.requestAnimationFrame = window.requestAnimationFrame ||
    window.mozRequestAnimationFrame ||
    window.webkitRequestAnimationFrame ||
    window.msRequestAnimationFrame ||
    function (f) {
        setTimeout(f, 1000 / 60)
    }
$(document).ready(function () {
    var index = 0;
    checkDisable();
    var length = $('.slides>.slide').length;

    function checkDisable() {
        if (index == 0) $('.up').addClass('disabled');
        else $('.up').removeClass('disabled');
        if (index == length - 1) $('.down').addClass('disabled');
        else $('.down').removeClass('disabled');
    }
    $('.down').click(function (e) {
        if (!$(this).hasClass('disabled')) {
            $('.slides').css('top', '-' + (++index * $('#vis-mis').height()) + 'px');
            $('.background').css('background-image', 'url(img/vismis' + index + '.jpeg)');
            checkDisable();
        }
    });
    $('.up').click(function (e) {
        if (!$(this).hasClass('disabled')) {
            $('.slides').css('top', '-' + (--index * 500) + 'px');
            $('.background').css('background-image', 'url(img/vismis' + index + '.jpeg)');
            checkDisable();
        }
    });

    function parallax() {
        var scrolltop = window.pageYOffset;
        $('.background').css("background-position", "50% " + -scrolltop * 0.25 + "px");
    }
    if ($(window).width() > 992) {
        parallax();
        window.addEventListener("scroll", function () {
            requestAnimationFrame(parallax);
        }, false);
    }
});