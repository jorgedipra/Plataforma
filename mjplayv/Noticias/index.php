<?php
 session_start();
 include_once ('../recursos/info.php');//se llama la informacion de la pagina
?>
<link rel="stylesheet" href="../css/style.css"><!--se llama el stilo-->
<link rel="stylesheet" href="../css/jquery-ui.css" /><!--se llama el stilo ui-->
<link rel="stylesheet" href="../css/stylehome.css">
<link rel="stylesheet" href="css/sytileNoticias.css">
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/jquery-ui.js"></script>
<script src="../script/scriptp.js"></script>
<script src="../script/scriptpins.js"></script>
</head>
<body>
 <?php
   include "../conexion/storage/conexion.php"; //incluimos el archivo de conexion de storage
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