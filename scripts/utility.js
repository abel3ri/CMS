const menuBtn = document.querySelector(".menu");
const overlay = document.querySelector(".overlay");
const closeBtn = document.querySelector(".close");
menuBtn.addEventListener("click", () => {
  overlay.classList.add("show");
  closeBtn.classList.add("show");
});
closeBtn.addEventListener("click", () => {
  overlay.classList.remove("show");
  closeBtn.classList.remove("show");
});
