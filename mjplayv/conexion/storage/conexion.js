
$version="1.0";
$database="SqlStorage";
$dbSize=5*1024*1024;//5MB
$name="BDMJPlay";

var db = openDatabase($database, $version,$name,$dbSize);

function Start(){
    DropTabla();
		CreateTabla();
}

function CreateTabla(){

var sql = "CREATE TABLE IF NOT EXISTS ProUsuarios("+
	//"id     	REAL UNIQUE,"+
	"UserCodigo INTEGER UNIQUE,"+
	"UserApodo 	TEXT,"+ 
	"UserName 	TEXT,"+ 
	"UserCorreo	TEXT,"+ 
  "UserFechaN DATE,"+ 
	"UserEstado TEXT,"+
  "UserUrl    TEXT"+ 
	//"UserPass 	TEXT"+
	")";

valor = localStorage.getItem('Mensaje');//encapsula
db.transaction(
  function(tx){
    tx.executeSql(sql, [],
      function(tx, result){
        //alert('Tabla creada');//temp
        localStorage.setItem('Mensaje', 'on');
      },
      function(tx, error){
        alert('Oppps C: ' + error.message);
        localStorage.setItem('Mensaje', 'x');
      }
    );
  }
);

}
function DropTabla(){
	var sql = "DROP TABLE IF EXISTS ProUsuarios;";
db.transaction(
  function(tx){
    tx.executeSql(sql, [],
      function(tx, result){
       // alert('Tabla DESTRUIDA');//temp
      },
      function(tx, error){
        alert('Oppps D: ' + error.message);
      }
    );
  }
);
}
 