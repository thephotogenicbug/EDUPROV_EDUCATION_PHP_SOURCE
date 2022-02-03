// function togglePopup(){
//     document.getElementById("popup-1").classList.toggle("active");
// }

function togglePopup(){
    element = document.getElementById("popup-1").classList.toggle("active");
}
window.onload = setTimeout(togglePopup, 2000)