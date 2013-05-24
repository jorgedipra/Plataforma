<script>
$(document).ready(function() {

  $stadTab=localStorage.getItem('Mensaje');

  if($stadTab=="on"){
     // Insertar();
  }else if($stadTab=="off"){
    //alert("enlinea");//temp
    ClUser();
  }else{
  	Start();//conexion local
  }

});

function Insertar(){

var Apodo = "fenix";
var Codigo = 8;
var FechaN = "05/05/2013";
var Name = "Usu";
var Correo = "felipe@h.com";
var Estado="On";
var Url= "img/user/010001.jpg";

if (!!Codigo && !!Apodo){
var sql = "INSERT INTO ProUsuarios (UserCodigo, UserApodo, UserFechaN, UserName, UserCorreo, UserEstado, UserUrl) "+
          "values (?,?,?,?,?,?,?)";
  db.transaction(
    function(tx){
      tx.executeSql(sql, [Codigo, Apodo, FechaN, Name, Correo, Estado, Url],
        function(tx, result){
         //alert('Ejecución correcta'); //temp
          valor = localStorage.getItem('Mensaje');//encapsula
          localStorage.setItem('Mensaje', 'off');  
          ClUser();         
        },
        function(tx, error){
          alert('Error I: ' + error.message);
        }
      );
    }
  );
}
else{
	alert("Datos Incorrectos");
}
} 

function ClUser(){ 

var sql = "SELECT * FROM ProUsuarios";
db.transaction(
  function(tx){
    tx.executeSql(sql, [],
      function(tx, result){
        
          if (result.rows.length > 0){
          var size = result.rows.length;
          var str = "";
          
            var product = result.rows.item(0);
            $Ucodigo=product.UserCodigo;
            $Uapodo=product.UserApodo;  
            $UFechaN=product.UserFechaN; 
            $UName = product.UserName;
            $UCorreo = product.UserCorreo;
            $UEstado = product.UserEstado;
            $UUrl = product.UserUrl;  

          
            document.getElementById('img').src=$UUrl; //img
            document.getElementById('Myuse').innerText = $Uapodo;//div
            document.getElementById('esta').innerText =  $UEstado;//div
            document.getElementById('US').innerText =  $UName;//div


          //alert('Ejecución correcta.\n'+ $Ucodigo +''+ $Uapodo);//temp

        }else{
          alert('Ejecución correcta.\nNo se han encontrado...');
        }


      },
      function(tx, error){
        alert('Error: ' + error.message);
      }
    );
  }
);

  }

function cerrar(){
   DropTabla();
    valor = localStorage.getItem('Mensaje');//encapsula
    localStorage.setItem('Mensaje', 'x');
   location.reload(true); 
}
</script>


<form action="index.php" method="GET">
    <input type="text" name="Name" value="" autocomplete="off" placeholder="Nombre de Cliente" required autofocus/>
    <input type="submit" id="Boton" onclick="Insertar();" value="enviar"><br>
</font>  

<a onclick="cerrar()">cerra</a>


<a onclick="Start();">iniciar</a>

<a   href="#" onclick="Insertar();">insertar</a>




