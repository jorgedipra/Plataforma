<div id="outer-circle">
  <div id="inner-circle">
    <div id="center-circle">
      <div id="content">
      </div>
    </div>
  </div>
</div>
  <a id="h1" href="../">
    <img src="../img/h1.png">
    <h1>MJPLay-V</h1>
    <h2>Noticias</h2>
  </a>  
</div>  
<header id="login">
   <a href="#"><img name="user" id="img" src="../img/userdefaul.png"/></a>
   <a href="#"><span>::welcome::</span><br><sup id="US">Temp</sup><p id="Myuse">User</p><hr></a>
<form  name="onf" action="index.php" method="post">   
<input type="hidden" name="temp" value="On" /> 
<script>
if(localStorage.getItem('UEstado')=='On'){
document.write('<a href="javascript:document.onf.submit();" onclick="cerrar()" ><article id="cerrar"><div id="ajaxloader"></div><div id="ajaon"><section id="esta"></section></div><article></a><a id="EditP" href="../user/profiles/">::Editar:: Perfil</a>');
}else{
document.write('<a href="user/index.php" onclick="cerrar()" ><article id="cerrar"><div id="ajaxloader"></div><div id="ajaon"><section id="esta">log</section></div><article></a>');
}
</script>
</from>
  </header>
<aside>    
</aside>
<nav>
  <a id="Port" href="#p">Aprendizaje</a>
  <a id="Face" href="#f">Multimedia</a>
  <a id="Twt" href="#p">Portafolio</a>
  <a id="Goo" href="#g">Juegos</a> 
  <a id="Plus" href="../">Home</a> 
</nav>
<section>
<div id="noticia" class="target">
  <div class="glass droppable"> 
    <article class="body" >

        <h2 id="Nottit">Titulo</h2>      
        <hr id="Nottithr">
        <section id="Nociart">
        <figure>
          <img  id="Notimg" src="http://www.enter.co/custom/uploads/2012/08/cook_660-300x225.jpg">
        <figure>
        <p id="NotPP">texto1 idea principal
        texto texto texto texto texto texto texto texto texto texto
        texto texto texto texto texto texto texto texto texto texto
        texto texto texto texto texto texto texto texto texto texto
        texto texto texto texto texto texto texto texto texto texto
        texto texto texto texto texto texto texto texto texto texto
       </p>
       <p id="NotPt">texto2
        texto texto texto texto texto texto texto texto texto texto
        texto texto texto texto texto texto texto texto texto texto
        texto texto texto texto texto texto texto texto texto texto
        texto texto texto texto texto texto texto texto texto texto
        texto texto texto texto texto texto texto texto texto texto
       </p>
       <div id="Notuser">
        <div id="Notfecha">13/14/2013</div>
        <a href="#" id="NotuserNo">Roberto</a>
        <a href="#" ><img id="Notuserimg" src="../img/userdefaul.png"></a>
       </div>
      </section>
    </article>  
    </div>   
  </div>
</div>

<div id="baner" class="target">
  <div class="glass"></div>  
    <article class="body">
      <h4>Ultimas Noticias</h4>

      <?php for ($i=0; $i < 1; $i++) { 
      ?>
      <section class="miniNot draggable">
        <div class="minNotfech">13/14/2013</div>
        <div class="minNotTi"><h3>Google glass<h3></div>
        <figure class="minNotFig">
          <img src="../img/noticias/GoogleGlass_15.jpg">
        <figure>
        <div class="minNotTex">
          <p>Tras los recelos levantados por una posible vulneración de la privacidad, Google no...
          </p>

          <a class="minNotMas" href="#">SaberMas+</a>
        </div>
        <article class="miniNotRed"> face  plus tw</article>
        <label class="miniNotNam">Roberto</label>
        <div class="minNotser"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/211171_227376447368257_1323865542_q.jpg"></div>
        <div id="inputcont">
          <input style="display: none;" class="NTitulo" type="text" value="Google glass"/>
          <input style="display: none;" class="NImg" type="text" value="../img/noticias/GoogleGlass_15.jpg"/>          
          <input style="display: none;" class="NTexto" type="text" value="
            Tras los recelos levantados por una posible vulneración de la privacidad, Google no permitirá el uso de aplicaciones con reconocimiento facial en Google Glass. La compañía ha actualizado las políticas de desarrollo para sus gafas.
            " />           
          <input style="display: none;" class="NTextoT" type="text" value='"Como hemos avisado desde hace varios años, no vamos a añadir funciones de reconocimiento facial en nuestros productos sin tener fuertes protecciones de privacidad.  Con esto en mente, no aprobaremos ningun Glassware de reconocimiento facial en este momento", ha dicho la compañía en un comunicado.
  
Además, no se permitirá a los desarrolladores desactivar la pantalla de Google Glass mientras se graba en video o se realizan fotografías. Esto surge en respuesta a la preocupación de que alguien con unas Google Glass pueda grabar o hacer fotos sin que nadie se dé cuenta.

"Nuestro Explorer program hace que los usuarios participen activamente en la evolución del dispositivo Glass antes de un lanzamiento general para consumidores. Por ello, hemos actualizado nuestras políticas de desarrollo. Esperamos aprender más de nuestros usuarios, y evolucionar con nuestras políticas en las próximas semanas y meses"' /> 
             
        </div>
      </section>
       <?php 
        } 
       ?>
    </article>    
</div>
</div>

</section>  