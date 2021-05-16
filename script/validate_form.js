// A function to select an element
function qs(element) {
    return document.querySelector(element);
}

// A function to turn the color of invalid input to red
function showError(element) {
    element.classList.remove("success");
    element.classList.add("error");
}

// A function to turn the color of valid input to green
function showSuccess(element) {
    element.classList.remove("error");
    element.classList.add("success");
}

// A function to validate email
function validateEmail() {
    let email = qs("#email").value;
    var invalidEmail = document.getElementsByClassName('invalid email')[0];

    // The regex to check the valid form of email
    let checkEmail = /^(?=[^\.])[a-zA-Z0-9.]{2,}[a-zA-Z0-9]+[@](?=[^\.])[a-zA-Z0-9.]+[.][a-zA-Z]{2,5}$/;

    // Check if email has double dots 
    if (email.includes("..")) {
        invalidEmail.style.display = 'block';
        invalidEmail.innerHTML = "No double dots in email"; // Show the message for users to fix the invalid input
        showError(qs("#email")); // Turn the invalid input to red
        return false;
    } else {
        invalidEmail.style.display = 'none';
    };

    // Use the regex above to check the valid form of the email
    if (checkEmail.test(email)) {
        invalidEmail.style.display = 'none';
        showSuccess(qs("#email")); // Turn the valid input to green
        return true;
    } else {
        invalidEmail.style.display = 'block';
        invalidEmail.innerHTML = "Invalid email format";
        showError(qs("#email")); // Turn the invalid input to red
        return false;
    }
}

// A function to validate phone number
function validatePhone() {
    let phone = qs("#phone").value;
    var invalidPhone = document.getElementsByClassName('invalid phone')[0];

    // The regex to check the valid form of phone number 
    let checkPhone = /^(?=[^\.])(?=[^\-])(?=[^\s])[0-9 .-]*[\d]$/;

    // Check if phone number has double dots, spaces or dashes
    let symbols = " .-";
    let symbolsDouble = false; // A variable to check if phone input has double dots, spaces or dashes
    for (let i = 0; i <= phone.length - 2; i++) {
        if(symbols.indexOf(phone[i]) !== -1 && symbols.indexOf(phone[i + 1]) !== -1) {
            invalidPhone.style.display = 'block';
            invalidPhone.innerHTML = "No double dots, spaces or dashes in phone"; // Show the message for users to fix the invalid input
            showError(qs("#phone")); // Turn the invalid input to red
            symbolsDouble = true;
            return false;
        } 
    };

    if (!symbolsDouble) {
        invalidPhone.style.display = 'none';
    };

    // Count how many digits in phone number
    let numberOfDigits = 0;
    for (let i = 0; i < phone.length; i++) {
        if (Number.isInteger(parseInt(phone[i]))) {
            numberOfDigits++;
        }
    };

    // Check if the number of digits is from 9 to 11 characters
    if (numberOfDigits < 9 || numberOfDigits > 11) {
        invalidPhone.style.display = 'block';
        invalidPhone.innerHTML = "Phone number must have from 9 to 11 digits"; // Show the message for users to fix the invalid input
        showError(qs("#phone")); // Turn the invalid input to red
        return false;
    } else {
        invalidPhone.style.display = 'none';
    };

    // Use the regex above to test the valid form of phone number
    if (checkPhone.test(phone)) {
        invalidPhone.style.display = 'none';
        showSuccess(qs("#phone")); // Turn the valid input to green
        return true;
    } else {
        invalidPhone.style.display = 'block';
        invalidPhone.innerHTML = "Invalid phone";
        showError(qs("#phone")); // Turn the invalid input to red
        return false; 
    }
}

// A function to validate password
function validatePassword() {
    let password = qs("#password").value;
    var invalidPassword = document.getElementsByClassName('invalid password')[0];

    // The regex to check the valid form of password
    let checkPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[a-zA-Z\d!@#$%^&*]{8,20}$/;

    // Check if password has space in it
    if (password.includes(" ")) {
        invalidPassword.style.display = 'block';
        invalidPassword.innerHTML = "There must be no space in password"; // Show the message for users to fix the invalid input
        showError(qs("#password")); // Turn the invalid input to red
        return false;
    } else {
        invalidPassword.style.display = 'none';
    };

    // Use the regex above to check the valid form of password
    if (checkPassword.test(password)) {
        invalidPassword.style.display = 'none';
        showSuccess(qs("#password")); // Turn the valid input to green
        return true;
    } else {
        invalidPassword.style.display = 'block';
        invalidPassword.innerHTML = "The password must contains 8 to 20 characters, no space, with at least 1 lower case letter, at least 1 upper case letter, at least 1 digit, and at least 1 special character in the set !@#$%^&*";
        showError(qs("#password")); // Turn the invalid input to red
        return false;
    }
}

// A function to validate retype password
function validateRePassword() {
    let retypePassword = qs("#re-password").value;
    let password = qs("#password").value;
    var invalidRePassword = document.getElementsByClassName('invalid re-password')[0];

    // Check if the retype password is similar to the original password
    if (retypePassword === password) {
        invalidRePassword.style.display = 'none';
        showSuccess(qs("#re-password")); // Turn the valid input to green
        return true;
    } else {
        invalidRePassword.style.display = 'block';
        invalidRePassword.innerHTML = "You must retype the same password";
        showError(qs("#re-password")); // Turn the invalid input to red
        return false;
    }
}

// A function to vailidate personal information
function checkPersonalInfo(inputField, errorMessage) {
    // inputField: the name of the input field element
    // errorMessage: an error message to display to users when the input is invalid
    let input = qs("#" + inputField).value;
    let invalidInput = document.getElementsByClassName("invalid " + inputField)[0];

    // Check if the input field has more than 3 characters
    if (input.length >= 3) {
        invalidInput.style.display = 'none';
        showSuccess(qs("#" + inputField)); // Turn the valid input to green
        return true;
    } else {
        invalidInput.style.display = 'block';
        invalidInput.innerHTML = errorMessage; // Show the message for users to fix the invalid input
        showError(qs("#" + inputField)); // Turn the invalid input to red
        return false;
    }
}

// A function to validate first name
function validateFirstName() {
    return checkPersonalInfo("first-name", "First name must have at least 3 characters");
}

// A function to validate last name
function validateLastName() {
    return checkPersonalInfo("last-name", "Last name must have at least 3 characters");
}

// A function to validate address
function validateAddress() {
    return checkPersonalInfo("address", "Address must have at least 3 characters");
}

// A function to validate city name
function validateCity() {
    return checkPersonalInfo("city", "City name must have at least 3 characters");
}

// A function to validate zipcode
function validateZipcode() {
    let zipcode = qs("#zipcode").value;
    var invalidZipcode = document.getElementsByClassName('invalid zipcode')[0];

    // The regex to check the valid form of zipcode
    let checkZipcode = /^\d{4,6}$/;

    // Use the regex above to check the valid form of zipcode
    if (checkZipcode.test(zipcode)) {
        invalidZipcode.style.display = 'none';
        showSuccess(qs("#zipcode")); // Turn the valid input to green
        return true;
    } else {
        invalidZipcode.style.display = 'block';
        invalidZipcode.innerHTML = "Invalid zipcode";
        showError(qs("#zipcode")); // Turn the invalid input to red
        return false;
    }
}

// A function to validate all of the input fields when the form is submitted
function validateForm(event) {
    if(!validateEmail() || !validatePhone() || !validatePassword() || !validateRePassword() || !validateFirstName() || !validateLastName() || !validateAddress() || !validateCity() || !validateZipcode()) {
        event.preventDefault(); // If there is invalid input, prevent the form from being submitted by cancelling the event
    } else {
        return true; // Submit the form when all inputs are valid
    }
}

// Inform the users whether the inputs are valid or not while they are typing
qs("#email").addEventListener('input', validateEmail); 
qs("#phone").addEventListener('input', validatePhone); 
qs("#password").addEventListener('input', validatePassword); 
qs("#re-password").addEventListener('input', validateRePassword); 
qs("#first-name").addEventListener('input', validateFirstName); 
qs("#last-name").addEventListener('input', validateLastName); 
qs("#address").addEventListener('input', validateAddress); 
qs("#city").addEventListener('input', validateCity); 
qs("#zipcode").addEventListener('input', validateZipcode); 

// Invoke the validateForm() function when submit the form
qs("form").addEventListener("submit", validateForm);