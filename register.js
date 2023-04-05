const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

function clearErrors() {
  let errors = document.getElementsByClassName("text-danger");
  for (let item of errors) {
    item.innerHTML = "";
  }
}

function seterror(id) {
  //sets error inside tag of id
  element = document.getElementById(id);
    element.getElementsByClassName("text-danger")[0].classList.toggle("fa-exclamation-circle");
}

function validateLoginForm() {
  clearErrors();

  //RegEx
  const regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;

  //perform validation and if validation fails, set the value of returnval to false
  let email = document.forms["loginForm"]["lemail"].value;
  if (email == "" || !regEmail.test(email)) {
    seterror("lemail");
    return false;
  }

  return true;
}

function validateRegistrationForm() {
  clearErrors();

  //RegEx
  const regEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;
  const regPhone = /^\d{10}$/;
  const regName = /\d+$/g;

  //perform validation and if validation fails, set the value of returnval to false
  let name = document.forms["registerForm"]["rname"].value;
  if (name == "" || regName.test(name)) {
      seterror("rname");
      alert("Name must only contain Letters and Spaces.");
    return false;
  }

  let email = document.forms["registerForm"]["remail"].value;
  if (email == "" || !regEmail.test(email)) {
      seterror("remail");
      alert("Please check email.");
    return false;
  }

  let phone = document.forms["registerForm"]["rphone"].value;
  if (phone == "" || !regPhone.test(phone)) {
      seterror("rphone");
      alert("Phone number must have only 10 digits.");
    return false;
  }

  let password = document.forms["registerForm"]["rpass"].value;
  if (password.length < 6) {
      seterror("rpass");
      alert("Password must be longer than 6 characters.");
    return false;
  }

  let cpassword = document.forms["registerForm"]["rcpass"].value;
  if (cpassword != password) {
      seterror("rcpass");
      alert("Password and Confirm Password does not match.");
    return false;
  }

  return true;
}
