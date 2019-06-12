

var swiper = new Swiper('.swiper-container', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  loop: true,
  autoplay: {
  	delay: 9000,
  	disableOnInteraction: true
  },
  loop: true,
  pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
    },
});

