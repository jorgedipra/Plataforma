<?php
 include_once ('../../recursos/info.php');//se llama la informacion de la pagina
?>
<link rel="stylesheet" href="../../css/style.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="css/style.css">
<script src="../../js/jquery-1.9.1.min.js"></script>
<script src="../../js/jquery-ui.js"></script>
<script src="../../script/script.js"></script>
<script src="script/script.js"></script>
</head>
<body>
 <?php 
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