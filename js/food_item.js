$(document).ready(function() {
  
  var $fslider = $(".fslider"),
      $fslideBGs = $(".fslide__bg"),
      diff = 0,
      curFslide = 0,
      numOfFslides = $(".fslide").length-1,
      animating = false,
      animTime = 500,
      autoFslideTimeout,
      autoFslideDelay = 6000,
      $pagination = $(".fslider-pagi");
  
  function createBullets() {
    for (var i = 0; i < numOfFslides+1; i++) {
      var $li = $("<li class='fslider-pagi__elem'></li>");
      $li.addClass("fslider-pagi__elem-"+i).data("page", i);
      if (!i) $li.addClass("factive");
      $pagination.append($li);
    }
  };
  
  createBullets();
  
  function manageControls() {
    $(".fslider-control").removeClass("infactive");
    if (!curFslide) $(".fslider-control.left").addClass("infactive");
    if (curFslide === numOfFslides) $(".fslider-control.right").addClass("infactive");
  };
  
  function autoFslide() {
    autoFslideTimeout = setTimeout(function() {
      curFslide++;
      if (curFslide > numOfFslides) curFslide = 0;
      changeFslides();
    }, autoFslideDelay);
  };
  
  autoFslide();
  
  function changeFslides(instant) {
    if (!instant) {
      animating = true;
      manageControls();
      $fslider.addClass("animating");
      $fslider.css("top");
      $(".fslide").removeClass("factive");
      $(".fslide-"+curFslide).addClass("factive");
      setTimeout(function() {
        $fslider.removeClass("animating");
        animating = false;
      }, animTime);
    }
    window.clearTimeout(autoFslideTimeout);
    $(".fslider-pagi__elem").removeClass("factive");
    $(".fslider-pagi__elem-"+curFslide).addClass("factive");
    $fslider.css("transform", "translate3d("+ -curFslide*100 +"%,0,0)");
    $fslideBGs.css("transform", "translate3d("+ curFslide*50 +"%,0,0)");
    diff = 0;
    autoFslide();
  }

  function navigateLeft() {
    if (animating) return;
    if (curFslide > 0) curFslide--;
    changeFslides();
  }

  function navigateRight() {
    if (animating) return;
    if (curFslide < numOfFslides) curFslide++;
    changeFslides();
  }

  $(document).on("mousedown touchstart", ".fslider", function(e) {
    if (animating) return;
    window.clearTimeout(autoFslideTimeout);
    var startX = e.pageX || e.originalEvent.touches[0].pageX,
        winW = $(window).width();
    diff = 0;
    
    $(document).on("mousemove touchmove", function(e) {
      var x = e.pageX || e.originalEvent.touches[0].pageX;
      diff = (startX - x) / winW * 70;
      if ((!curFslide && diff < 0) || (curFslide === numOfFslides && diff > 0)) diff /= 2;
      $fslider.css("transform", "translate3d("+ (-curFslide*100 - diff) +"%,0,0)");
      $fslideBGs.css("transform", "translate3d("+ (curFslide*50 + diff/2) +"%,0,0)");
    });
  });
  
  $(document).on("mouseup touchend", function(e) {
    $(document).off("mousemove touchmove");
    if (animating) return;
    if (!diff) {
      changeFslides(true);
      return;
    }
    if (diff > -16 && diff < 16) {
      changeFslides();
      return;
    }
    if (diff <= -16) {
      navigateLeft();
    }
    if (diff >= 16) {
      navigateRight();
    }
  });
  
  $(document).on("click", ".fslider-control", function() {
    if ($(this).hasClass("left")) {
      navigateLeft();
    } else {
      navigateRight();
    }
  });
  
  $(document).on("click", ".fslider-pagi__elem", function() {
    curFslide = $(this).data("page");
    changeFslides();
  });
  
});



//item
var cards = document.querySelectorAll('.card');

function transition() {
  if (this.classList.contains('active')) {
    this.classList.remove('active');
  } else {
    this.classList.add('active');
  }
}

cards.forEach(function (card) {
  return card.addEventListener('click', transition);
});
//end item


//레스토랑 text
var fwords = document.getElementsByClassName('fword');
var fwordArray = [];
var currentFword = 0;

fwords[currentFword].style.opacity = 1;
for (var i = 0; i < fwords.length; i++) {
  splitLetters(fwords[i]);
}

function changeFword() {
  var cw = fwordArray[currentFword];
  var nw = currentFword == fwords.length - 1 ? fwordArray[0] : fwordArray[currentFword + 1];
  for (var i = 0; i < cw.length; i++) {
    animateLetterOut(cw, i);
  }

  for (var i = 0; i < nw.length; i++) {
    nw[i].className = 'letter behind';
    nw[0].parentElement.style.opacity = 1;
    animateLetterIn(nw, i);
  }

  currentFword = (currentFword == fwordArray.length - 1) ? 0 : currentFword + 1;
}

function animateLetterOut(cw, i) {
  setTimeout(function () {
    cw[i].className = 'letter out';
  }, 340+(i * 80));
}

function animateLetterIn(nw, i) {
  setTimeout(function () {
    nw[i].className = 'letter in';
  }, i * 30);
}

function splitLetters(fword) {
  var content = fword.innerHTML;
  fword.innerHTML = '';
  var letters = [];
  for (var i = 0; i < content.length; i++) {
    var letter = document.createElement('span');
    letter.className = 'letter';
    letter.innerHTML = content.charAt(i);
    fword.appendChild(letter);
    letters.push(letter);
  }

  fwordArray.push(letters);
}

changeFword();
setInterval(changeFword, 1500);
////////////////////////////////////



