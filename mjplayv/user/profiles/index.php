<?php
session_start();
 include_once ('../../recursos/info.php');//se llama la informacion de la pagina
?>
<link rel="stylesheet" href="../../css/style.css">
<link rel="stylesheet" href="css/style.css">
<script src="../../js/jquery-1.9.1.min.js"></script>
<script src="../../js/jquery-ui.js"></script>
<script src="../../script/script.js"></script>
<script src="script/script.js"></script>
</head>
<body>
 <?php

include_once('../../conexion/php/operacionesSql.php');
$objoper = new operaciones();
if(isset($_FILES['foto']['tmp_name'])){

if($_FILES['foto']['tmp_name']!=""){
   echo "hola";
 $prefijo = substr(md5(uniqid(rand())),0,6);
    $destino =  "../../img/user/".$prefijo."_".$_FILES['foto']['name'];
    $destinoF = '/www/Plataforma/mjplayv/img/user/'.$prefijo."_".$_FILES['foto']['name'];

    copy($_FILES['foto']['tmp_name'],$destino);
    $sql = "UPDATE usuario SET UsrImagen = '".$destinoF."', UsrNombre='".$_POST['nombre']."',UsrAlias='".$_POST['Alias']."',UsrCorreo='".$_POST['correo']."', IdiomaId='".$_POST['idioma']."' WHERE UsrId='".$_SESSION['Wusuario']."'";
  
    $objoper->insertar($sql);
    $_SESSION['imagen']= $destinoF;
   echo "<script>
    localStorage.setItem('UUrl', '".$_SESSION['imagen']."');
    localStorage.setItem('UNameA', '".$_POST['nombre']."'); 
    localStorage.setItem('Uapodo', '".$_POST['Alias']."'); 
    </script>";

  }  
} 
if($_POST['nombre']){

    if($_POST['pass']){
         $sql = "UPDATE usuario SET  UsrNombre='".$_POST['nombre']."',UsrAlias='".$_POST['Alias']."',UsrCorreo='".$_POST['correo']."', IdiomaId='".$_POST['idioma']."' WHERE UsrId='".$_SESSION['Wusuario']."'";
  
    $objoper->insertar($sql);
    echo "<script>localStorage.setItem('UUrl', '".$_SESSION['imagen']."');</script>"; 
    }else{
            $sql = "UPDATE usuario SET  UsrNombre='".$_POST['nombre']."',UsrAlias='".$_POST['Alias']."',UsrCorreo='".$_POST['correo']."', IdiomaId='".$_POST['idioma']."' WHERE UsrId='".$_SESSION['Wusuario']."'";
         
          $objoper->insertar($sql);
          echo "<script>localStorage.setItem('UUrl', '".$_SESSION['imagen']."');</script>"; 
    }

  
}

   include "../../conexion/storage/conexion.php";

    $view= new stdClass(); 
    $view->disableLayout=false;
     /**
     * [$view->objeto de validación]
     * @var boolean
     */
    if ($view->disableLayout==false)
    {
      include_once ('cuerpo/index.php');//se llama el cuerpo
    }
?>
</body>
</html>