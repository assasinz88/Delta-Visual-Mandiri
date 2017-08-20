jQuery(function(){
    $(".header").css('left', -$('.menu').width() + 'px');
    $(".arrow").click(function () {
        console.log($('.menu').width());
        console.log($('.arrow').css('left'));
        if (!$('.header').hasClass("aaa")) {
            $(".header").css('left', -$('.menu').width() + 'px');
            $(".arrow i").css('transform', 'rotate(0deg)');
            $('.header').addClass("aaa");

        } else {
            $(".header").css('left', '0');
            $('.header').removeClass("aaa");
            $(".arrow i").css('transform', 'rotate(180deg)');
        }
    });
});