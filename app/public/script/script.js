var profil = document.querySelector(".header_profil");
var profilDropdown = document.querySelector(".profil_dropdown");
var html = document.querySelector("html");
var profilElement1 = document.getElementsByClassName("profil_element")[0];
var profilElement2 = document.getElementsByClassName("profil_element")[1];
var loginForm = document.getElementById('login_form');
var registrationForm = document.getElementById('registration_form');
var LoginID = document.getElementById('login');
var RegistrationID = document.getElementById('registration');

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

document.querySelector('.order').onclick = function(){
    if (this.innerHTML == 'A-Z') {
        this.innerHTML = 'Z-A';
    } else {
        this.innerHTML = 'A-Z';
    }
};

profilDropdown.addEventListener("click", function(event) {
  if (event.target === profilElement1) {
    ActivateForm();
  } else if (event.target === profilElement2) {
    ActivateForm();
  }
});

if ((loginForm && registrationForm) != null) {

  function ActivateForm() {
    registrationForm.classList.toggle("section_active");
    registrationForm.classList.toggle("section_not_active");
    loginForm.classList.toggle("section_not_active");
    loginForm.classList.toggle("section_active");
    LoginID.classList.toggle("forms_not_active");
    LoginID.classList.toggle("forms_active");
    RegistrationID.classList.toggle("forms_not_active");
    RegistrationID.classList.toggle("forms_active");
  }

  LoginID.addEventListener("click", function() {
    if (registrationForm.classList.contains("section_active")) {
      ActivateForm();
    }
  })

  RegistrationID.addEventListener("click", function() {
    if (loginForm.classList.contains("section_active")) {
      ActivateForm();
    }
  })
}
