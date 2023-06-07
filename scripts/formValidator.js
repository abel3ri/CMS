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
  if (val.validId) {
    validBorder(idInput);
    idInput.parentElement.firstElementChild.innerText = "";
  }
  if (val.validPass) {
    passInput.parentElement.firstElementChild.innerText = "";
    rePassInput.parentElement.firstElementChild.innerText = "";
    validBorder(passInput);
    validBorder(rePassInput);
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
    }
  });
}
// final function calling for validation
validateForm();
