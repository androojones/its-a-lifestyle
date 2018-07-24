//Navigation Menu
$(".ham-nav").click(function(){
    $('.nav-items').toggleClass('nav--open');
    $('.nav__line').toggleClass('ham--dark');
    $('#overlay').toggleClass('dark');
});

$('.nav__links > a').on('click', function(){
    $('.nav-items').toggleClass('nav--open');
    $('.nav__line').toggleClass('ham--dark');
    $('#overlay').toggleClass('dark');
});

//Sliding Boxes
// When page loads, add .grow class to first box
$(window).on("load", 
  function () {
    $(".box-slider__row div:nth-child(1)").addClass('grow');
});

//Add class to box on mouseover
$(".card_wrapper").mouseover(
  function(){
    //Remove class from all sibling elements
    $(this).addClass('grow').siblings().removeClass('grow');
});





//Show header on scroll up
$(function () {
  $(document).scroll(function () {
    var $nav = $("#header");
    $nav.toggleClass('headerScroll', $(this).scrollTop() > $nav.height());
  });
});

//Add colour to header on scroll up
var prev = 0;
var $window = $(window);
var nav = $('#header');

$window.on('scroll', function(){
  var scrollTop = $window.scrollTop();
  nav.toggleClass('hidden', scrollTop > prev);
  prev = scrollTop;
});


function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";

};

 //Auto-open first tab on window load
window.onload = function() {
  document.getElementById('defaultOpen').click();
};



//Accordion
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

// var slideIndex = 1;
// showSlides(slideIndex);

// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }

// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }

// function showSlides(n) {
//   var i;
//   var slides = document.querySelectorAll(".tmonial_slide,.benefit__slide,.blist__slide");
//   var dots = document.getElementsByClassName("dot");
//   if (n > slides.length) {slideIndex = 1}    
//   if (n < 1) {slideIndex = slides.length}
//   for (i = 0; i < slides.length; i++) {
//       slides[i].style.display = "none";  
//   }
//   for (i = 0; i < dots.length; i++) {
//       dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";  
//   dots[slideIndex-1].className += " active";
// }

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.querySelectorAll(".tmonial_slide,.benefit__slide,.blist__slide");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 8000); // Change image every 2 seconds
}



// OLD JS


//Show header on scroll up
// var prevScrollpos = window.pageYOffset;
// window.onscroll = function() {
//   var currentScrollPos = window.pageYOffset;
//   if (prevScrollpos > currentScrollPos) {
//     document.getElementById("header").style.top = "0";
//   } else {
//     document.getElementById("header").style.top = "-80px";
//   }
//   prevScrollpos = currentScrollPos;
// }

// $(document).on('scrollTop', function(){
//     if($("#overlay").hasClass('dark')){
//         $("#overlay").removeClass('dark');
//         $(".nav-items").removeClass('nav--open');
//     }else{
//         $(this).addClass('dark');
//         $(this).addClass('nav--open');
//     }
// });  
