let navbar = document.querySelector(".navbar");

document.addEventListener("DOMContentLoaded", function () {
  const header = document.querySelector("header");
  const sections = document.querySelectorAll("section");

  const options = {
    root: null,
    threshold: 0.3,
  };

  const observerCallback = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        if (entry.target.id === "home") {
          header.classList.remove("scrolled");
        } else {
          header.classList.add("scrolled");
        }
      }
    });
  };
  const observer = new IntersectionObserver(observerCallback, options);

  sections.forEach((section) => {
    observer.observe(section);
  });
});

document.querySelector(".btnLogin").addEventListener("click", function () {
  window.location.href = "/";
});

// SWIPER JS

var swiper = new Swiper(".blogs-row", {
  loop: true,
  centeredSlides: false,
  autoplay: {
    delay: 7500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  spaceBetween: 10,
  breakpoints: {
    0: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 2,
    },
  },
});
