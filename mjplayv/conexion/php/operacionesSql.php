<?php 
include_once('conexionphp.php');
  class operaciones extends conexionphp 
   {    var $conexion=null;
        var $datos = null;
      function __construct(){
       $this->conectar = new conexionphp() ;
           $this->conexion = $this->conectar->conectar();
      }

      function insertar($sql){
        if($this->conexion->query($sql))
         {
              //echo "<script> alert('operacion exitosa ');</script>";
          }else{
            
            echo "<script> alert('Error ');</script>";
          }
      }

     function buscar($sql){
         if($this->conexion->query($sql))
          {
              $this->datos = $this->conexion->query($sql);
              return $this->datos;
          }
          else{           
            echo "<script> alert('Error ');</script>";
          }
         }
     

      public function __destruct()
         {
               $this->conectar->cerrar($this->conexion);
         }

   }
?>


