<div id="outer-circle">
        <div id="inner-circle">
          <div id="center-circle">
            <div id="content">
            </div>
          </div>
        </div>
      </div>
      <h1>User</h1>
</div>  
 <header id="login">
   <a href="#"><img name="user" id="img" src="../../img/userdefaul.png"/></a>
   <a href="#"><span>::welcome::</span><br><sup id="US">Temp</sup><p id="Myuse">User</p><hr></a> 
<script>
if(localStorage.getItem('UEstado')=='On'){
document.write('<a href="#" onclick="cerrar()" ><article id="cerrar"><div id="ajaxloader"></div><div id="ajaon"><section id="esta"></section></div><article></a>');
}else{
document.write('<a href="../../user/index.php" onclick="cerrar()" ><article id="cerrar"><div id="ajaxloader"></div><div id="ajaon"><section id="esta">log</section></div><article></a>');
}
</script>
  </header>
  <aside>

  </aside>
  <nav>
    
  </nav>
  <section>
<form   id="formElem" name="formElem"  action="index.php" method="post" enctype="multipart/form-data">
<div id="Cuer" class="target">
  <div class="glass"></div>  
        <article id="CurF" class="body">
                 <h2>User</h2>
                  <div id="Namef">
                     Nombre:
                  </div>                 
                  <input name="nombre" type="text" value="" placeholder="Name"/>                  
                  <div id="Aliasf">
                     Alias:
                  </div>  
                  <div id="inpAlias">                                
                  <input name="Alias" id="Alias" type="text" value="" placeholder="Username"/>
                  </div> 
                  <div id="Diereccionf">
                    Correo:
                  </div>                   
                  <input name="correo" type="text" value="" placeholder="Correo"/>
                  <div id="passf">
                   Contraseña:
                  </div>                   
                  <input name="pass" type="password" value="" placeholder="Contraseña"/>
                  <div id="Idiomaf">
                   Idioma:
                  </div> 
                  <label>                
                  <select name="idioma">
                  <option value="1">
                      Ingles
                  </option>
                  <option value="2">
                      Espaniol
                  </option>
                  </select>
                </label>
        </article>    
  </div>
</div>      

<div id="Imgen" class="target">
  <div class="glass"></div>  
        <article class="body">
                  <div id="imgC">
                  <img  id="imgCC" src="../../img/userdefaul.png">
                  </div>
                 <label id="Limg">Cambiar Imagen:</label> 
                <div class="styleFileInput">        
                  <input type="button" value="Subir" class="browseButton" />  
                  <input type="file" size="1" name="foto"  class="theFileInput"  value="" />
                </div>               
        </article>  
<div id="sub">
  <div class="glass"></div>  
        <article class="body">

          <input type="submit" id="usum" value="Actualizar"/>        
              <div id="diamond-shield">   
              <section id="act">Actulizar</section>             
              </div>
        </article>    
  </div>
</div> 

  </div>
</div>    

            
                </form>
  </section>