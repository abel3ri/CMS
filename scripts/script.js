function slider() {
  const slides = document.querySelectorAll(".slide");
  const btnLeft = document.querySelector(".btn-left");
  const btnRight = document.querySelector(".btn-right");

  slides.forEach((slide, i) => {
    slide.style.transform = `translateX(${i * 100}%)`;
  });

  let currentSlide = 0;
  const slideSize = slides.length;

  btnRight.addEventListener("click", () => {
    if (currentSlide == slideSize - 1) {
      currentSlide = 0;
    } else currentSlide++;
    slides.forEach((slide, i) => {
      slide.style.transform = `translateX(${(i - currentSlide) * 100}%)`;
    });
  });

  btnLeft.addEventListener("click", () => {
    if (currentSlide == 0) currentSlide = slideSize - 1;
    else currentSlide--;
    slides.forEach((slide, i) => {
      slide.style.transform = `translateX(${(i - currentSlide) * 100}%)`;
    });
  });
}
slider();
// End of slider implementation

// Implement smooth revealing elements when scroll

function smoothReveal() {
  // Smooth reveal sections
  const sections = document.querySelectorAll("section");
  const sectionObserver = new IntersectionObserver(
    (entries) => {
      const [entry] = entries;
      if (!entry.isIntersecting) return;
      entry.target.classList.remove("section-hidden");
      sectionObserver.unobserve(entry.target);
    },
    {
      threshold: 0.2,
    }
  );

  sections.forEach((section) => {
    section.classList.add("section-hidden");
    sectionObserver.observe(section);
  });

  // Smooth reveal how section cards

  const howSection = document.querySelector(".how-it-works-section");
  const howItems = document.querySelectorAll(".how-item");

  const howSectionObeserver = new IntersectionObserver(
    (entries) => {
      const [entry] = entries;
      if (!entry.isIntersecting) return;
      howItems.forEach((howItem) => {
        howItem.classList.remove("hidden");
      });
      howSectionObeserver.unobserve(entry.target);
    },
    {
      threshold: 0.4,
      rootMargin: "-100px",
    }
  );

  howItems.forEach((howItem) => {
    howItem.classList.add("hidden");
    howSectionObeserver.observe(howSection);
  });
}
smoothReveal();

// Implement smooth scrolling on the learn more button

function learnMoreSmooth() {
  const learnMoreBtn = document.querySelector(".learn-more");
  const howSection = document.querySelector("#how-section");
  learnMoreBtn.addEventListener("click", (e) => {
    e.preventDefault();
    const howSectionCoords = howSection.getBoundingClientRect();
    window.scrollTo({
      left: window.scrollX + howSectionCoords.left,
      top: window.scrollY + howSectionCoords.top,
      behavior: "smooth",
    });
  });
}
learnMoreSmooth();

// Sroll to each section

function scrollToSection() {
  const navLinks = document.querySelector(".nav-links");
  navLinks.addEventListener("click", (e) => {
    e.preventDefault();
    if (e.target.classList.contains("nav-link")) {
      const sectionCoords = document
        .querySelector(`${e.target.getAttribute("href")}`)
        .getBoundingClientRect();

      window.scrollTo({
        top: window.scrollY + sectionCoords.top,
        left: window.scrollX + sectionCoords.left,
        behavior: "smooth",
      });
    }
  });
}
scrollToSection();

// Sticky nav implementation
function stickyNav() {
  const headerSection = document.querySelector(".header-section");
  const nav = document.querySelector(".nav");
  const headerObserver = new IntersectionObserver(
    (entries) => {
      const [entry] = entries;
      if (!entry.isIntersecting) {
        nav.classList.add("sticky");
      } else {
        nav.classList.remove("sticky");
      }
    },
    {
      rootMargin: "-80px",
    }
  );

  headerObserver.observe(headerSection);
}
stickyNav();

// Add year dynamically

const copyright = document.querySelector(".copyright");

copyright.insertAdjacentText(
  "beforeend",
  ` ${new Date().getUTCFullYear()}. All rights reserved.`
);
