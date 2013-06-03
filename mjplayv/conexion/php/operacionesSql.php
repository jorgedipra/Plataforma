<?php 
include_once('conexionphp.php');
  class operaciones extends conexionphp 
   {    var $conexion=null;
	    function __construct(){
		   $this->conectar = new conexionphp() ;
           $this->conexion = $this->conectar->conectar();
	    }

      function insertar($sql){
        if($this->conexion->query($sql))
         {
              echo "<script> alert('insertado correctamente');</script>";
          }else{
            
            echo "<script> alert('Error ');</script>";
          }

      }
     function buscar($sql){
        
     }

	    public function __destruct()
         {
               $this->conectar->cerrar($this->conexion);
         }

   }
?>


