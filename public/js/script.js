$(window).scroll(function(){
	$('nav').toggleClass('scrolled',$(this).scrollTop()>260);
});

$('.carousel2').carousel({
  interval: 4000
})

$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop:true,
    autoWidth:true,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true
  });
});