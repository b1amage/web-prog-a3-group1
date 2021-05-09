// a function to validate name
function validateName(){
    let name = document.getElementById("full_name").value.length;
    let name_alert = document.getElementById("name_alert");
    // Check if the name is longer than 3 charracters
    if (name >= 3 ){
        name_alert.classList.remove("a");
        name_alert.classList.add("b");
        name_alert.innerHTML = "Valid name";
        return true;
    } else {
        // if not return false and display error message
        name_alert.classList.remove("b");
        name_alert.classList.add("a");
        name_alert.innerHTML = "Invalid name";;
        return false;
    }
}





// A function to validate email
function validateEmail() {
    let email = document.getElementById("email").value;
    let email_alert = document.getElementById("email_alert");
    // The regex to check the valid form of email
    let checkEmail = /^(?=[^\.])[a-zA-Z0-9.]{2,}[a-zA-Z0-9]+[@](?=[^\.])[a-zA-Z0-9.]+[.][a-zA-Z]{2,5}$/;

    // Check if email has double dots 
    if (email.includes("..")) {
        email_alert.classList.add("a");
        email_alert.classList.remove("b");
        email_alert.innerHTML = "Invalid email";
        return false;
    } 

    // Use the regex above to check the valid form of the email
    if (checkEmail.test(email)) {
        email_alert.classList.add("b");
        email_alert.classList.remove("a");
        email_alert.innerHTML = "Valid email";
        return true;
    } else {
        email_alert.classList.add("a");
        email_alert.classList.remove("b");
        email_alert.innerHTML = "Invalid email";
        return false;
    }
}

// A function to validate phone number
function validatePhone() {
    let phone = document.getElementById("phone").value;
    let phone_alert = document.getElementById("phone_alert")
    // The regex to check the valid form of phone number 
    let checkPhone = /^(?=[^\.])(?=[^\-])(?=[^\s])[0-9 .-]*[\d]$/;

    // Check if phone number has double dots, spaces or dashes
    let symbols = " .-";
    for (let i = 0; i <= phone.length - 2; i++) {
        if(symbols.indexOf(phone[i]) !== -1 && symbols.indexOf(phone[i + 1]) !== -1) {
            phone_alert.classList.add("a");
            phone_alert.classList.remove("b");
            phone_alert.innerHTML = "Invalid phone number";
            return false;
        } 
    }

    // Count how many digits in phone number
    let numberOfDigits = 0;
    for (let i = 0; i < phone.length; i++) {
        if (Number.isInteger(parseInt(phone[i]))) {
            numberOfDigits++;
        }
    }

    // Check if the number of digits is from 9 to 11 characters
    if (numberOfDigits < 9 || numberOfDigits > 11) {
        phone_alert.classList.add("a");
        phone_alert.classList.remove("b");
        phone_alert.innerHTML = "Your phone number must contain 9 to 11 numbers";
        return false;
    } 

    // Use the regex above to test the valid form of phone number
    if (checkPhone.test(phone)) {
        phone_alert.classList.add("b");
        phone_alert.classList.remove("a");
        phone_alert.innerHTML = "Valid phone number";
        return true;
    } else {
        phone_alert.classList.add("a");
        phone_alert.classList.remove("b");
        phone_alert.innerHTML = "Invalid phone number";
        return false;
    }
}




//Function to count how many words
var mess = document.getElementById("message_alert");
function keyboard_press_count(event){
    // Get current length of message
    var current_len = document.getElementById("msg").value.length;
    var needed_len = 0;
    // if the length of the message is below 50, display a red error message that show how many words to reach 50 words
    if (current_len < 50){        
        needed_len = 50 - current_len;
        mess.classList.remove("b");
        mess.classList.add("a");
        mess.innerHTML = `You have ${needed_len} words left to reach 50 words`;
    } else if (current_len <= 500 && current_len >= 50){
        // if the message is within the range of 50 to 500, display a valid that said how many words to reach 500
        needed_len = 500 - current_len;
        mess.classList.remove("a");
        mess.classList.add("b");
        mess.innerHTML = `You have ${needed_len} words left to reach 500 words`;
    } else { // display an error message when you reach over 500 words
            needed_len = current_len - 500;
            mess.classList.remove("b");
            mess.classList.add("a");
            mess.innerHTML = `You have ${needed_len} over the limmit`;
    }
}

// Function help if the user delete a character in the message area, the number of words will be added
function backspace_count(event){
    // get the keycode of the key being press
    var x = event.keyCode
    // get current length
    var current_len = document.getElementById("msg").value.length;
    var needed_len = 0;
    // get keycode of backspace = 8
    if (x== 8){
        if (current_len < 50){
            // if the length of the message is below 50, display a red error message that show how many words to reach 50 words
            needed_len = 50 - current_len;
            mess.classList.remove("b");
            mess.classList.add("a");
            mess.innerHTML = `You have ${needed_len} words left to reach 50 words`;
        }else if (current_len < 500){
            // if the message is within the range of 50 to 500, display a valid that said how many words to reach 500
            needed_len = 500 - current_len;
            mess.classList.remove("a");
            mess.classList.add("b");
            mess.innerHTML = `You have ${needed_len} words left to reach 500 words`;
        } else {// display an error message when you reach over 500 words
            needed_len = current_len - 500;
            mess.classList.remove("b");
            mess.classList.add("a");
            mess.innerHTML = `You have ${needed_len} over the limmit`;
        }
    }
}


// Function to check validate message area
function validMessage(){
    var len = document.getElementById("msg").value.length;
    if (50 <= len && len <= 500){
        return true;
    } else {
        mess.classList.add("a");
        mess.classList.remove("b");
        mess.innerHTML ="Your message must be 50 to 500 letters";
        return false;
    }
}

// Function to have at leaste one radio is checked
function validRadio(){
    var radio_alert = document.getElementById("radio_alert");
    if (document.getElementById("email_method").checked == false && document.getElementById("phone_method").checked == false){
        // display a message in red when it is invalid
        radio_alert.classList.add("a");
        radio_alert.classList.remove("b");
        radio_alert.innerHTML = "You have to choose one option";
        return false;
    } else {
        // remove red css and add green text css to display a message when it is valid
        radio_alert.classList.add("b");
        radio_alert.classList.remove("a");
        radio_alert.innerHTML = "Valid";
        return true;
    }
}

// Function that have at lease checkbox is checked
var groupOfCheckboxes = document.getElementsByName("contactdays[]");
function checkCheckbox() {
    let checkbox_alert =  document.getElementById("checkbox_alert");
    // function checked if at least one checkbox is checked
    let checkboxChecked = function() {
        for (let i = 0; i < groupOfCheckboxes.length; i++) {
            if (groupOfCheckboxes[i].checked) {
                return true;
            }
        }
        return false;
    }
    // Function check if no checkbox is checked, display an error message
    if (checkboxChecked() === false) {
        checkbox_alert.classList.add("a");
        checkbox_alert.classList.remove("b");
        checkbox_alert.innerHTML = "You need to choose one option"
        return false;
    } else {
        // erase the error message
        checkbox_alert.innerHTML = "";
        return true;
    }
}

// Function help check the display error message when checking the checkbox directly
function validateCheckboxes() {
    for (let i = 0; i < groupOfCheckboxes.length; i++) {
        groupOfCheckboxes[i].addEventListener("change", checkCheckbox);
    }
}

// Inform the users whether the inputs are valid or not while they are typing
document.getElementById("full_name").addEventListener("input", validateName);
document.getElementById("email").addEventListener("input", validateEmail);
document.getElementById("phone").addEventListener("input", validatePhone);
document.getElementById("email_method").addEventListener("input", validRadio);
document.getElementById("phone_method").addEventListener("input", validRadio);
validateCheckboxes();



//Valdiate all fields
function validateform(event){
    if(!validateName() || !validateEmail() || !validatePhone() || !validRadio() || !checkCheckbox() || !validMessage()) {
        event.preventDefault(); // If there is invalid input, prevent the form from being submitted by cancelling the event
    } else {
        return true; // Submit the form when all inputs are valid
    }
}

// A function to clear all error message
function clear() {
    let name_alert = document.getElementById("name_alert");
    let email_alert = document.getElementById("email_alert");
    let phone_alert = document.getElementById("phone_alert");
    let radio_alert = document.getElementById("radio_alert");
    let checkbox_alert = document.getElementById("checkbox_alert");
    let message_alert = document.getElementById("message_alert");
    let alerts = [name_alert, email_alert, phone_alert, radio_alert, checkbox_alert, message_alert];
    alerts.forEach(alert => alert.innerHTML = "");
}

// Submit all form
document.querySelector("form").addEventListener("submit", validateform);
// Clear button help refresh all error message and input
document.getElementById("clear").addEventListener("click", clear);