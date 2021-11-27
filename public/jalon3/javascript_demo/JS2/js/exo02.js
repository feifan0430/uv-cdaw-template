let color = 0;
let monCaroussel = document.getElementById("caroussel");
function change() {
    // alert(color);
    if (color == 0) {
        monCaroussel.style.backgroundColor = "pink";
        color = 1;
    } else {
        monCaroussel.style.backgroundColor = "yellow";
        color = 0;
    }
}
// setInterval(change, 3000);