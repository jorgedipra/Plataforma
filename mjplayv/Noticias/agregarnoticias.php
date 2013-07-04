<?php
 session_start();
 include_once ('../recursos/info.php');//se llama la informacion de la pagina
?>
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
     $resul="";
      $objopera = new  operaciones();
      $categorias = "SELECT * FROM categoria";
      $resul =  $objopera->buscar($categorias);
    

      $destinoF="";
     if(isset($_POST['artNombre']))
       {

         if($_FILES['artimagen']['tmp_name']!=""){
    $prefijo = substr(md5(uniqid(rand())),0,6);
    $destino =  "../img/noticias/".$prefijo."_".$_FILES['artimagen']['name'];
    $destinoF = '/img/noticias/'.$prefijo."_".$_FILES['artimagen']['name'];
    copy($_FILES['artimagen']['tmp_name'],$destino);  }
    ///////////////////////////////////////////////////////////////////////////////

        $maxid ="SELECT MAX(ArtId) as maxid FROM articulo";

         $query="INSERT INTO articulo(ArtNombre,ArtContenido,ArtFecha,ArtReferencias,ArtImagen,sintexis)
         VALUES('".$_POST['artNombre']."','".$_POST['artreacontenido']."',SELECT SYSDATE() ,'".$_POST['artNombre']."','".$_POST['artreferencias']."','".$destinoF."','".$_POST['artsintexis']."')";
         echo $query;
         //////////////////////////
          
          $objopera->insertar($query);
          $resultado = $objopera->buscar($maxid);
          $res= $resultado->fetch_object()->maxid;
          echo $res;

                 $query2="INSERT INTO 
                  ctgarg(ArtId,CtgId)VALUES
                  ('".$res."','".$_POST['categoria']."');";
                  echo $query2;

                $query3="INSERT INTO artcolaborador(ArtId,UsrId,colaboradorPermiso)
                VALUES('".$res."','".$_SESSION['Wusuario']."','0');";
                echo $query3;


                 $objopera->insertar($query2);
                $objopera->insertar($query3);

       }
   
    if ($view->disableLayout==false)
    { 
      include_once ('cuerpo/agregar.php');//se llama el cuerpo
    }    
?>
</body>
</html>