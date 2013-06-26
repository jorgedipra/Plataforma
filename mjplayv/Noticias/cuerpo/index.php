
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

$TextoT='"Como hemos avisado desde hace varios años, no vamos a añadir funciones de reconocimiento facial en nuestros productos sin tener fuertes protecciones de privacidad.  Con esto en mente, no aprobaremos ningun Glassware de reconocimiento facial en este momento", ha dicho la compañía en un comunicado.
  
Además, no se permitirá a los desarrolladores desactivar la pantalla de Google Glass mientras se graba en video o se realizan fotografías. Esto surge en respuesta a la preocupación de que alguien con unas Google Glass pueda grabar o hacer fotos sin que nadie se dé cuenta.

"Nuestro Explorer program hace que los usuarios participen activamente en la evolución del dispositivo Glass antes de un lanzamiento general para consumidores. Por ello, hemos actualizado nuestras políticas de desarrollo. Esperamos aprender más de nuestros usuarios, y evolucionar con nuestras políticas en las próximas semanas y meses"';

$Texto="Tras los recelos levantados por una posible vulneración de la privacidad, Google no permitirá el uso de aplicaciones con reconocimiento facial en Google Glass. La compañía ha actualizado las políticas de desarrollo para sus gafas.";

$Iusermg="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash4/211171_227376447368257_1323865542_q.jpg";

$Img="../img/noticias/GoogleGlass_15.jpg";
$Titulo="Google glats";
$miniNotNam="Roberto";
$minNotfech="13/14/2013";
$minNotTex="Tras los recelos levantados por una posible vulneración de la privacidad, Google no...";
$minURL="#";


      while($res =  $resultado->fetch_assoc()){
         ?>
            <section class="miniNot draggable" id="p<?php echo$i; ?>">
        <div class="minNotfech" id="minNotfech<?php echo$i; ?>">
          <?php echo $res['ArtFecha']; ?>
        </div>
        <div class="minNotTi"><h3><?php echo $res['ArtNombre'];?><h3></div>
        <figure class="minNotFig">
          <img src="<?php echo $res['ArtImagen']; ?>">
        <figure>
        <div class="minNotTex">
          <p><?php echo $res['ArtResumen']; ?></p>  
          <a class="minNotMas" href="<?php echo $res['ArtReferencias']; ?>">SaberMas+</a>
        </div>
        <article class="miniNotRed"> face  plus tw</article>
        <label class="miniNotNam" id="miniNotNam<?php echo$i; ?>"><?php echo $res['UsrAlias']; ?></label>
        <div class="minNotser">
          <img src="<?php echo $res['UsrImagen']; ?>">
        </div>
        <div id="inputcont">
          <input style="display: none;" class="NTitulo<?php echo$i; ?>" type="text" value="<?php echo$Titulo; echo$i;/*<--temp*/ ?>"/>
          <input style="display: none;" class="NImg<?php echo$i; ?>" type="text" value="<?php echo$Img; ?>"/> 
          <input style="display: none;" class="NIusermg<?php echo$i; ?>" type="text" value="<?php echo$Iusermg; ?>"/>   
          <input style="display: none;" class="NTexto<?php echo$i; ?>" type="text" value="
            <?php echo$Texto; ?>" />           
          <input style="display: none;" class="NTextoT<?php echo$i; ?>" type="text" value='<?php echo$TextoT; ?>' /> 
             
        </div>
      </section>
         <?php

      }
      ?>
     
    </article>    
</div>
</div>
</section> 