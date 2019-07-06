var profil = document.querySelector(".header_profil");
var profilDropdown = document.querySelector(".profil_dropdown");

profilDropdown.classList.add("nonedisplay");

profil.addEventListener("click", function() {
  if (profilDropdown.classList.contains("nonedisplay")) {
    profilDropdown.classList.remove("nonedisplay");
    profilDropdown.classList.add("flexdisplay");
  } else {
    console.log("Plop");
    profilDropdown.classList.remove("flexdisplay");
    profilDropdown.classList.add("nonedisplay");
  }
});