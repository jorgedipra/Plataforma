<?php
 session_start();
 include_once ('../recursos/info.php');//se llama la informacion de la pagina
?>
<link rel="stylesheet" href="../css/style.css"><!--se llama el stilo-->
<link rel="stylesheet" href="../css/stylehome.css">
<link rel="stylesheet" href="css/sytileNoticias.css">
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/jquery-ui.js"></script>
<script src="../script/scriptp.js"></script>
<script src="../script/scriptpins.js"></script>
<script src="script/sytileNoticias.js"></script>
<script src="http://w.sharethis.com/button/buttons.js"> </script> 
<script>stLight.options ({editor: "98a0c813-783d-461a-A536-cc46a03f65ee", doNotHash: false, DoNotCopy: false, hashAddressBar: false}); 
</script>
<title>MJplayV Noticias</title>
</head>
<body>
 <?php
   include "../conexion/storage/conexion.php"; //incluimos el archivo de conexion de storage
   include "../conexion/php/operacionesSql.php";
   include "script/script.php";
    $view= new stdClass(); 
    $view->disableLayout=false;
     /**
     * [$view->objeto de validación]
     * @var boolean
     */
     $consulta = "SELECT ArtNombre,ArtResumen,ArtContenido,ArtFecha,ArtReferencias,ArtImagen,UsrAlias,UsrImagen FROM (articulo INNER JOIN artcolaborador)INNER JOIN usuario WHERE articulo.ArtId = artcolaborador.ArtId and artcolaborador.UsrId = usuario.UsrId ORDER BY(ArtFecha)desc";
     $ultimanoticia = "SELECT ArtNombre,ArtResumen,ArtContenido,ArtFecha,ArtReferencias,ArtImagen,UsrAlias,UsrImagen FROM (articulo INNER JOIN artcolaborador)INNER JOIN usuario WHERE articulo.ArtId = artcolaborador.ArtId and artcolaborador.UsrId = usuario.UsrId and articulo.ArtId = (SELECT MAX(ArtId) FROM articulo) ORDER BY(ArtFecha)desc;";

     $objopera = new  operaciones();
     $resultado = $objopera->buscar($consulta);
     $ultNoticia =$objopera->buscar($ultimanoticia);
    if ($view->disableLayout==false)
    {
      include_once ('cuerpo/index.php');//se llama el cuerpo
    }    
?>
</body>
</html>