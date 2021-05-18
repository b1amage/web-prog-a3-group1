// Initialise the variables
var overlay = document.getElementById('overlay-about');
var duyBox = document.getElementById('duy-box');
var baoBox = document.getElementById('bao-box');
var tuanBox = document.getElementById('tuan-box');
var longBox = document.getElementById('long-box');
var bao = document.getElementById('more-info-bao');
var duy = document.getElementById('more-info-duy');
var long = document.getElementById('more-info-long');
var tuan = document.getElementById('more-info-tuan');

// Turn off overlay
function offOverlay() {
    overlay.style.display = 'none';
    duy.style.display = 'none';
    bao.style.display = 'none';
    long.style.display = 'none';
    tuan.style.display = 'none';
    document.querySelector('html').style.overflowY = 'scroll';
}   

// This function display the info of the box due to the screen
function displayInfo(name) {
    document.querySelector('html').style.overflow = 'hidden';
    overlay.style.display = 'block';
    name.style.display = 'block';
}

// Create an overlay when clicking on the box 
duyBox.onclick = () => {
    displayInfo(duy);
};

baoBox.onclick = () => {
    displayInfo(bao);
};

longBox.onclick = () => {
    displayInfo(long);
};

tuanBox.onclick = () => {
    displayInfo(tuan);
};