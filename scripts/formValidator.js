// Selecting all inputs
const nameInput = document.querySelector(".form-input[name=name]");
const idInput = document.querySelector(".form-input[name=idNumber]");
const emailInput = document.querySelector(".form-input[name=email]");
const passInput = document.querySelector(".form-input[name=password]");
const rePassInput =
  document.querySelector(".form-input[name=rePassword]") || passInput;
const error = document.querySelector(".error");
const form = document.querySelector("form");

const errorBorder = function (element) {
  // function for making the input border red on error
  element.style.outline = "3px solid red";
};
const validBorder = function (element) {
  // function for making the input border red on error
  element.style.outline = "3px solid green";
};
const normalBorder = function (element) {
  element.style.outline = "none";
};
// function that checks inputs
function checkInputs() {
  // checking for id validation

  // create an object for each input to check whether the are valid or or not

  let val = { validId: true, validPass: true, validRePass: true };
  if (idInput.value == "" || idInput.value == null) {
    idInput.parentElement.firstElementChild.innerText =
      "Please provide an id number";
    errorBorder(idInput);
    // only update validId preoprty to make the other input fields border turn green
    val.validId = false;
  }
  // checking for password validation
  if (passInput.value == "" || passInput.value == null) {
    errorBorder(passInput);
    passInput.parentElement.firstElementChild.innerText =
      "Please provide a password";
    val.validPass = false;
  } else if (passInput.value.trim().length < 8) {
    errorBorder(passInput);
    passInput.parentElement.firstElementChild.innerText =
      "Password must be at least 8 characters long";
    val.validPass = false;
  } else if (passInput.value.trim() != rePassInput.value.trim()) {
    errorBorder(passInput);
    errorBorder(rePassInput);
    passInput.parentElement.firstElementChild.innerText =
      "Password do not match";
    rePassInput.parentElement.firstElementChild.innerText =
      "Password do not match";
    val.validPass = false;
    val.validRePass = false;
  }
  // make the inputs border green if they're valid.
  if (val.validId) {
    validBorder(idInput);
    idInput.parentElement.firstElementChild.innerText = "";
  }
  if (val.validPass) {
    passInput.parentElement.firstElementChild.innerText = "";
    rePassInput.parentElement.firstElementChild.innerText = "";
    validBorder(passInput);
    validBorder(rePassInput);
    validBorder(nameInput);
    validBorder(emailInput);
  }

  return val;
}
function validateForm() {
  // listening for submit event on the form
  form.addEventListener("submit", (e) => {
    const val = checkInputs();
    // Destructre val object
    const { validId, validPass, validRePass } = val;
    // check if each property of val is true
    if (!(validId && validPass && validRePass)) {
      e.preventDefault();
    } else {
      // reset inputs fields after the form is submitted
      // e.target.reset();
      normalBorder(nameInput);
      normalBorder(passInput);
      normalBorder(emailInput);
      normalBorder(idInput);
      normalBorder(rePassInput);
    }
  });
}
// final function calling for validation
validateForm();

// Check if the user id is already taken by somone else and display an erro  messag the will fade out automatically after 3 seconds

function hidePopUp() {
  const closeBtn = document.querySelector(".close");
  const errorPopUp = document.querySelector(".error-pop-up");
  if (errorPopUp.getAttribute("data-show")) {
    // console.log(errorTopUp.getAttribute("data-show"));
    errorPopUp.classList.add("show");
    closeBtn.classList.add("show");

    closeBtn.addEventListener("click", () => {
      errorPopUp.classList.remove("show");
      closeBtn.classList.remove("show");
    });

    setTimeout(() => {
      errorPopUp.classList.remove("show");
      closeBtn.classList.remove("show");
    }, 3000);
  }
}
hidePopUp();
