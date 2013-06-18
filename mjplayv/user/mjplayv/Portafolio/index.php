<?php
 include_once ('../recursos/info.php');//se llama la informacion de la pagina
?>
<script src="js/jquery.js"></script>
<script src="script/scriptPortafolio.js"></script>
<link href="css/sytilePortafolio.css" rel="stylesheet" />
</script>
</head>
<body>
   <?php
    $view= new stdClass(); 
    $view->disableLayout=false;
     /**
     * [$view->objeto de validaci贸n]
     * @var boolean
     */
    if ($view->disableLayout==false)
    {
     include_once ('cuerpo/Portafolio.php');//se llama el cuerpo de Cliente
    }
   ?>
</body>
</html>
