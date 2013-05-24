<!--
 ____________________________________________________________________
|                                                                    |
|      NAME : MJPlay-v WEB                                           |
|    AUTHOR : Jorge Diaz{@jorgedipra}Julian Ortiz{@}                 |
|      DATE : 2013                                                   |
|   LICENSE : open                                                   |
|     EMAIL : majovideoplay@gmail.com                                |
|____________________________________________________________________|

-->
<?php
 include_once ('recursos/info.php');//se llama la informacion de la pagina
?>
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="script/script.js"></script>
<script src="conexion/storage/conexion.js"></script>
<script type="text/javascript">
</script>

</head>
<body>
 <?php

    include "conexion/storage/conexion.php";   
 
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

