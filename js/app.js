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
      const menuLink = document.querySelector(`.menu a[href="#${id}"]`);
      const menuActive = document.querySelector(".menu a.active");

      if (entry.isIntersecting) {
        menuActive.classList.remove("active");
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

// Validar formulario Back

function validarBack() {
    
  const usuarioBack = document.getElementById("nombre");
  const emailBack = document.getElementById('correo');
  const messageBack = document.getElementById("mensaje");
  const formBack = document.getElementById("contact_form_back");

  const usuario2Back = usuarioBack.value.trim();
  const email2Back = emailBack.value.trim();
  const message2Back = messageBack.value.trim();
  
  let regexEmailBack = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

  if (usuario2Back === '') {
      alert("El campo Nombre esta vacio.")
      usuarioBack.focus(); 
      return false;

  }else if(usuario2Back.length > 30) {
      alert("El Nombre es muy largo.")
      usuarioBack.focus(); 
      return false;
  
  }else if (email2Back === '') {
      alert("El campo correo electronico esta vacio.");                          
      emailBack.focus();
      return false;
  
  }else if (!regexEmailBack.test(email2Back)) {
      alert("El Correo electronico no tiene un formato correcto.");
      emailBack.focus();              
      return false;
  
  }else if (message2Back === '') {
      alert("El campo Mensaje esta vacio.");
      messageBack.value="";
      messageBack.focus();
      return false;
  
  }else{
      formBack.submit();
  }
  
}

// Cambio de Idioma

var flagA = document.getElementById('flagA');
flagA.addEventListener("click", toggleLanguage);
flagA.addEventListener("click", sizeLi);
var flagB = document.getElementById('flagB');
flagB.addEventListener("click", toggleLanguage);
flagB.addEventListener("click", sizeLi);
var flagC = document.getElementById('flagC');
flagC.addEventListener("click", toggleLanguage);
flagC.addEventListener("click", sizeLi);
var flagD = document.getElementById('flagD');
flagD.addEventListener("click", toggleLanguage);
flagD.addEventListener("click", sizeLi);

// Navbar
const menuHome = document.querySelector(".menu-home-box");
const menuAbout = document.querySelector(".menu-about-box");
const menuSkills = document.querySelector(".menu-skills-box");
const menuPortfolio = document.querySelector(".menu-portfolio-box");
const menuContact = document.querySelector(".menu-contact-box");
const buttonLanguage = document.querySelector(".menu-language-box");
const buttonLanguageFront = document.querySelector(".menu-language-box-side-front");
const buttonLanguageMobile = document.querySelector(".menu-mobile-language-box");
const buttonLanguageMobileFront = document.querySelector(".menu-mobile-language-box-side-front");
// Home
const img = document.querySelector(".home-img-box");
const imgFront = document.querySelector(".home-img-box-side-front");
const greeting = document.querySelector(".home-info-greeting-box");
const greetingFront = document.querySelector(".home-info-greeting-box-side-front");
const iamName = document.querySelector(".home-info-name-box");
const iamNameFront = document.querySelector(".home-info-name-box-side-front");
const subtitle = document.querySelector(".home-info-subtitle-box");
const subtitleFront = document.querySelector(".home-info-subtitle-box-side-front");
const download = document.querySelector(".home-info-download-box");
const downloadFront = document.querySelector(".home-info-download-box-side-front");
// About
const aboutTitle = document.querySelector(".about-title-box");
const aboutTitleFront = document.querySelector(".about-title-box-side-front");
const aboutWho = document.querySelector(".about-content-info-who-box");
const aboutWhoFront = document.querySelector(".about-content-info-who-box-side-front");
const aboutWhoText = document.querySelector(".about-content-info-who-text-box");
const aboutWhoTextFront = document.querySelector(".about-content-info-who-text-box-side-front");
const aboutHobbies = document.querySelector(".about-content-details-hobbies-box");
const aboutHobbiesFront = document.querySelector(".about-content-details-hobbies-box-side-front");
const aboutHobbiesText = document.querySelector(".about-content-details-hobbies-text-box");
const aboutHobbiesTextFront = document.querySelector(".about-content-details-hobbies-text-box-side-front");
// Skills
const skillsTitle = document.querySelector(".skills-content-title-box");
const skillsTitleFront = document.querySelector(".skills-content-title-box-side-front");
// Portfolio
const portfolioTitle = document.querySelector(".portfolio-content-title-box");
const portfolioTitleFront = document.querySelector(".portfolio-content-title-box-side-front");
const portfolioCards1 = document.querySelector(".portfolio-container-cards-box1");
const portfolioCardsFront1 = document.querySelector(".portfolio-container-cards-box-side-front1");
const portfolioCards2 = document.querySelector(".portfolio-container-cards-box2");
const portfolioCardsFront2 = document.querySelector(".portfolio-container-cards-box-side-front2");
const portfolioCards3 = document.querySelector(".portfolio-container-cards-box3");
const portfolioCardsFront3 = document.querySelector(".portfolio-container-cards-box-side-front3");
const portfolioCards4 = document.querySelector(".portfolio-container-cards-box4");
const portfolioCardsFront4 = document.querySelector(".portfolio-container-cards-box-side-front4");
const portfolioCards5 = document.querySelector(".portfolio-container-cards-box5");
const portfolioCardsFront5 = document.querySelector(".portfolio-container-cards-box-side-front5");
const portfolioCards6 = document.querySelector(".portfolio-container-cards-box6");
const portfolioCardsFront6 = document.querySelector(".portfolio-container-cards-box-side-front6");
// Contact
const contactTitle = document.querySelector(".contact-content-title-box");
const contactTitleFront = document.querySelector(".contact-content-title-box-side-front");
const contactForm = document.querySelector(".contact-content-form-box");
const contactFormInput = document.querySelector(".contact-group-front");
const space = document.getElementById('space');
const spaceBack = document.getElementById('space-back');
const contactLinks = document.querySelector(".contact-content-links-box");
const contactLinksFront = document.querySelector(".contact-content-links-box-side-front");
// Footer
const footer = document.querySelector(".footer-credits-box");
const footerFront = document.querySelector(".footer-credits-box-side-front");

function toggleLanguage(){
  // Navbar
  menuHome.classList.toggle("back");
  menuAbout.classList.toggle("back");
  menuSkills.classList.toggle("back");
  menuPortfolio.classList.toggle("back");
  menuContact.classList.toggle("back");
  buttonLanguage.classList.toggle("back");
  buttonLanguageFront.classList.toggle("front");
  buttonLanguageMobile.classList.toggle("back");
  buttonLanguageMobileFront.classList.toggle("front");
  // Home
  img.classList.toggle("back");
  imgFront.classList.toggle("front");
  greeting.classList.toggle("back");
  greetingFront.classList.toggle("front");
  iamName.classList.toggle("back");
  iamNameFront.classList.toggle("front");
  subtitle.classList.toggle("back");
  subtitleFront.classList.toggle("front");
  download.classList.toggle("back");
  downloadFront.classList.toggle("front");
  // About
  aboutTitle.classList.toggle("back");
  aboutTitleFront.classList.toggle("front");
  aboutWho.classList.toggle("back");
  aboutWhoFront.classList.toggle("front");
  aboutWhoText.classList.toggle("back-about-who-text"); // backwho
  aboutWhoTextFront.classList.toggle("front");
  aboutHobbies.classList.toggle("back");
  aboutHobbiesFront.classList.toggle("front");
  aboutHobbiesText.classList.toggle("back-about-hobbies-text"); //back-hobbies
  aboutHobbiesTextFront.classList.toggle("front");
  // Skills
  skillsTitle.classList.toggle("back-skills");
  skillsTitleFront.classList.toggle("front");
  // Portfolio
  portfolioTitle.classList.toggle("back");
  portfolioTitleFront.classList.toggle("front");
  portfolioCards1.classList.toggle("back");
  portfolioCardsFront1.classList.toggle("front");
  portfolioCards2.classList.toggle("back");
  portfolioCardsFront2.classList.toggle("front");
  portfolioCards3.classList.toggle("back");
  portfolioCardsFront3.classList.toggle("front");
  portfolioCards4.classList.toggle("back");
  portfolioCardsFront4.classList.toggle("front");
  portfolioCards5.classList.toggle("back");
  portfolioCardsFront5.classList.toggle("front");
  portfolioCards6.classList.toggle("back");
  portfolioCardsFront6.classList.toggle("front");
  // Contact
  contactTitle.classList.toggle("back");
  contactTitleFront.classList.toggle("front");
  contactForm.classList.toggle("back");
  contactFormInput.classList.toggle("front");
  // space.classList.toggle("display");
  setTimeout(() => {
    console.log(space.classList.toggle("display"))
  }, 370);
  setTimeout(() => {
    console.log(spaceBack.classList.toggle("display"))
  }, 370);
  // spaceBack.classList.toggle("display");
  contactLinks.classList.toggle("back");
  contactLinksFront.classList.toggle("front");
  // Footer
  footer.classList.toggle("back");
  footerFront.classList.toggle("front");
}

function sizeLi(){
  menuHome.classList.toggle("menu-home-box-size");
  menuAbout.classList.toggle("menu-about-box-size");
  menuSkills.classList.toggle("menu-skills-box-size");
  menuPortfolio.classList.toggle("menu-portfolio-box-size");
  menuContact.classList.toggle("menu-contact-box-size");
}