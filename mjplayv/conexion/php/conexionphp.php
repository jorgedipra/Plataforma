<?php 

	class conexionphp 
	  {
	  
	  	 function conectar(){
	  	// $db = new mysqli("mysql.hostinger.co","u868214885_mjpla","1234567","u868214885_mjpla");
	  	// $db = new mysqli("localhost","root","123","mjplay");
	  	 $db = new mysqli("localhost","mjplay","123","mjplay");

	  	 	    return $db;
	  	 	  
	  	 }
	  	 function cerrar($db=""){
	  	 		$db->close();
	  	 }
	  }
?>