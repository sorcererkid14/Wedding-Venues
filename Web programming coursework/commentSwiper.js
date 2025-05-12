// Comment box from Swiper.js
let commentSwiper = new Swiper(".commentSwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    breakpoints: {
        900: {
            slidesPerView: 2
        }
    },
    
    spaceBetween: 30,
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
});