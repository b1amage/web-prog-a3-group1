
// Get datas from the html
var addButton = document.getElementById('add-btn');
var buyNowButton = document.getElementById('buynow-btn');
var productName1 = document.getElementById('product-name').innerHTML;
var price1 = parseInt(document.getElementById('product-price').innerHTML.slice(1));
var quantity1 = 0;


// if the add button is clicked we will do something
addButton.addEventListener('click', () => {
    // Check if the user has logged in
    if (sessionStorage.getItem("successLogin")) {
        // increase the quantiy
        quantity1++;
        // Alert the added products
        window.alert(`${productName1} has been added!`);
        // Set to local storage
        localStorage.setItem('price1', price1);
        localStorage.setItem('quantity1', quantity1);
        localStorage.setItem('productName1', productName1);
    } else {
        window.alert("Please log in first");
    }

})
