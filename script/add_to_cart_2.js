// Get datas from the html
var addButton = document.getElementById('add-btn');
var buyNowButton = document.getElementById('buynow-btn');
var productName2 = document.getElementById('product-name').innerHTML;
var price2 = parseInt(document.getElementById('product-price').innerHTML.slice(1));

var quantity2 = 0;


// if the add button is clicked we will do something
addButton.addEventListener('click', () => {
    // Check if the user has logged in
    if (sessionStorage.getItem("successLogin")) {
        // increase the quantiy
        quantity2++;
        // Alert the added products
        window.alert(`${productName2} has been added!`);
        // Set to local storage
        localStorage.setItem('price2', price2);
        localStorage.setItem('quantity2', quantity2);
        localStorage.setItem('productName2', productName2);
    } else {
        window.alert("Please log in first");
    }

})