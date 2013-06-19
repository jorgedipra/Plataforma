<div id="outer-circle">
        <div id="inner-circle">
          <div id="center-circle">
            <div id="content">
            </div>
          </div>
        </div>
      </div>
      <h1>sys</h1>
</div>   
  <nav>
    <a id="atraz" href= "../" >Back</a> 
  </nav>
 <div class="target" >
  <div class="glass"></div>  
    <article  class="body" >
    <div id="tabs-1">
      <h2 id="LogH2"><- Forgot your password? -></h2>
        <section id="UsuCon">
           <form action="index.php" method="POST"> 
              <div class="clearfix">
                <label class="Email">Email:</label>
                <input name="Uiemail" type="text" id="Uiemail"  placeholder="Email@mj.com"
                 required>
              </div>
              <button id="btn" class="btn" type="submit">send</button>
              <input type="hidden" name="ES" value="On" />           
               </form> 
         </section>     
     </div>                
    </article>    
  </div>
 </div>

<script>
if(localStorage.getItem('USEstado')=='Es'){
document.write('<a href="#"  onclick="ING()" ><article id="ESEN"><div id="ajaxloader"></div><article><div id="idioma">ING<div></a>');
}else{
document.write('<a href="#" onclick="ESP()" ><article id="ESEN"><div id="ajaxloader"></div><article><div id="idioma">ESP<div></a>');
}
</script>  

</head>
<body>  