/*====== Validación desde Bootstrap 4 ======*/
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();


/*====== Función para validar formulario ======*/
function validateJS(event, type){

  if(type == "email") pattern = /^[.a-zA-Z0-9_]+([.][.a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/;

  if(!pattern.test(event.target.value)){
    $(event.target).parent().addClass("was-validated");
    $(event.target).parent().children(".invalid-feedback").html("Error en sintaxis de campo");
  }

}

/*====== Función para recordar credenciales de ingreso ======*/
function rememberMe(event){
  
  if(event.target.checked){
    localStorage.setItem("emailRemember", $('[name="loginEmail"]').val());
    /* localStorage.setItem("passwordRemember", $('[name="loginPassword"]').val()); */
    localStorage.setItem("checkRemember", true);
  }else{
    localStorage.removeItem("emailRemember");
    localStorage.removeItem("checkRemember");
  }

}

/*====== Capturar el email para login desde el LocalStorage ======*/
$(document).ready(function(){

  if(localStorage.getItem("emailRemember") != null){
     $('[name="loginEmail"]').val(localStorage.getItem("emailRemember"));
    /* $('[name="loginPassword"]').val(localStorage.getItem("passwordRemember")); */
  }

  if(localStorage.getItem("checkRemember") != null && localStorage.getItem("checkRemember")){
    $('#remember').attr("checked",true);
  }
})

