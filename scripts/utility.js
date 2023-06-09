const overlay = document.querySelector(".overlay");
const closeBtn = document.querySelector(".close");
const menuBtn = document.querySelector(".menu");
if (menuBtn && closeBtn && overlay) {
  menuBtn.addEventListener("click", () => {
    overlay.classList.add("show");
    closeBtn.classList.add("show");
  });
  closeBtn.addEventListener("click", () => {
    overlay.classList.remove("show");
    closeBtn.classList.remove("show");
  });
}

window.addEventListener("load", (e) => {
  const getStartedContainer = document.querySelector(".get-started-container");
  const headingText = document.querySelector(".get-started-container h1");
  const loginBtn = document.querySelector(".login-btn");
  const signUpBtn = document.querySelector(".signup-btn");

  console.log(headingText);
  loginBtn.classList.add("show");
  signUpBtn.classList.add("show");
  headingText.classList.add("show");
});
