$(document).ready(function() {
 $stadTab=localStorage.getItem('USEstado');
 alert($stadTab);

  if($stadTab=="In"){
   // alert("IN");//temp
  }else if($stadTab=="Es"){
  // alert("Es");//temp
   ESPUs(); 
  }else{
   // alert("inicio");//temp
  }    
   var intputElements = document.getElementsByTagName("INPUT");
    for (var i = 0; i < intputElements.length; i++) {
        intputElements[i].oninvalid = function (e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                if (e.target.name == "Apodo") {
                    e.target.setCustomValidity("Apodo Required");
                }
               else if(e.target.name == "Password") {
                   e.target.setCustomValidity("Password Required");
                }
                else {
                    e.target.setCustomValidity("Space Required");
                }
            }
        };}
})


function ING(){
  localStorage.setItem('USEstado', 'Is');
  location.href='index.php';
}
function ESP(){
  localStorage.setItem('USEstado', 'Es');
  location.href='index.php';
}
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

 $(".User").html('Usuario:');

}
