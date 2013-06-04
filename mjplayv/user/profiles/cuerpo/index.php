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
    navegacion
  </nav>
  <section>
    <div class="target">
  <div class="glass"></div>  
        <article class="body">


                <h2>Examples</h2>
                  <form action="index.php" method="post" enctype="multipart/form-data">
                 
                 Nombre:<input name="nombre" type="text" value=""/>
                  <br>
                  Elegir una Imagen:<input name="foto" type="file"  value=""/>
                  <br>
                 
                  Direccion Correo Electronico:<input name="correo" type="text" value=""/>
                  <br>
                  Idioma:<select name="idioma">
                  <option value="1">
                      Ingles
                  </option>
                  <option value="2">
                      Espaniol
                  </option>
                  </select>
                  <br>
                  <input value="Subir" type="submit" >
                </form>

        </article>    
  </div>
  </div>
  </section>