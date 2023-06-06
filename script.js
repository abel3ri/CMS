const slides = document.querySelectorAll(".slide");
const btnLeft = document.querySelector(".btn-left");
const btnRight = document.querySelector(".btn-right");

slides.forEach((slide, i) => {
  slide.style.transform = `translateX(${i * 100}%)`;
});

let currentSlide = 0;
const slideSize = slides.length;

btnRight.addEventListener("click", () => {
  if (currentSlide == slideSize - 1) currentSlide = 0;
  else currentSlide++;
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
