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
  <div class="glass droppable"></div>  
    <article class="body" >

     <div>13/14/2013</div>
      <h3>google glass <h3>
        <img src="../img/userdefaul.png">
        <label>Roberto</label>
      <figure>
          <img width="250px" src="../img/noticias/GoogleGlass_15.jpg">
      <figure>
      <div>
        Tras los recelos levantados por una posible vulneración de la privacidad, Google no permitirá el uso de aplicaciones con reconocimiento facial en Google Glass. La compañía ha actualizado las políticas de desarrollo para sus gafas.
      </div>
      <a href="#">vermas</a>  
      <div>contenido<div>
      <div>Referencias</div>

    </article>    
  </div>
</div>
<div id="baner" class="target">
  <div class="glass"></div>  
    <article class="body">
      <h4>Ultimas Noticias</h4>

      <?php for ($i=0; $i < 4; $i++) { 
      ?>
      <section class="miniNot draggable">
        <div class="minNotfech">13/14/2013</div>
        <div class="minNotTi"><h3>google glass<h3></div>
        <figure class="minNotFig">
          <img src="../img/noticias/GoogleGlass_15.jpg">
        <figure>
        <div class="minNotTex">
          <p>Tras los recelos levantados por una posible vulneración de la privacidad, Google no...</p><a class="minNotMas" href="#">SaberMas+</a>
        </div>
        <article class="miniNotRed"> face  plus tw</article>
        <label class="miniNotNam">Roberto</label>
        <div class="minNotser"><img src="../img/userdefaul.png"></div>
      </section>
       <?php 
        } 
       ?>
    </article>    
</div>
</div>

</section>  