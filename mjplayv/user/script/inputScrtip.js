/**
 * [ready funcion de arranque de la pagina]
 * @return {[type]} [No tiene retorno de datos(ajax)]
 */
$(document).ready(function() {
 $stadTab=localStorage.getItem('USEstado');
   if($stadTab=="In"){ requie();
    }else if($stadTab=="Es"){ ESPUs(); requies();
    }else{ requie();}    
  /**
   * [requie requiered de contraseñas]
   * #ingles
   * @return {[type]} [mensaje personalizado de contraseña required]
   */
  function requie(){
   var intputElements = document.getElementsByTagName("INPUT");
    for (var i = 0; i < intputElements.length; i++) {
      intputElements[i].oninvalid = function (e) {
        e.target.setCustomValidity("");
        if (!e.target.validity.valid) {
          if (e.target.name == "Apodo1") { e.target.setCustomValidity("User Required");}
            else if(e.target.name == "Password1") { e.target.setCustomValidity("Password Required");}
            else { e.target.setCustomValidity("Space Required");}
            }
        };}
      }
  /**
   * [requie requiered de contraseñas]
   * #español
   * @return {[type]} [mensaje personalizado de contraseña required]
   */
   function requies(){
   var intputElements = document.getElementsByTagName("INPUT");
    for (var i = 0; i < intputElements.length; i++) {
      intputElements[i].oninvalid = function (e) {
        e.target.setCustomValidity("");
        if (!e.target.validity.valid) {
          if (e.target.name == "Apodo1") { e.target.setCustomValidity("Usuario Requerido");}
            else if(e.target.name == "Password1") {e.target.setCustomValidity("Contraseña Requerida");}
            else {e.target.setCustomValidity("Espacio Requerido");}
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
 * [ESPUs Español-ingles(ajax)]
 */
function ESPUs(){
 document.getElementById('Log').innerText="Entrar"; 
 document.getElementById('LogH2').innerText="<- Entrar ->"; 
 document.getElementById('Sin').innerText="Registrarse"; 
 document.getElementById('SinH2').innerText="<- Registrarse ->"; 
 document.getElementById('btn').innerText="Entrar"; 
 document.getElementById('btnUp').innerText="Registar"; 
 document.getElementById('firstname').placeholder="Usuario"; 
 document.getElementById('pass').innerText="Contraseña:"; 
 document.getElementById('ipass').placeholder="Contraseña"; 
 document.getElementById('fac').innerText="Iniciar con Facebook >>"; 
 document.getElementById('Twt').innerText="Iniciar con Twitter >>"; 
 document.getElementById('Gog').innerText="Iniciar con Google >>"; 
 document.getElementById('Git').innerText="Iniciar con GitHub >>"; 
 document.getElementById('Uiuser').placeholder="Usuario"; 
 document.getElementById('Uname').innerText="Nombre:"; 
 document.getElementById('Uiname').placeholder="Nombre"; 
 document.getElementById('Ulasname').innerText="Apellido"; 
 document.getElementById('Uilasname').placeholder="Apellido"; 
 document.getElementById('Uemail').innerText="Correo:"; 
 document.getElementById('Udate').innerText="Fecha de N:"; 
 document.getElementById('Upass').innerText="Contraseña:"; 
 document.getElementById('Uipass').placeholder="Contraseña"; 
 document.getElementById('Urepeat').innerText="Repitala:"; 
 document.getElementById('Uirepeat').placeholder="Repetir Contraseña"; 
 document.getElementById('ifac').innerText="Registro con Facebook>>"; 
 document.getElementById('iTwt').innerText="Registro con Twitter>>"; 
 document.getElementById('iGog').innerText="Registro con Google>>"; 
 document.getElementById('iGit').innerText="Registro con GitHub>>"; 
 $("#Olpas").html('*Olvidaste tu contraseña?');
 $(".User").html('Usuario:');
}
/**
 * [requiered]
 * @return {[type]} [mensaje o color si es correcto o no]
 */
$(document).ready(function(){
   $('#Uipass').keyup(function(){
    var _this = $('#Uipass');
    var Uipass = $('#Uipass').val();
    _this.attr('style', 'background:white');
    if(Uipass.charAt(0) == ' '){
      _this.attr('style', 'background:rgba(255,0,0,0.6)');
    }
    if(_this.val() == ''){
      _this.attr('style', 'background:rgba(255,0,0,0.6)');
    }
  });

  $('#Uirepeat').keyup(function(){
    var Uipass = $('#Uipass').val();
    var Uirepeat = $('#Uirepeat').val();
    var _this = $('#Uirepeat');
    _this.attr('style', 'background:white');
    if(Uipass != Uirepeat && Uirepeat != ''){
      _this.attr('style', 'background:rgba(255,0,0,0.6)');
    }
  });
  
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

    $('#Uiuser').keyup(function(){
      var _this = $('#Uiuser');
        _this.attr('style', 'background:white');
    });

    $('#Uiname').keyup(function(){
      var _this = $('#Uiname');
        _this.attr('style', 'background:white');
    });

    $('#Uilasname').keyup(function(){
      var _this = $('#Uilasname');
        _this.attr('style', 'background:white');
    });

    $('#Uipass').keyup(function(){
      var _this = $('#Uipass');
        _this.attr('style', 'background:white');
    });

    $( "#formulario" ).submit(function () {         
    if($( "#Uiuser" ).val().length < 1) {  
      var _this = $('#Uiuser');     
      _this.attr('style', 'background:rgba(255,0,0,0.6)');         
        return false;  
    } 
    if($( "#Uiname" ).val().length < 1 ) {  
      var _this = $('#Uiname');     
      _this.attr('style', 'background:rgba(255,0,0,0.6)');            
        return false;  
    } 
    if($( "#Uilasname" ).val().length < 1 ) {  
      var _this = $('#Uilasname');     
      _this.attr('style', 'background:rgba(255,0,0,0.6)');            
        return false;  
    } 
    if($( "#Uiemail" ).val().length < 1 ) {  
      var _this = $('#Uiemail');     
      _this.attr('style', 'background:rgba(255,0,0,0.6)');            
        return false;  
    } 
    if($( "#Uipass" ).val().length < 1 ) {  
      var _this = $('#Uipass');     
      _this.attr('style', 'background:rgba(255,0,0,0.6)');            
        return false;  
    } 
    if($( "#Uirepeat" ).val().length < 1 ) {  
      var _this = $('#Uirepeat');     
      _this.attr('style', 'background:rgba(255,0,0,0.6)');  
        return false;  
    } 
    var Uipass = $('#Uipass').val();
    var Uirepeat = $('#Uirepeat').val();
    var _this = $('#Uirepeat');
    _this.attr('style', 'background:white');
    if(Uipass != Uirepeat && Uirepeat != ''){
      _this.attr('style', 'background:rgba(255,0,0,0.6)');
      return false;
    }
  });  

});   