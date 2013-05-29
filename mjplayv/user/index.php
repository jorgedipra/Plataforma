<?php
 include_once ('../recursos/info.php');//se llama la informacion de la pagina
?>
<link rel="stylesheet" href="css/style.css">
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/jquery-ui.js"></script>
<script src="../script/script.js"></script>
<script src="script/inputScrtip.js"></script>
</head>
<body>
 <?php
if(isset($_POST['ES'])){

if ($_POST['ES']=="On") {

echo "
<script>  
            localStorage.setItem('Ucodigo', 8);
            localStorage.setItem('Uapodo', '".$_POST['Apodo']."'); 
            localStorage.setItem('UFechaN', '05/05/2013');
            localStorage.setItem('UName', 'Git');
            localStorage.setItem('UCorreo', 'felipe@h.com'); 
            localStorage.setItem('UEstado', 'On');
            localStorage.setItem('UUrl', 'img/user/010001.jpg'); 
            localStorage.setItem('Mensaje', 'On'); 

if(localStorage.getItem('Mensaje')=='On'){
        location.href='../index.php';
}           
</script>
"; 
}
}
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
