/* dropdown button */

  $('.dropdown-filter').click(function () {
    document.getElementById("filter-part2").style.display = "block";
    $('.buttons-close').addClass('buttons-close2');
    $('.close-button').addClass('close-button-active');
  })
  $('.close-button').click(function () {
  document.getElementById("filter-part2").style.display = "none";
  $('.close-button').removeClass('close-button-active');
  $('.buttons-close').removeClass('buttons-close2');
  })

/* carrousel */
$(document).ready(main);

var contador = 1;

function main() {
  $('.navbar-toggler').click(function () {
    // $('nav').toggle(); 

    if (contador == 1) {
      $('.navbar-collapse').animate({
        left: '0px'
      });
      contador = 0;
    } else {
      contador = 1;
      $('.navbar-collapse').animate({
        left: '0px'
      });
    }

  });

};


/* modal carrousel2 */

// Open the Modal
function openModal2() {
  document.getElementById("myModal2").style.display = "block";
  document.getElementById("navbarNav").style.display = "none";
}

// Close the Modal
function closeModal2() {
  document.getElementById("myModal2").style.display = "none";
  document.getElementById("navbarNav").style.display = "flex";
}
var slideIndex2 = 1;
showSlides2(slideIndex);

// Next/previous controls
function plusSlides2(f) {
  showSlides2(slideIndex += f);
}

// Thumbnail image controls
function currentSlide2(f) {
  showSlides2(slideIndex = f);
}
function showSlides2(f) {
  var i;
  var slides = document.getElementsByClassName("mySlides2");
  var slides2 = document.getElementsByClassName("responsivemySlides2");
  var dots = document.getElementsByClassName("demo2");
  var captionText = document.getElementById("caption");
  if (f > slides.length) { slideIndex = 1 }
  if (f < 1) { slideIndex = 10 }
  if (f > 10) { slideIndex = 1 }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "grid";
  slides[slideIndex - 1].style["justify-content"] = "center";
  slides2[slideIndex - 1].style.display = "grid";
  dots[slideIndex - 1].className = " active";
  captionText.innerHTML = dots[slideIndex - 1].alt;
  
}


/* efect 3d */

/* Store the element in el */
let el = document.getElementsByClassName('tilt')

/* Get the height and width of the element */
const height = el.clientHeight
const width = el.clientWidth

/*
  * Add a listener for mousemove event
  * Which will trigger function 'handleMove'
  * On mousemove
  */
el.addEventListener('mousemove', handleMove)

/* Define function a */
function handleMove(e) {
  /*
    * Get position of mouse cursor
    * With respect to the element
    * On mouseover
    */
  /* Store the x position */
  const xVal = e.layerX
  /* Store the y position */
  const yVal = e.layerY

  /*
    * Calculate rotation valuee along the Y-axis
    * Here the multiplier 20 is to
    * Control the rotation
    * You can change the value and see the results
    */
  const yRotation = 20 * ((xVal - width / 2) / width)

  /* Calculate the rotation along the X-axis */
  const xRotation = -20 * ((yVal - height / 2) / height)

  /* Generate string for CSS transform property */
  const string = 'perspective(500px) scale(1.1) rotateX(' + xRotation + 'deg) rotateY(' + yRotation + 'deg)'

  /* Apply the calculated transformation */
  el.style.transform = string
}

/* Add listener for mouseout event, remove the rotation */
el.addEventListener('mouseout', function () {
  el.style.transform = 'perspective(500px) scale(1) rotateX(0) rotateY(0)'
})

/* Add listener for mousedown event, to simulate click */
el.addEventListener('mousedown', function () {
  el.style.transform = 'perspective(500px) scale(0.9) rotateX(0) rotateY(0)'
})

/* Add listener for mouseup, simulate release of mouse click */
el.addEventListener('mouseup', function () {
  el.style.transform = 'perspective(500px) scale(1.1) rotateX(0) rotateY(0)'
})











