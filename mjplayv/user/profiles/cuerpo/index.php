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
   <a href="../../"><span>::MJplay::</span><br><sup id="US">Temp</sup><p id="Myuse">User</p><hr></a> 
<form  name="onf" action="index.php" method="post">   
<input type="hidden" name="temp" value="On" /> 
<script>
if(localStorage.getItem('UEstado')=='On'){
document.write('<a href="javascript:document.onf.submit();" onclick="cerrar()" ><article id="cerrar"><div id="ajaxloader"></div><div id="ajaon"><section id="esta"></section></div><article></a>');
}else{
document.write('<a href="../../user/index.php" onclick="cerrar()" ><article id="cerrar"><div id="ajaxloader"></div><div id="ajaon"><section id="esta">log</section></div><article></a>');
}
</script>
</from>
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
                  <input name="nombre" id="Nombre" type="text" value="" placeholder="Name"/>                                    
                  <div id="Aliasf">
                     Alias:
                  </div>  
                  <div id="inpAlias">                                
                  <input name="Alias" id="Alias" type="text" value="" placeholder="Username"/>
                  </div> 
                  <div id="Diereccionf">
                    Correo:
                  </div>                   
                  <input name="correo" id="Correo" type="text" value="" placeholder="Correo"/>
                  <div id="passf">
                   Nueva Contraseña:
                  </div>                   
                 <input id="pass" name="pass" type="button" value="Cambiar contraseña" onclick=" location.href='../system/' "/>     
                 <label>                
                  <select name="idioma">
                    <script type="text/javascript">
                    if (localStorage.getItem('Uidioma')=='1') {
                      document.write("<option value='1'selected>Espa&ntilde;ol</option>");
                      document.write("<option value='2'>Ingles</option>");
                    }else{
                      document.write("<option value='2'selected>English</option>");
                      document.write("<option value='1'>Spanish</option>");
                    }
                    </script>                  
                  </select>
                </label>
                  <div id="Idiomaf">
                   Idioma:
                  </div>                   
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
                    <input type="button" id="carg" value="Cargar" class="browseButton" />  
                    <input type="file" size="1" name="foto"  class="theFileInput"  value="" />
                  </div>               
          </article>  
      <div id="sub">
        <div class="glass"></div>  
              <article class="body">  
                     <button id="btn" class="btn" name="sub2" value="0" type="submit">Enviar</button>
                     <input type="hidden" name="RE" value="On" /> 
              </article>    
        </div>
      </div> 
    </div>
  </div>           
</form>
  </section> 
