var productNumber = parseInt(document.getElementById('product-number').innerHTML);

// console.log(productNumber);

function checkDiscount() {
    let inputCode = document.getElementById('discount-code').value;
    let rest = 1;
    switch(inputCode) {
        case 'COSC2430-HD':
            rest = 0.8;
            break;
        case 'COSC2430-DI':
            rest = 0.9;
            break;
        default:
            rest = 1;
    }
    
    // if (rest === 1) {
    //     window.alert("Code is not valid");
    // }

    return rest
    // document.getElementById('total').innerHTML = (document.getElementById('total').innerHTML * rest).toFixed(2);

}

function calculatePrice() {
    var remaining = checkDiscount();
    var total = 0;
    for (let i=1; i <= productNumber; i++) {
    
        idPrice = 'price-' + i.toString();
        idQuantity = 'quantity-' + i.toString();
        price = parseFloat(document.getElementById(idPrice).innerHTML);
        quantity = parseInt(document.getElementById(idQuantity).value);
        // console.log(quantity);
        total += price*quantity;
        document.getElementById('total').innerHTML = (total*remaining).toFixed(2);
    }
}

window.onload = calculatePrice;





for (let i=1; i <= productNumber; i++) {
    let inputId = 'quantity-' + i.toString();
    document.getElementById(inputId).addEventListener('change', calculatePrice);
}

document.getElementById('submit-btn').onclick = calculatePrice;

