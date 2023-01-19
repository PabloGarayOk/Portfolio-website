const menu = document.querySelector(".menu");
const openMenuBtn = document.querySelector(".open-menu");
const closeMenuBtn = document.querySelector(".close-menu");

function toggleMenu() {
  menu.classList.toggle("menu_opened");
}

openMenuBtn.addEventListener("click", toggleMenu);
closeMenuBtn.addEventListener("click", toggleMenu);

const menuLinks = document.querySelectorAll(".menu a[href^='#']");

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach(entry => {
      const id = entry.target.getAttribute("id");
      const menuLink = document.querySelector(`.menu a[href="#${id}"]`)

      if (entry.isIntersecting) {
        document.querySelector(".menu a.active").classList.remove("active");
        menuLink.classList.add("active");
      }
    });
  }, 
  { rootMargin: "-30% 0px -70% 0px" }
);

menuLinks.forEach(menuLink => {
  menuLink.addEventListener("click", function() {
    menu.classList.remove("menu_opened");
  });

  const hash = menuLink.getAttribute("href");
  const target = document.querySelector(hash);
  if (target) {
    observer.observe(target);
  }
});

// Validar formulario

function validar() {
    
  const usuario = document.getElementById("name");
  const email = document.getElementById('email');
  const message = document.getElementById("message");
  const form = document.getElementById("contact_form");

  const usuario2 = usuario.value.trim();
  const email2 = email.value.trim();
  const message2 = message.value.trim();
  
  let regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

  if (usuario2 === '') {
      alert("The Name field is empty.")
      usuario.focus(); 
      return false;

  }else if(usuario2.length > 30) {
      alert("The name is too long.")
      usuario.focus(); 
      return false;
  
  }else if (email2 === '') {
      alert("The Email field is empty.");                          
      email.focus();
      return false;
  
  }else if (!regexEmail.test(email2)) {
      alert("The email is not in the correct format.");
      email.focus();              
      return false;
  
  }else if (message2 === '') {
      alert("The Message field is empty.");
      message.value="";
      message.focus();
      return false;
  
  }else{
      form.submit();
  }
  
}

// Cambio de Idioma

var flagA = document.getElementById('flagA');
flagA.addEventListener("click", toggleLanguage);
var flagB = document.getElementById('flagB');
flagB.addEventListener("click", toggleLanguage);

var flagC = document.getElementById('flagC');
flagC.addEventListener("click", toggleLanguage);
var flagD = document.getElementById('flagD');
flagD.addEventListener("click", toggleLanguage);

const buttonFlags = document.querySelector(".button-flags");
const img = document.querySelector(".home-img-box");
const greeting = document.querySelector(".home-info-greeting-box");
const iamName = document.querySelector(".home-info-name-box");
const subtitle = document.querySelector(".home-info-subtitle-box");
const download = document.querySelector(".home-info-download-box");
const about = document.querySelector(".about-title-box");
const aboutWho = document.querySelector(".about-content-info-who-box");
const aboutWhoText = document.querySelector(".about-content-info-who-text-box");
const aboutHobbies = document.querySelector(".about-content-details-hobbies-box");
const aboutHobbiesText = document.querySelector(".about-content-details-hobbies-text-box");

const skills = document.querySelector(".skills-content-title-box");
const portfolio = document.querySelector(".portfolio-content-title-box");
const contact = document.querySelector(".contact-content-title-box");



function toggleLanguage(){
  buttonFlags.classList.toggle("back");
  img.classList.toggle("back");
  greeting.classList.toggle("back");
  iamName.classList.toggle("back");
  subtitle.classList.toggle("back");
  download.classList.toggle("back");
  about.classList.toggle("back");
  aboutWho.classList.toggle("back");
  aboutWhoText.classList.toggle("backwho");
  aboutHobbies.classList.toggle("back");
  aboutHobbiesText.classList.toggle("back-hobbies");

  skills.classList.toggle("back-skills");
  portfolio.classList.toggle("back");
  contact.classList.toggle("back");
}