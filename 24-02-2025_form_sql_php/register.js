var password_field = document.getElementById("password");
var email_field = document.getElementById("mail");
var submit = document.getElementById("submit_button");
var password_warning = document.getElementById("password_warning");
var email_warning = document.getElementById("email_warning");
function validateForm() {
    var isPasswordValid = password_check();
    var isEmailValid = mail_check();
    submit.disabled = !(isPasswordValid && isEmailValid);
}
function password_check() {
    var value = password_field.value;
    var count_check = value.length >= 8 && value.length <= 12;
    var number_check = /\d/.test(value);
    var special_check = /[!@#$%^&*(),.?":{}|<>]/.test(value);
    if (!count_check || !number_check || !special_check) {
        password_warning.className = "text-base text-gruvbox-text";
        return false;
    }
    password_warning.className = "text-base text-gruvbox-red";
    return true;
}
function mail_check() {
    var value = email_field.value;
    var isValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
    if (!isValid) {
        email_warning.className = "text-base text-gruvbox-text";
        return false;
    }
    email_warning.className = "text-base text-gruvbox-red";
    return true;
}
if (password_field && email_field && submit && password_warning && email_warning) {
    password_field.addEventListener("input", validateForm);
    email_field.addEventListener("input", validateForm);
}
validateForm();
