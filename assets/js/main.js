

var swiper = new Swiper(".ThreeSwiper", {
    slidesPerView: 4,
     centeredSlides: true,
    spaceBetween: 30,
    grabCursor: true,
    loop : true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  var swiper = new Swiper(".DengeSwiperTwo", {
    slidesPerView: 3,
    spaceBetween: 7,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  var swiper = new Swiper(".AboutSwiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  var swiper = new Swiper(".referans", {
    slidesPerView: 7,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  $( document ).ready(function() {
    $(".swiper-slide .MyImg .Headone1").click(function(){
        $(".one1").toggle("fast");
    });
    $(".Closebtn1").click(function(){
      $(".one1").toggle("fast");
    });
  });

  $( document ).ready(function() {
    $(".swiper-slide .MyImg .Headone2").click(function(){
        $(".one2").toggle("fast");
    });
    $(".Closebtn2").click(function(){
      $(".one2").toggle("fast");
    });
  });
  $( document ).ready(function() {
    $(".swiper-slide .MyImg .Headone3").click(function(){
        $(".one3").toggle("fast");
    });
    $(".Closebtn3").click(function(){
      $(".one3").toggle("fast");
    });
  });

  $( document ).ready(function() {
    $(".swiper-slide .MyImg .Headone4").click(function(){
        $(".one4").toggle("fast");
    });
    $(".Closebtn4").click(function(){
      $(".one4").toggle("fast");
    });
  });

  $( document ).ready(function() {
    $(".swiper-slide .MyImg .Headone5").click(function(){
        $(".one5").toggle("fast");
    });
    $(".Closebtn5").click(function(){
      $(".one5").toggle("fast");
    });
  });


