document.addEventListener("DOMContentLoaded", function() {
  const swiper = new Swiper(".swiper-container", {
    loop: true,
    effect: "fade",
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    speed: 3000,
  });

  const swiperBottom = new Swiper(".bottom-swiper", {
    loop: true,
    effect: "fade",
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    speed: 3000,
  });
});
