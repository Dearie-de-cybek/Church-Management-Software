'use strict';
document.querySelector('.menu-btn').addEventListener('click', () =>{
    document.querySelector('nav').classList.toggle("open")
})

document.querySelector('.close-btn').addEventListener('click', () =>{
    document.querySelector('nav').classList.toggle("open")
})



var mySwiper = new Swiper ('.swiper-container', {
    speed: 400,
    spaceBetween: 50,
    initialSlide: 0,
    //truewrapper adoptsheight of active slide
    autoHeight: true,
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    loopAdditionalSlides: 2,
    loopedSlides: 5,
    // delay between transitions in ms
    autoplayStopOnLast: false
    
  });



  mySwiper.prependSlide(mySwiper.slides[mySwiper.slides.length - 1].outerHTML);
  mySwiper.appendSlide(mySwiper.slides[1].outerHTML);

  setInterval(function() {
      mySwiper.slideNext();
    }, 2000);