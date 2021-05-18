// Create consts from the html file by using querySelector method for shoter usage later
const cookieContainer = document.querySelector('.cookie-container');
const cookieButton = document.querySelector('.cookie-btn');

// Create event when the button "I understand" is clicked
cookieButton.addEventListener("click", () => {

    // Remove the CSS avtive <=> remove the bottom 40% attribute of the block to make the message pop up on the screen
    cookieContainer.classList.remove("active");

    // Create a variable in the local storage to checked if it is clicked
    sessionStorage.setItem("cookieBannerDisplayed", "true");

    // If the button is clicked, we will not display the box anymore, set the display atttribute to none
    document.getElementById('overlay-cookies').style.display = 'none';

    // Unfrozen the html file for the user to scroll after clicking the button
    document.getElementById('full-html').style.overflow = 'scroll';
    document.getElementById('full-html').style.overflowX = 'hidden';
});

// Set time for the smooth animation in after 1 second
setTimeout( () => {
    
    // If the variable cookieBannerDisplayed is not exist, we start the code block
    if (!sessionStorage.getItem("cookieBannerDisplayed")) {


        // Change the active CSS for the box message to pop up 
        cookieContainer.classList.add("active");

        // Display the overlay to avoid the user to click or hover to the main website
        document.getElementById('overlay-cookies').style.display = 'block';

                //Freeze the screen to avoid user scrolling
                document.getElementById('full-html').style.overflow = 'hidden';
    }
}, 500);



