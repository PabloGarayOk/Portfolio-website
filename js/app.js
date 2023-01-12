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

var buttonText = document.getElementById('button-text');
buttonText.addEventListener("click", clicked);
var botonText2 = document.getElementById('boton-text');
botonText2.addEventListener("click", clicked2);


const carta = document.querySelector(".carta");
const btn = document.querySelector(".btn");


function clicked(){
    carta.classList.toggle("back");
    btn.classList.toggle("back"); 
}

function clicked2(){
    carta.classList.toggle("back");
    btn.classList.toggle("back"); 
}