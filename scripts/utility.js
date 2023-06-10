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

if ((headingText = document.querySelector(".get-started-container h1"))) {
  window.addEventListener("load", (e) => {
    const loginBtn = document.querySelector(".login-btn");
    const signUpBtn = document.querySelector(".signup-btn");
    const goBackBtn = document.querySelector(".go-back");

    loginBtn.classList.add("show");
    signUpBtn.classList.add("show");
    headingText.classList.add("show");
    goBackBtn.classList.add("animate");
  });
}
if ((LoginContainer = document.querySelector(".form-container"))) {
  window.addEventListener("load", () => {
    LoginContainer.classList.add("visible");
  });
}
