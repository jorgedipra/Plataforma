<?php
session_start();
 include_once ('../../recursos/info.php');//se llama la informacion de la pagina
 if (isset($_SESSION['Wusuario'])) {
?>
<link rel="stylesheet" href="../../css/style.css">
<link rel="stylesheet" href="css/style.css">
<script src="../../js/jquery-1.9.1.min.js"></script>
<script src="../../js/jquery-ui.js"></script>
<script src="../../script/script.js"></script>
<script src="script/script.js"></script>
<title>MJplayV</title>
</head>
<body>
 <?php
include_once('../../conexion/php/operacionesSql.php');
$objoper = new operaciones();
if(isset($_FILES['foto']['tmp_name'])){
if($_FILES['foto']['tmp_name']!=""){
    $prefijo = substr(md5(uniqid(rand())),0,6);
    $destino =  "../../img/user/".$prefijo."_".$_FILES['foto']['name'];
    $destinoF = '/img/user/'.$prefijo."_".$_FILES['foto']['name'];
    copy($_FILES['foto']['tmp_name'],$destino);
    $sql = "UPDATE usuario SET UsrImagen = '".$destinoF."', UsrNombre='".$_POST['nombre']."',UsrAlias='".$_POST['Alias']."',UsrCorreo='".$_POST['correo']."', IdiomaId='".$_POST['idioma']."' WHERE UsrId='".$_SESSION['Wusuario']."'";  
    $objoper->insertar($sql);
    $_SESSION['imagen']= $destinoF;
   echo "<script>
    localStorage.setItem('UUrl', '".$_SESSION['imagen']."');
    localStorage.setItem('UNameA', '".$_POST['nombre']."'); 
    localStorage.setItem('Uapodo', '".$_POST['Alias']."'); 
    localStorage.setItem('UCorre', '".$_POST['correo']."');      
    localStorage.setItem('Uidioma', '".$_POST['idioma']."');            
    </script>";
  }  
} 
if(isset($_POST['nombre'])){
    $sql = "UPDATE usuario SET  UsrNombre='".$_POST['nombre']."',UsrAlias='".$_POST['Alias']."',UsrCorreo='".$_POST['correo']."', IdiomaId='".$_POST['idioma']."' WHERE UsrId='".$_SESSION['Wusuario']."'";         
    $objoper->insertar($sql);
    echo "<script>  
    localStorage.setItem('UNameA', '".$_POST['nombre']."'); 
    localStorage.setItem('Uapodo', '".$_POST['Alias']."'); 
    localStorage.setItem('UCorre', '".$_POST['correo']."');       
    localStorage.setItem('Uidioma', '".$_POST['idioma']."');             
    </script>"; 
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
 }else{
    header('Location: ../../index.php');
 }      
?>
</body>
</html>