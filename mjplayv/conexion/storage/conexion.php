<script>
$(document).ready(function() {

  $stadTab=localStorage.getItem('Mensaje');

  if($stadTab=="On"){
    //alert("enlinea");//temp
    ClUser();
  }else if($stadTab=="off"){
   //alert("fuera");//temp
  }else{
    //alert("inicio");//temp
  }
});
/**
 * [ClUser datos de carga]
 */
function ClUser(){
             if (localStorage.getItem('UUrl')!='nada') {
               document.getElementById('img').src=localStorage.getItem('UUrl'); //img
             } 
            document.getElementById('Myuse').innerText = localStorage.getItem('Uapodo');//div
            document.getElementById('esta').innerText =  localStorage.getItem('UEstado');//div
            document.getElementById('US').innerText =  localStorage.getItem('UName');//div
}
/**
 * [cerrar deja en blanco los datos de tipo local]
 * @return {[type]} [no retorna nada]
 */
function cerrar(){
    localStorage.setItem('Mensaje', 'off');
    location.reload(true); 
    localStorage.setItem('UEstado', '');
    localStorage.setItem('Uapodo', ' ');             
    localStorage.setItem('UName', ' ');                            
    localStorage.setItem('UUrl', ' '); 
    localStorage.setItem('Uidioma', ' ');                  
    localStorage.setItem('UCorre', ' ');        
    localStorage.setItem('UNameA', ' '); 
}
</script>
<?php 

if(isset($_POST['temp'])){
  $location = "location: /index.php";
  session_destroy();
  header($location);
}
?>
