var slider = document.getElementById("customizationPriceSlider");
var output = document.getElementById("output");
output.innerHTML = slider.value;

slider.oninput = function() {
    output.innerHTML = this.value;
}