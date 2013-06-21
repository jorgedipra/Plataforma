<script>
/**
 * [ready funcion de arranque de la pagina]
 * @return {[type]} [Nohay retorno de datos]
 */
$(document).ready(function() {
  $stadTab=localStorage.getItem('Mensaje');
  if($stadTab=="On"){
    ClUser();
  }
});
/**
 * [ClUser datos de carga]
 */
function ClUser(){
    if (localStorage.getItem('UUrl')!='nada') {
       document.getElementById('img').src=localStorage.getItem('UUrl'); } 
    document.getElementById('Myuse').innerText = localStorage.getItem('Uapodo');
    document.getElementById('esta').innerText =  localStorage.getItem('UEstado');
    document.getElementById('US').innerText =  localStorage.getItem('UName');
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
/**
 * [condicional destruye la session]
 */
if(isset($_POST['temp'])){
if (!isset($_POST['sub2'])) {
  $location = "location: /index.php";
  session_destroy();
  header($location);
}}
?>