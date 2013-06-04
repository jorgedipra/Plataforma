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
                  <form action="foto.php" method="post" enctype="multipart/form-data">
                  <input name="foto" type="file"  value=""/>
                  <input name="dato" type="text" value=""/>
                  <input value="Subir" type="submit" >
                </form>
        </article>    
  </div>
  </div>
  </section>