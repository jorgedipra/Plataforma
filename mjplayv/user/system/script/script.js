/**
 * [ready funcion de arranque de la pagina]
 * @return {[type]} [No tiene retorno de datos(ajax)]
 */
$(document).ready(function() {
 $stadTab=localStorage.getItem('USEstado');
  if($stadTab=="In"){requie();
  }else if($stadTab=="Es"){ ESPUs();  requies();
  }else{ requie(); }
  /**
   * [requie funcion de required de tipo email]
   * #ingles
   * @return {[type]} [mensaje de denegacion]
   */
  function requie(){
   var intputElements = document.getElementsByTagName("INPUT");
    for (var i = 0; i < intputElements.length; i++) {
      intputElements[i].oninvalid = function (e) {
        e.target.setCustomValidity("");
        if (!e.target.validity.valid) {
          if (e.target.name == "Uiemail") {
            e.target.setCustomValidity("Email required");
          }               
        }
      };}
    }
  /**
   * [requie funcion de required de tipo email]
   * #español
   * @return {[type]} [mensaje de denegacion]
   */
   function requies(){
   var intputElements = document.getElementsByTagName("INPUT");
    for (var i = 0; i < intputElements.length; i++) {
      intputElements[i].oninvalid = function (e) {
        e.target.setCustomValidity("");
        if (!e.target.validity.valid) {
          if (e.target.name == "Uiemail") {
            e.target.setCustomValidity("Correo Requerido");
          }               
        }
    };}
  }   
})
/**
 * [ING control de idioma en ingles]
 */
function ING(){
  localStorage.setItem('USEstado', 'Is');
  location.href='index.php';
}
/**
 * [ESP control de idioma en español]
 */
function ESP(){
  localStorage.setItem('USEstado', 'Es');
  location.href='index.php';
}
/**
 * [ESPUs de ingles(ajax)]
 */
function ESPUs(){
 $("#atraz").html('Back');
 $("#btn").html('Enviar');
 $(".Email").html('Correo:');
 document.getElementById('Uiemail').placeholder="CorreoElectronico@mj.com"; 
}
/**
 * [ready esta funcion inicia con la pagina y permite validare el email]
 * @return {[type]} [retorna un color segun sea correcto o no]
 */
$(document).ready(function(){  
  $('#Uiemail').keyup(function(){
    var _this = $('#Uiemail');
    var _email = $('#Uiemail').val();  
    var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    var valid = re.test(_email);  
    if(valid){
      _this.attr('style', 'background:white');
    } else {
      _this.attr('style', 'background:rgba(255,0,0,0.6)');
    }
  });
});   