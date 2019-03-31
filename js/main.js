$(document).ready(function() {
    "use strict";


    var window_width = $(window).width(),
        window_height = window.innerHeight,
        header_height = $(".default-header").height(),
        header_height_static = $(".site-header.static").outerHeight(),
        fitscreen = window_height - header_height;

    $(".fullscreen").css("height", window_height)
    $(".fitscreen").css("height", fitscreen);


    // ------- Datepicker  js --------//  

      $( function() {
        $( ".date-picker" ).datepicker();
      } );


    //------- Niceselect  js --------//  

    if (document.getElementById("default-select")) {
        $('select').niceSelect();
    };
    if (document.getElementById("default-select2")) {
        $('select').niceSelect();
    };
    if (document.getElementById("service-select")) {
        $('select').niceSelect();
    };    

    //------- Lightbox  js --------//  

    $('.img-gal').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    $('.play-btn').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    //------- Superfish nav menu  js --------//  

    $('.nav-menu').superfish({
        animation: {
            opacity: 'show'
        },
        speed: 400
    });



    //------- Owl Carusel  js --------//  

    $('.active-hot-deal-carusel').owlCarousel({
        items:1,
        loop:true,
        autoplay:true,
        autoplayHoverPause: true,        
        smartSpeed:500,          
        margin:30,
        dots: true
    });

     $('.active-testimonial').owlCarousel({
            items: 2,
            loop: true,
            margin: 30,
            autoplayHoverPause: true,
            smartSpeed:500,              
            dots: true,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1,
                },
                992: {
                    items: 2,
                }
            }
        });


        $('.active-recent-blog-carusel').owlCarousel({
            items: 3,
            loop: true,
            margin: 30,
            dots: true,
            autoplayHoverPause: true, 
            smartSpeed:500,               
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                961: {
                    items: 3,
                }
            }
        }); 

    //------- Mobile Nav  js --------//  

    if ($('#nav-menu-container').length) {
        var $mobile_nav = $('#nav-menu-container').clone().prop({
            id: 'mobile-nav'
        });
        $mobile_nav.find('> ul').attr({
            'class': '',
            'id': ''
        });
        $('body .main-menu').append($mobile_nav);
        $('body .main-menu').prepend('<button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button>');
        $('body .main-menu').append('<div id="mobile-body-overly"></div>');
        $('#mobile-nav').find('.menu-has-children').prepend('<i class="lnr lnr-chevron-down"></i>');

        $(document).on('click', '.menu-has-children i', function(e) {
            $(this).next().toggleClass('menu-item-active');
            $(this).nextAll('ul').eq(0).slideToggle();
            $(this).toggleClass("lnr-chevron-up lnr-chevron-down");
        });

        $(document).on('click', '#mobile-nav-toggle', function(e) {
            $('body').toggleClass('mobile-nav-active');
            $('#mobile-nav-toggle i').toggleClass('lnr-cross lnr-menu');
            $('#mobile-body-overly').toggle();
        });

            $(document).on('click', function(e) {
            var container = $("#mobile-nav, #mobile-nav-toggle");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                if ($('body').hasClass('mobile-nav-active')) {
                    $('body').removeClass('mobile-nav-active');
                    $('#mobile-nav-toggle i').toggleClass('lnr-cross lnr-menu');
                    $('#mobile-body-overly').fadeOut();
                }
            }
        });
    } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
        $("#mobile-nav, #mobile-nav-toggle").hide();
    }

    //------- Smooth Scroll  js --------//  

    $('.nav-menu a, #mobile-nav a, .scrollto').on('click', function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            if (target.length) {
                var top_space = 0;

                if ($('#header').length) {
                    top_space = $('#header').outerHeight();

                    if (!$('#header').hasClass('header-fixed')) {
                        top_space = top_space;
                    }
                }

                $('html, body').animate({
                    scrollTop: target.offset().top - top_space
                }, 1500, 'easeInOutExpo');

                if ($(this).parents('.nav-menu').length) {
                    $('.nav-menu .menu-active').removeClass('menu-active');
                    $(this).closest('li').addClass('menu-active');
                }

                if ($('body').hasClass('mobile-nav-active')) {
                    $('body').removeClass('mobile-nav-active');
                    $('#mobile-nav-toggle i').toggleClass('lnr-times lnr-bars');
                    $('#mobile-body-overly').fadeOut();
                }
                return false;
            }
        }
    });

    $(document).ready(function() {

        $('html, body').hide();

        if (window.location.hash) {

            setTimeout(function() {

                $('html, body').scrollTop(0).show();

                $('html, body').animate({

                    scrollTop: $(window.location.hash).offset().top - 108

                }, 1000)

            }, 0);

        } else {

            $('html, body').show();

        }

    });


    jQuery(document).ready(function($) {
        // Get current path and find target link
        var path = window.location.pathname.split("/").pop();

        // Account for home page with empty path
        if (path == '') {
            path = 'index.html';
        }

        var target = $('nav a[href="' + path + '"]');
        // Add active class to target link
        target.addClass('menu-active');
    });

    $(document).ready(function() {
        if ($('.menu-has-children ul>li a').hasClass('menu-active')) {
            $('.menu-active').closest("ul").parentsUntil("a").addClass('parent-active');
        }
    });




    //------- Header Scroll Class  js --------//  

    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('#header').addClass('header-scrolled');
        } else {
            $('#header').removeClass('header-scrolled');
        }
    });


    $(document).ready(function() {
        $('#mc_embed_signup').find('form').ajaxChimp();
    });

});


/******************** Hotel Slider js *******************/
let activeIndex = 0;
let limit = 0;
let disabled = false;
let $stage;
let $controls;
let canvas = false;

const SPIN_FORWARD_CLASS = 'js-spin-fwd';
const SPIN_BACKWARD_CLASS = 'js-spin-bwd';
const DISABLE_TRANSITIONS_CLASS = 'js-transitions-disabled';
const SPIN_DUR = 1000;

const appendControls = () => {
  for (let i = 0; i < limit; i++) {
    $('.carousel__control').append(`<a href="#" data-index="${i}"></a>`);
  }
  let height = $('.carousel__control').children().last().outerHeight();

  $('.carousel__control').css('height', 30 + limit * height);
  $controls = $('.carousel__control').children();
  $controls.eq(activeIndex).addClass('active');
};

const setIndexes = () => {
  $('.spinner').children().each((i, el) => {
    $(el).attr('data-index', i);
    limit++;
  });
};

const duplicateSpinner = () => {
  const $el = $('.spinner').parent();
  const html = $('.spinner').parent().html();
  $el.append(html);
  $('.spinner').last().addClass('spinner--right');
  $('.spinner--right').removeClass('spinner--left');
};

const paintFaces = () => {
  $('.spinner__face').each((i, el) => {
    const $el = $(el);
    let color = $(el).attr('data-bg');
    $el.children().css('backgroundImage', `url(${getBase64PixelByColor(color)})`);
  });
};

const getBase64PixelByColor = hex => {
  if (!canvas) {
    canvas = document.createElement('canvas');
    canvas.height = 1;
    canvas.width = 1;
  }
  if (canvas.getContext) {
    const ctx = canvas.getContext('2d');
    ctx.fillStyle = hex;
    ctx.fillRect(0, 0, 1, 1);
    return canvas.toDataURL();
  }
  return false;
};

const prepareDom = () => {
  setIndexes();
  paintFaces();
  duplicateSpinner();
  appendControls();
};

const spin = (inc = 1) => {
  if (disabled) return;
  if (!inc) return;
  activeIndex += inc;
  disabled = true;

  if (activeIndex >= limit) {
    activeIndex = 0;
  }

  if (activeIndex < 0) {
    activeIndex = limit - 1;
  }

  const $activeEls = $('.spinner__face.js-active');
  const $nextEls = $(`.spinner__face[data-index=${activeIndex}]`);
  $nextEls.addClass('js-next');

  if (inc > 0) {
    $stage.addClass(SPIN_FORWARD_CLASS);
  } else {
    $stage.addClass(SPIN_BACKWARD_CLASS);
  }

  $controls.removeClass('active');
  $controls.eq(activeIndex).addClass('active');

  setTimeout(() => {
    spinCallback(inc);
  }, SPIN_DUR, inc);
};

const spinCallback = inc => {

  $('.js-active').removeClass('js-active');
  $('.js-next').removeClass('js-next').addClass('js-active');
  $stage.
  addClass(DISABLE_TRANSITIONS_CLASS).
  removeClass(SPIN_FORWARD_CLASS).
  removeClass(SPIN_BACKWARD_CLASS);

  $('.js-active').each((i, el) => {
    const $el = $(el);
    $el.prependTo($el.parent());
  });
  setTimeout(() => {
    $stage.removeClass(DISABLE_TRANSITIONS_CLASS);
    disabled = false;
  }, 100);

};

const attachListeners = () => {

  document.onkeyup = e => {
    switch (e.keyCode) {
      case 37:
        spin(-1);
        break;
      case 39:
        spin(1);
        break;
    }

  };

  $controls.on('click', e => {
    e.preventDefault();
    if (disabled) return;
    const $el = $(e.target);
    const toIndex = parseInt($el.attr('data-index'), 10);
    spin(toIndex - activeIndex);

  });
};

const assignEls = () => {
  $stage = $('.carousel__stage');
};

const init = () => {
  assignEls();
  prepareDom();
  attachListeners();
};


$(() => {
  init();
});

/*********************** text before slider **********************/
var words = document.getElementsByClassName('word');
var wordArray = [];
var currentWord = 0;

words[currentWord].style.opacity = 1;
for (var i = 0; i < words.length; i++) {
  splitLetters(words[i]);
}

function changeWord() {
  var cw = wordArray[currentWord];
  var nw = currentWord == words.length-1 ? wordArray[0] : wordArray[currentWord+1];
  for (var i = 0; i < cw.length; i++) {
    animateLetterOut(cw, i);
  }
  
  for (var i = 0; i < nw.length; i++) {
    nw[i].className = 'letter behind';
    nw[0].parentElement.style.opacity = 1;
    animateLetterIn(nw, i);
  }
  
  currentWord = (currentWord == wordArray.length-1) ? 0 : currentWord+1;
}

function animateLetterOut(cw, i) {
  setTimeout(function() {
		cw[i].className = 'letter out';
  }, i*80);
}

function animateLetterIn(nw, i) {
  setTimeout(function() {
		nw[i].className = 'letter in';
  }, 340+(i*80));
}

function splitLetters(word) {
  var content = word.innerHTML;
  word.innerHTML = '';
  var letters = [];
  for (var i = 0; i < content.length; i++) {
    var letter = document.createElement('span');
    letter.className = 'letter';
    letter.innerHTML = content.charAt(i);
    word.appendChild(letter);
    letters.push(letter);
  }
  
  wordArray.push(letters);
}

changeWord();
setInterval(changeWord, 4500);