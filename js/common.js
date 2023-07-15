const Header = document.querySelector("#Header");
const animatedElements = document.querySelectorAll(
  ".concept, .concept_img, .menu, .menu__hair__item, .style, .tokio, .tokio__contents, .staff, .staff__img, .staff__member, .access, .menu__hair__price"
);

document.addEventListener("DOMContentLoaded", function () {
  Header.classList.add("loaded");

  const observerCallback = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
        observer.unobserve(entry.target);
      }
    });
  };

  const observerOptions1 = {
    threshold: 0.1,
  };

  const observer1 = new IntersectionObserver(
    observerCallback,
    observerOptions1
  );

  animatedElements.forEach((element) => {
    observer1.observe(element);
  });

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

  const pageLinks = document.querySelectorAll(".page-link");
  pageLinks.forEach((link) => {
    link.addEventListener("click", (event) => {
      event.preventDefault();
      const targetId = event.currentTarget.getAttribute("href");
      const targetElement = document.querySelector(targetId);
      const headerOffset = 220;
      const targetPosition =
        targetElement.getBoundingClientRect().top +
        window.pageYOffset -
        headerOffset;
      window.scrollTo({
        top: targetPosition,
        behavior: "smooth",
      });
    });
  });
  pageLinks.forEach((link) => {
    link.addEventListener("click", () => {
      spMenu.classList.remove("open");
      hamburger.classList.remove("active");
      webBtn.classList.remove("active");
      snsBox.classList.remove("active");
    });
  });

  const hamburger = document.getElementById("hamburger");
  const spMenu = document.getElementById("spNav");
  const webBtn = document.querySelector(".sp__header__web__btn");
  const snsBox = document.querySelector(".sp__header__sns");
  function toggleMenu() {
    hamburger.classList.toggle("active");
    webBtn.classList.toggle("active");
    snsBox.classList.toggle("active");
    spMenu.classList.toggle("open");
  }
  hamburger.addEventListener("click", toggleMenu);

  document.getElementById("pageBtn").addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
});

window.addEventListener("scroll", function () {
  const header = document.getElementById("Header");
  if (window.scrollY > 0) {
    header.classList.add("fixed");
  } else {
    header.classList.remove("fixed");
  }
});
