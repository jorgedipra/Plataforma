<?php
session_start();
 include_once ('../../recursos/info.php');//se llama la informacion de la pagina
?>
<link rel="stylesheet" href="../../css/style.css">
<script src="../../js/jquery-1.9.1.min.js"></script>
<script src="../../js/jquery-ui.js"></script>
<script src="../../script/script.js"></script>
</head>
<body>
 <?php


include_once('../../conexion/php/operacionesSql.php');
$objoper = new operaciones();
if(isset($_FILES['foto']['tmp_name'])){
 $prefijo = substr(md5(uniqid(rand())),0,6);
    $destino =  "../../img/user/".$prefijo."_".$_FILES['foto']['name'];
    $destinoF = '/www/Plataforma/mjplayv/img/user/'.$prefijo."_".$_FILES['foto']['name'];
    copy($_FILES['foto']['tmp_name'],$destino);
    $sql = "UPDATE usuario SET UsrImagen = '".$destinoF."' WHERE UsrAlias='". $_SESSION['usuario']."'";
    $objoper->insertar($sql);
    $_SESSION['imagen']= $destinoF;
    echo "<script>localStorage.setItem('UUrl', '".$_SESSION['imagen']."');</script>";
}
 
echo'<script src="../../conexion/storage/conexion.js"></script>';

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