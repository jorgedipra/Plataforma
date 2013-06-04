<?php 
	class conexionphp 
	  {
	  	 function conectar(){
	  	 	$db = new mysqli("localhost","mjplay","123","mjplay");
	  	 	  //	$db = new mysqli("localhost","root","123","mjplay");
	  	 	    return $db;
	  	 }
	  	 function cerrar($db=""){
	  	 		$db->close();
	  	 }
	  }
?>