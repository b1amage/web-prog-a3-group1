// Get datas from the html
var addButton = document.getElementById('add-btn');
var buyNowButton = document.getElementById('buynow-btn');
var productName3 = document.getElementById('product-name').innerHTML;
var price3 = parseInt(document.getElementById('product-price').innerHTML.slice(1));

var quantity3 = 0;


// if the add button is clicked we will do something
addButton.addEventListener('click', () => {
    // Check if the user has logged in
    if (sessionStorage.getItem("successLogin")) {
        // increase the quantiy
        quantity3++;
        // Alert the added products
        window.alert(`${productName3} has been added!`);
        // Set to local storage
        localStorage.setItem('price3', price3);
        localStorage.setItem('quantity3', quantity3);
        localStorage.setItem('productName3', productName3);
    } else {
        window.alert("Please log in first");
    }

})