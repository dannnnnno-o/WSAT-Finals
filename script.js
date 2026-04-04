const swiper = new Swiper('.wrapper', {
  loop: true,
  spaceBetween: 30,

    autoplay: {
        delay: 5000,
        disableOnInteract: false,
        pauseOnMOuseEnter: true,
    },

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    dynamicBullets: true,
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        576: {
            slidesPerView: 2,
        },
        850: {
            slidesPerView: 3,
        },
        1200: {
            slidesPerView: 4,
        }
    }
});