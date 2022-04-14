//Validacion de formulario enviar cv

function validar(){
        
    var contactform = document.contactform;
  
    if (contactform.name.value==0){
        alert("El campo Nombre esta vacio");
        contactform.name.value="";
        contactform.name.focus();
        return false;
    }
  
    if (contactform.email.value==0){                //Comprobamos que no este vacio el campo
        alert("El campo Email esta vacio");         //Luego de comprobar mandamos el mensaje
        contactform.email.value="";                 //Limpieza del campo
        contactform.email.focus();                  //Hace foco en el campo
        return false;                               //Detenemos la ejecuccion de este script
    }
  
    if (contactform.message.value==0){
        alert("El campo Mensaje esta vacio");
        contactform.message.value="";
        contactform.message.focus();
        return false;
    }
  }

//validacion de formulario en ingles
  function validar(){
        
    var contactform = document.contactform;
  
    if (contactform.name.value==0){
        alert("The Name field is empty.");
        contactform.name.value="";
        contactform.name.focus();
        return false;
    }
  
    if (contactform.email.value==0){                //Comprobamos que no este vacio el campo
        alert("The Email field is empty.");         //Luego de comprobar mandamos el mensaje
        contactform.email.value="";                 //Limpieza del campo
        contactform.email.focus();                  //Hace foco en el campo
        return false;                               //Detenemos la ejecuccion de este script
    }
  
    if (contactform.message.value==0){
        alert("The Message field is empty.");
        contactform.message.value="";
        contactform.message.focus();
        return false;
    }
  }

//Esto funciona parcialmente porque no enfoca luego de que se introduce un mail incorrecto
//y pasa a enfocar el campo mensaje

function validar(){
        
    var contact_form = document.contact_form;
  
    let regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  
    if (contact_form.name.value==0){
        alert("The Name field is empty.");
        contact_form.name.value="";
        contact_form.name.focus();
        return false;
    }
  
    if (contact_form.email.value==0){                //Comprobamos que no este vacio el campo
        alert("The Email field is empty.");          //Luego de comprobar mandamos el mensaje
        contact_form.email.value="";                 //Limpieza del campo
        contact_form.email.focus();                  //Hace foco en el campo
        return false;                                //Detenemos la ejecuccion de este script
    }
    
    if(!regexEmail.test(contact_form.email.value)) { 
        alert("The Email haven`t a correct format.")
        return false;
    }
  
    if (contact_form.message.value==0){
        alert("The Message field is empty.");
        contact_form.message.value="";
        contact_form.message.focus();
        return false;
    }
  
    alert("Su mensaje se ha enviado con exito!");
    contact_form.submit();
  }

//Esta tambien anda

function validar(){
        
    var contact_form = document.contact_form;
  
  
    if (contact_form.name.value==0){
        alert("The Name field is empty.");
        contact_form.name.value="";
        contact_form.name.focus();
        return false;
    }
  
    if (contact_form.email.value==0){                //Comprobamos que no este vacio el campo
        alert("The Email field is empty.");          //Luego de comprobar mandamos el mensaje
        contact_form.email.value="";                 //Limpieza del campo
        contact_form.email.focus();                  //Hace foco en el campo
        return false;                                //Detenemos la ejecuccion de este script
    } 
    
    if (!regexEmail (contact_form.email.value)) { 
        alert("The Email haven`t a correct format.")
        contact_form.email.value=""; 
        contact_form.email.focus(); 
        return false;
    }
  
    if (contact_form.message.value==0){
        alert("The Message field is empty.");
        contact_form.message.value="";
        contact_form.message.focus();
        return false;
    }
  
    alert("Su mensaje se ha enviado con exito!");
    contact_form.submit();
  }