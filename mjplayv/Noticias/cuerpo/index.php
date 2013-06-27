<body>
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
          <article class="NotRed"> face  plus tw</article>
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
        <div id="Notfecha">fecha</div>
        <a href="#" id="NotuserNo">nombre</a>
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
    <?php 
$i=1;      
      while($res =  $resultado->fetch_assoc()){
         ?>
            <section class="miniNot draggable" id="p<?php echo$i; ?>">
        <div class="minNotfech" id="minNotfech<?php echo$i; ?>">
          <?php echo $res['ArtFecha']; ?>
        </div>
        <div class="minNotTi"><h3><?php echo utf8_encode($res['ArtNombre']);?><h3></div>
        <figure class="minNotFig">
          <img src="<?php echo $res['ArtImagen']; ?>">
        <figure>
        <div class="minNotTex">
          <p><?php echo utf8_encode($res['ArtResumen']); ?></p>  
          <a class="minNotMas" href="<?php echo $res['ArtReferencias']; ?>">SaberMas+</a>
        </div>
        <article class="miniNotRed"> face  plus tw</article>
        <label class="miniNotNam" id="miniNotNam<?php echo$i; ?>"><?php echo  utf8_encode($res['UsrAlias']); ?></label>
        <div class="minNotser">
          <img src="<?php echo $res['UsrImagen']; ?>">
        </div>
        <div id="inputcont">
          <input style="display: none;" class="NTitulo<?php echo$i; ?>" type="text" value="<?php echo$res['ArtNombre'];?>"/>
          <input style="display: none;" class="NImg<?php echo$i; ?>" type="text" value="<?php echo $res['ArtImagen']; ?>"/> 
          <input style="display: none;" class="NIusermg<?php echo$i; ?>" type="text" value="<?php echo$res['UsrImagen']; ?>"/>   
          <input style="display: none;" class="NTexto<?php echo$i; ?>" type="text" value="
            <?php echo$res['ArtContenido']; ?>" />           
          <input style="display: none;" class="NTextoT<?php echo$i; ?>" type="text" value='<?php echo  utf8_encode($res['ArtContenido']); ?>' /> 
             
        </div>
      </section>
         <?php
          $i++;
      }
      ?>
     
    </article>    
</div>
</div>
</section> 
</body>
</html>