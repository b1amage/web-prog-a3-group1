let myAccount = document.getElementsByClassName("my-account");

// Check if the users successfully logged in
if (sessionStorage.getItem("successLogin")) {
    // Redirect the users to user-information page when the users clicked at My Account tab
    myAccount[0].href = "./user-information.php";
    myAccount[1].href = "./user-information.php";
}
