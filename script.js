function showSignUpForm() {
  document.getElementById("login-form").style.display = "none";
  document.getElementById("sign-up-form").style.display = "block";
}

function showLoginForm() {
  document.getElementById("login-form").style.display = "block";
  document.getElementById("sign-up-form").style.display = "none";
}

function validateEmail(email) {
  let messageBox = document.getElementById("email-error");
  const regex =
    /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
  if (regex.test(email)) {
    messageBox.innerHTML = "";
  } else {
    messageBox.innerHTML = "*Please enter a valid email address";
  }
}

function validatePasswords() {
  let password = document.getElementById("password").value;
  let confirmPass = document.getElementById("confirm-password").value;
  let passwordMessageBox = document.getElementById("password-error");
  let confirmPasswordMessageBox = document.getElementById("confirm-password-error");

  if (password.length < 8) {
    passwordMessageBox.innerHTML = "*Password must be at least 8 characters long";
  } else if (!/[A-Za-z]/.test(password) || !/\d/.test(password)) {
    passwordMessageBox.innerHTML = "*Password must contain at least 1 letter and 1 number";
  } else {
    passwordMessageBox.innerHTML = "";
  }

  if (password !== confirmPass) {
    confirmPasswordMessageBox.innerHTML = "*Password does not match";
  } else {
    confirmPasswordMessageBox.innerHTML = "";
  }
}

function validateSignUpForm() {
  let emailError = document.getElementById("email-error").innerHTML;
  let passwordError = document.getElementById("password-error").innerHTML;
  let confirmPassError = document.getElementById("confirm-password-error").innerHTML;

  if (emailError === "" && passwordError === "" && confirmPassError === "") {
    return true;
  }
  return false;
}
