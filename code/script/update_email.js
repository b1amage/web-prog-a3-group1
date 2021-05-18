let loginEmail = document.getElementById("login-email");

// Retrieve the email that users used to log in
let email = sessionStorage.getItem("login-email");

if(email){
    // Update the email address with the email users used to log in
    loginEmail.innerHTML = email;
    // Update the anchor link with the email users used to log in
    loginEmail.href = `mailto:${email}`;
}
