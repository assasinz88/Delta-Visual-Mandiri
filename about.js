window.requestAnimationFrame = window.requestAnimationFrame ||
    window.mozRequestAnimationFrame ||
    window.webkitRequestAnimationFrame ||
    window.msRequestAnimationFrame ||
    function (f) {
        setTimeout(f, 1000 / 60)
    }
$(document).ready(function () {
    var options = {
        particleColor: '#555',
        background: '#fff',
        interactive: true,
        speed: 'medium',
        density: 9e3
    }
    var particleCanvas = new ParticleNetwork(document.getElementById('network'), options);
    $('#top').mousemove(function (e) {
        var centerX = $('#top').width() / 2;
        var centerY = $('#top').height() / 2;
        var offset = $('#top').offset();
        var posX = e.pageX - offset.left;
        var posY = e.pageY - offset.top;
        var strength = 100;
        // console.log('translate(' + (centerX - posX) + 'px, ' + (centerY - posY) + 'px)');
        $('#motto').css('transform', 'translate(' + -(centerX - posX) / strength + 'px, ' + -(
            centerY - posY) / strength + 'px)');
        $('#network canvas').css('transform', 'translate(' + (centerX - posX) / (strength / 2) + 'px, ' + (
            centerY - posY) / (strength / 2) + 'px)');
    });
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
            $('.slides').css('top', '-' + (++index * 500) + 'px');
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
    parallax();
    window.addEventListener("scroll", function () {
        requestAnimationFrame(parallax);
    }, false);

});