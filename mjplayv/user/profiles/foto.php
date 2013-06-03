<?php 
print_r($_POST);
  echo "hola";
   echo $nombre =  $_FILES['foto']['name'];	
   echo  $error = $_FILES['foto']['error'];		
if(isset($_POST['foto']['tmp_name'])){
  

		//nombre con el que lo subió el usuario
   echo  $tipo =  $_FILES['foto']['type'];			//tipo de archivo (jpg,gif,rar,txt,etc)
   echo  $tamano = $_FILES['foto']['size'];			//tamaño del archivo en Kb; 1024Kb = 1Mb
   echo  $error = $_FILES['foto']['error'];			//si apareció algún error en la subida
   echo $nombre_temporal = $_FILES['foto']['tmp_name'];	//Nombre temporal que se le asigna al archivo cuando sube a tu servidor


}

?>
