<?php
 session_start();
 include_once ('../recursos/info.php');//se llama la informacion de la pagina
 include_once('../conexion/php/operacionesSql.php');
?>
<link rel="stylesheet" href="css/style.css">
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/jquery-ui.js"></script>
<script src="../script/script.js"></script>
<script src="script/inputScrtip.js"></script>
</head>
<body>
 <?php
$objoper = new operaciones();
  function encrypt($string, $key) {
   $result = '';
   for($i=0; $i<strlen($string); $i++) {
      $char = substr($string, $i, 1);
      $keychar = substr($key, ($i % strlen($key))-1, 1);
      $char = chr(ord($char)+ord($keychar));
      $result.=$char;
   }
   return base64_encode($result);
}

if(isset($_POST['Apodo1'])){
     
  $Password=$_POST['Password1'];
  $cadena_encriptada = encrypt($Password,"Mjplay");

   $sql = "SELECT * FROM usuario WHERE UsrAlias ='".$_POST['Apodo1']."' and UsrClave=PASSWORD('".$cadena_encriptada."')";
  $result = $objoper->buscar($sql);

 if ($result) {
     echo "<script>
     $(document).ready(function() {   
        if(localStorage.getItem('USEstado')=='In'){        
         INGe(); 
        }else if(localStorage.getItem('USEstado')=='Es'){        
         ESPe();  
        }else{          
          INGe();   
        } 
      function ESPe(){
     $('#err').html('*Usuario o contraseña Incorrectos');
      }
      function INGe(){
     $('#err').html('*Invalid UserName or Password');
      }
     });
     </script>";
 }

 while($res = $result->fetch_assoc())
 {
      $_SESSION['usuario']=$res['UsrAlias'];
      $_SESSION['idioma']=$res['IdiomaId'];
      $_SESSION['imagen']=$res['UsrImagen'];
      echo "
     <script>  
            localStorage.setItem('Uapodo', '".$res['UsrAlias']."');             
            localStorage.setItem('UName', 'Geek');          
            localStorage.setItem('UEstado', 'On');           
            localStorage.setItem('UUrl', '".$_SESSION['imagen']."'); 
            localStorage.setItem('Mensaje', 'On'); 

       if(localStorage.getItem('Mensaje')=='On'){
        location.href='../index.php';
    }           
</script>
"; 
 }  
}

if(isset($_POST['Name'])){

 $Password=$_POST['Password'];
 $cadena_encriptada = encrypt($Password,"Mjplay");
 $sql="INSERT INTO Usuario(UsrNombre,UsrImagen,UsrFechaN,UsrAlias,UsrClave,UsrCorreo,estado,RolId,IdiomaId)VALUES('".$_POST['Name']."','nada',STR_TO_DATE('".$_POST['Date']."','%m/%d/%Y'),'".$_POST['Apodo']."',PASSWORD('".$cadena_encriptada."'),'".$_POST['Email']."',0,1,'".$_POST['ES']."')";
 $objoper->insertar($sql);
}

if(isset($_POST['ES'])){
  if ($_POST['ES']=="On") { 
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