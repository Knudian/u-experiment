var profil = document.querySelector(".header_profil");
var profilDropdown = document.querySelector(".profil_dropdown");
var html = document.querySelector("html");
var profilElement1 = document.getElementsByClassName("profil_element")[0];
var profilElement2 = document.getElementsByClassName("profil_element")[1];

profilDropdown.classList.add("nonedisplay");

/* profil.addEventListener("click", function() {
if (profilDropdown.classList.contains("nonedisplay")) {
profilDropdown.classList.remove("nonedisplay");
profilDropdown.classList.add("flexdisplay");
}
}); */

html.addEventListener("click", function(event) {
    /*   if (profilDropdown.classList.contains("flexdisplay")) {
    profilDropdown.classList.remove("flexdisplay");
    profilDropdown.classList.add("nonedisplay");
} */
if (event.target === profil) {
    profilDropdown.classList.toggle("nonedisplay");
    profilDropdown.classList.toggle("flexdisplay");
} else if (event.target != profilDropdown && event.target != profilElement1 && event.target != profilElement2) {
    profilDropdown.classList.add("nonedisplay");
    profilDropdown.classList.remove("flexdisplay");
}
});


function toggleClass(selector,className) {
    let node = document.querySelector(selector);
    node.classList.toggle(className);
    document.querySelector('.button-icon').classList.toggle('rotate');
}
