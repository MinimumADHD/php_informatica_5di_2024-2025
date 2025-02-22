const password_field: HTMLInputElement = document.getElementById("password") as HTMLInputElement;
const email_field: HTMLInputElement = document.getElementById("mail") as HTMLInputElement;
const submit: HTMLInputElement = document.getElementById("submit_button") as HTMLInputElement;

const password_warning: HTMLParagraphElement = document.getElementById("password_warning") as HTMLParagraphElement;
const email_warning: HTMLParagraphElement = document.getElementById("email_warning") as HTMLParagraphElement;

function validateForm(): void {
    const isPasswordValid = password_check();
    const isEmailValid = mail_check();
    submit.disabled = !(isPasswordValid && isEmailValid);
}

function password_check(): boolean {
    const value = password_field.value;
    const count_check = value.length >= 8 && value.length <= 12;
    const number_check = /\d/.test(value);
    const special_check = /[!@#$%^&*(),.?":{}|<>]/.test(value);

    if (!count_check || !number_check || !special_check) {
        password_warning.className = "text-base text-gruvbox-text";
        return false;
    }
    password_warning.className = "text-base text-gruvbox-red";
    return true;
}

function mail_check(): boolean {
    const value = email_field.value;
    const isValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);

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