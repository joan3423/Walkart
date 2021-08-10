$(window).resize(function () {
    if ($(window).width() < 1000) {
        $('.this-location').addClass('responsivemySlides2');
    } else {
        $('.this-location').removeClass('responsivemySlides2');
    }
});
$(window).resize(function () {
    if ($(window).width() < 1000) {
        $('.start-textmodal').addClass('start-textmodalponsive');
        $('.start-textmodal').removeClass('start-textmodal');
    } else {
        $('.start-textmodalponsive').addClass('start-textmodal');
        $('.start-textmodalponsive').removeClass('start-textmodalponsive');
    }
});
$(window).resize(function () {
    if ($(window).width() < 1000) {
        $('.start-subtext').addClass('start-subtextponsive');
        $('.start-subtext').removeClass('start-subtext');
    } else {
        $('.start-subtextponsive').addClass('start-subtext');
        $('.start-subtextponsive').removeClass('start-subtextponsive');
    }
});
$(window).resize(function () {
    if ($(window).width() < 1000) {
        $('.start-subsubtext').addClass('start-subsubtextponsive');
        $('.start-subsubtext').removeClass('start-subsubtext');
    } else {
        $('.start-subsubtextponsive').addClass('start-subsubtext');
        $('.start-subsubtextponsive').removeClass('start-subsubtextponsive');
    }
});
if (window.matchMedia("(max-width: 1000px)").matches) {
    $('.this-location').addClass('responsivemySlides2');
  } else {
    $('.this-location').removeClass('responsivemySlides2');
  }
  if (window.matchMedia("(max-width: 1000px)").matches) {
    $('.start-textmodal').addClass('start-textmodalponsive');
    $('.start-textmodal').removeClass('start-textmodal');
  } else {
    $('.start-textmodalponsive').addClass('start-textmodal');
        $('.start-textmodalponsive').removeClass('start-textmodalponsive');
  }
  if (window.matchMedia("(max-width: 1000px)").matches) {
    $('.start-subtext').addClass('start-subtextponsive');
        $('.start-subtext').removeClass('start-subtext');
  } else {
    $('.start-subtextponsive').addClass('start-subtext');
        $('.start-subtextponsive').removeClass('start-subtextponsive');
  }
  if (window.matchMedia("(max-width: 1000px)").matches) {
    $('.start-subsubtext').addClass('start-subsubtextponsive');
        $('.start-subsubtext').removeClass('start-subsubtext');
  } else {
    $('.start-subsubtextponsive').addClass('start-subsubtext');
        $('.start-subsubtextponsive').removeClass('start-subsubtextponsive');
  }

  $(window).resize(function () {
    if ($(window).width() > 900) {
        document.getElementById("filter-part2").style.display = "block";
        document.getElementById("buttons-close2").style.display = "none";
    } else {
        document.getElementById("filter-part2").style.display = "none";
        document.getElementById("buttons-close2").style.display = "grid";
    }
});

  /* Accoirdion */

  var acc = document.getElementsByClassName("accordion");
  var i;
  
  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    });
  }




