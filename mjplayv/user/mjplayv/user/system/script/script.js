$(document).ready(function() {
 $stadTab=localStorage.getItem('USEstado');
 //alert($stadTab);//temp

  if($stadTab=="In"){
   // alert("IN");//temp
   requie();
  }else if($stadTab=="Es"){
  // alert("Es");//temp
   ESPUs();  
   requies();
  }else{
   // alert("inicio");//temp
   requie();
  }    

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

function ING(){
  localStorage.setItem('USEstado', 'Is');
  location.href='index.php';
}
function ESP(){
  localStorage.setItem('USEstado', 'Es');
  location.href='index.php';
}
function ESPUs(){

 $("#atraz").html('Back');
 $("#btn").html('Enviar');
 $(".Email").html('Correo:');

 document.getElementById('Uiemail').placeholder="CorreoElectronico@mj.com"; 


}

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
