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
function ClUser(){ 
            document.getElementById('img').src=localStorage.getItem('UUrl'); //img
            document.getElementById('Myuse').innerText = localStorage.getItem('Uapodo');//div
            document.getElementById('esta').innerText =  localStorage.getItem('UEstado');//div
            document.getElementById('US').innerText =  localStorage.getItem('UName');//div
}
function cerrar(){
    localStorage.setItem('Mensaje', 'off');
    location.reload(true); 
    localStorage.setItem('UEstado', '');
    location.href='index.php';
}
