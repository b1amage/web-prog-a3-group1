var horMargin = 40; //initialise the margin between the products/stores box

// Duplicate the length of the container
function setup(container, items) {
    let intialLength = items.length; 
    for (let i = 0; i < intialLength; i++) {
        container.appendChild(items[i].cloneNode(true));
    }
}

// This function will create a scroll effect
function startScroll(container, items, stop) {
    /*
    container: container name 
    items: store / product
    stop: a checker to create the automatic scroll
    */
    let width = items[0].offsetWidth; // this width include the width of the items (the boxes) and the margin of them

    if (stop === 'false') {
        container.scrollLeft += 4; // the scrollbar will move to the left 4px
    } 
    // Remove the first product/store after the scrollbar have passed them.
    if (container.scrollLeft === 0) {
        let clone = items[items.length-1].cloneNode(true);
        container.removeChild(items[items.length-1]);
        container.prepend(clone);
        container.scrollLeft = width + horMargin * 2;
    }

    if (container.scrollLeft >= width + horMargin * 2) {
        let clone = items[0].cloneNode(true);
        container.removeChild(items[0]);
        container.appendChild(clone);
        container.scrollLeft = 0;
    }
}

// Create a auto scroll effect
function autoScroll(containerName, item) {
    let items = document.getElementsByClassName(item);
    let container = document.getElementsByClassName(containerName)[0];
    let stop = 'false';
    //if the mouse is hover on the container, the function will stop
    container.onmouseover = function() {
        stop = 'true';
    }
    //if the mouse leaves the container, the function will continue
    container.onmouseleave = function() {
        stop = 'false';
    }
    if (items.length > 5) {
        container.style.overflowY = "hidden";
        container.style.overflowX = "scroll";
        container.style.flexWrap = "nowrap";
        setup(container, items);
        //create a loop to automatically scroll
        setInterval(function() {
            startScroll(container, items, stop);
        }, 25);
    }

}

autoScroll("store-container", "store");
autoScroll("product-container", "product");
autoScroll("feature-container first", "feature first");
autoScroll("feature-container last", "feature-last");
