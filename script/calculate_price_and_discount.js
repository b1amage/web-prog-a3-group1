// Add to cart

// Get the boxes of products

var product1Box = document.querySelector('.product-1');
var product2Box = document.querySelector('.product-2');
var product3Box = document.querySelector('.product-3');

// Check if the productName1 is in local storage
if (localStorage.getItem('productName1')) {

    // if yes, we get those information for creating order placement

    var quantity1 = parseInt(localStorage.getItem('quantity1'));
    var price1 = parseInt(localStorage.getItem('price1'));
    var productName1 = localStorage.getItem('productName1');

    // Set those inner html for matching data
    document.getElementById('product-name1').innerHTML = productName1;
    document.getElementById('quantity1').value = quantity1;
    document.getElementById('price1').innerHTML = '$' + price1;

    // Display the box
    product1Box.style.display = 'flex';
}

// Check if the productName2 is in local storage
if (localStorage.getItem('productName2')) {


    // if yes, we get those information for creating order placement

    var quantity2 = parseInt(localStorage.getItem('quantity2'));
    var price2 = parseInt(localStorage.getItem('price2'));
    var productName2 = localStorage.getItem('productName2');


    // Set those inner html for matching data
    document.getElementById('product-name2').innerHTML = productName2;
    document.getElementById('quantity2').value = quantity2;
    document.getElementById('price2').innerHTML = '$' + price2;

    // Display the box
    product2Box.style.display = 'flex';
}

// Check if the productName3 is in local storage
if (localStorage.getItem('productName3')) {

    // if yes, we get those information for creating order placement

    var quantity3 = parseInt(localStorage.getItem('quantity3'));
    var price3 = parseInt(localStorage.getItem('price3'));
    var productName3 = localStorage.getItem('productName3');


    // Set those inner html for matching data
    document.getElementById('product-name3').innerHTML = productName3;
    document.getElementById('quantity3').value = quantity3;
    document.getElementById('price3').innerHTML = '$' + price3;

    // Display the box
    product3Box.style.display = 'flex';
}

// Calculate
function calculatePrice() {

    // Get the price from the inner HTML (delete the $ symbol)
    var price1 = parseInt(document.getElementById('price1').innerHTML.slice(1));
    var price2 = parseInt(document.getElementById('price2').innerHTML.slice(1));
    var price3 = parseInt(document.getElementById('price3').innerHTML.slice(1));


    // Get the quantity from the inner HTML (delete the $ symbol)
    var quantity1 = parseInt(document.getElementById('quantity1').value);
    var quantity2 = parseInt(document.getElementById('quantity2').value);
    var quantity3 = parseInt(document.getElementById('quantity3').value);

    // Get the product price element in html
    var productPrice = document.getElementById('product-price');

    // Calculate then add the $ symbol
    productPrice.innerHTML = (price1 * quantity1 + price2 * quantity2 + price3 * quantity3) + '$'

    // Check if the price is not 0 (no product added) then calculate shipping fee
    if ((price1 * quantity1 + price2 * quantity2 + price3 * quantity3) == 0) {
        document.getElementById('ship-price').innerHTML = 0 + '$';
    } else {
        document.getElementById('ship-price').innerHTML = 60 + '$';
    }
 
    var shipPrice = parseInt(document.getElementById('ship-price').innerHTML);


    // Calculate total price
    var totalPrice = ((price1 * quantity1 + price2 * quantity2 + price3 * quantity3) + shipPrice);

    // Write in the inner html
    document.getElementById('total-price').innerHTML = totalPrice + '$'
}

// Check discount function
function checkDiscount() {
    // Get the value of user input
    var codeDiscount = document.getElementById('discount').value;

    // Create a variable for calculating the discounted price
    var rest;

    // Get the prices
    var price1 = parseInt(document.getElementById('price1').innerHTML.slice(1));
    var price2 = parseInt(document.getElementById('price2').innerHTML.slice(1));
    var price3 = parseInt(document.getElementById('price3').innerHTML.slice(1));

    // Get the quantity
    var quantity1 = parseInt(document.getElementById('quantity1').value);
    var quantity2 = parseInt(document.getElementById('quantity2').value);
    var quantity3 = parseInt(document.getElementById('quantity3').value);

    // Get ship price
    var shipPrice = parseInt(document.getElementById('ship-price').innerHTML);

    // Calculate the total price
    var totalPrice = ((price1 * quantity1 + price2 * quantity2 + price3 * quantity3) + shipPrice);

    // Get the control flow for the code
    switch (codeDiscount) {
        case 'COSC2430-HD':
            // if the code is COSC2430-HD: discount 20%
            rest = 0.8;
            break;
        case 'COSC2430-DI':
            // if the code is COSC2430-DI: discount 10%
            rest = 0.9;
            break;
        default:
            // if not we will remain the price steady
            rest = 1;
    }

    document.getElementById('total-price').innerHTML = totalPrice * rest +'$';

    if (rest == 1) {
        // Alert the user for wrong code
        window.alert('The code is not available');
    }

    return rest;
}

calculatePrice()

// Add event for the buttons and changes
document.getElementById('quantity1').addEventListener('change', calculatePrice);

document.getElementById('quantity2').addEventListener('change', calculatePrice);

document.getElementById('quantity3').addEventListener('change', calculatePrice);


document.getElementById('submit-discount-btn').onclick = checkDiscount;