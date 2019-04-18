window.addEventListener('scroll', function () {
    var el = document.querySelector('.show-on-scroll');
    var app_position = $('.intro').offset().top;
    var card_position = $('#app').offset().top;

    if (window.scrollY >= app_position) { 
        el.classList.add('shown'), el.classList.add('animated'), el.classList.add('lightSpeedIn');
    } else if (window.scrollY >= card_position) {
        el.classList.add('shown');
    }
});



//var text = $(".split");
//
//var split = new SplitText(text);
//
//function random(min, max) {
//    return (Math.random() * (max - min)) + min;
//}
//
//$(split.chars).each(function (i) {
//    TweenMax.from($(this), 2.5, {
//        opacity: 0,
//        x: random(-500, 500),
//        y: random(-500, 500),
//        z: random(-500, 500),
//        scale: .1,
//        delay: i * .02,
//        yoyo: true,
//        repeat: -1,
//        repeatDelay: 10
//    });
//});
