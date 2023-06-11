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
// class toggling for animating get started page
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
// Pop up message for dashboard page
if ((messagePopUp = document.querySelector(".messagePopUp"))) {
  if (
    messagePopUp.classList.contains("re_submission") ||
    messagePopUp.classList.contains("success") ||
    messagePopUp.classList.contains("failed")
  ) {
    // Add class show after 10 ms delay to fix animation error on pop up
    setTimeout(() => {
      messagePopUp.classList.add("show");
    }, 10);
  }
  const closeBtn = document.querySelector(".closeBtn");
  closeBtn.addEventListener("click", () => {
    closeBtn.classList.remove(".show");
    messagePopUp.classList.remove("show");
    // Replace the '?val' string from the url to disable constant displaying of popup messaging on reload
    window.history.pushState({}, null, window.location.href.split("?val")[0]);
  });
  setTimeout(() => {
    // Remove the pop up message after 3s automatically

    closeBtn.classList.remove(".show");
    messagePopUp.classList.remove("show");
    window.history.pushState({}, null, window.location.href.split("?val")[0]);
  }, 3000);
}
