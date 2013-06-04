<div id="outer-circle">
        <div id="inner-circle">
          <div id="center-circle">
            <div id="content">
            </div>
          </div>
        </div>
      </div>
      <h1>log</h1>
</div>   
<section id="tabs">
  <nav>
   <ul>
    <li id="INI"><a id="Log" href= "#tabs-1" >Log in</a></li>
    <li id="REG"><a id="Sin" href= "#tabs-2" >Sign up</a></li>
  </ul>   
  </nav>
 <div class="target">
  <div class="glass"></div>  
    <article  class="body" >
    <div id="tabs-1">
      <h2 id="LogH2"><- Login  In -></h2>
        <section id="UsuCon">
           <form action="index.php" method="POST">             
              <div class="clearfix">
                <label class="User">Username:</label>
                <input name="Apodo1" type="text" id="firstname" maxlength="10" placeholder="Username"  
                 required>
              </div>
              <div class="clearfix">
                <label id="pass">Password:</label>
                <input name="Password1"  maxlength="10" type="password" id="ipass" placeholder="Password" required>
              </div>
              <button id="btn" class="btn" type="submit">Sign In</button>
              <input type="hidden" name="ES" value="On" />   
              <div id="err"></div>           
               </form> 
         </section>
        <section id="div-border"></section>
        <section id="UsuFaTwG"> 
             <div class="btn-facebook "><a id="fac"  href= "#button" >Sign in with <b>Facebook</b>>></a></div>
             <div class="btn-twitter "><a id="Twt" href= "#button" >Sign in with <b>Twitter</b>>></a></div>
             <div class="btn-google " ><a id="Gog" href= "#button" >Sign in with <b>Google</b>>></a></div>
             <div class="btn-github "><a  id="Git" href= "#button" >Sign in with <b>GitHub</b>>></a></div>
        </section>
     </div>   
  <div id="tabs-2">
    <h2 id="SinH2"><- Sing Up -></h2>
    <section id="UsuConUp">
           <form action="index.php" id="formulario" method="POST">             
              <div class="clearfixUP">
                <label class="User" >Username:</label>
                <input name="Apodo" type="text" id="Uiuser" maxlength="10" placeholder="Username"  autocomplete="off">
              </div>
              <div class="clearfixUP">
                <label id="Uname">Name:</label>
                <input name="Name" type="text" id="Uiname"  placeholder="Name" autocomplete="off">
              </div>
              <div class="clearfixUP">
                <label id="Ulasname" >Last Name:</label>
                <input name="LName" type="text" id="Uilasname"  placeholder="Last Name" autocomplete="off">
              </div>
              <div class="clearfixUP">
                <label id="Uemail" >Email:</label>
                <input name="Email" type="email" id="Uiemail"  placeholder="Ejemplo@mj.com" autocomplete="off">
              </div>
              <div class="clearfixUP">
                <label id="Udate" >Birthdate :</label>
                <input name="Date" type="text" id="datepicker"  placeholder="dd/mm/aaaa"  >
              </div>
              <div class="clearfixUP">
                <label id="Upass" >Password:</label>
                <input name="Password" type="password" maxlength="8" id="Uipass" placeholder="Password" >
              </div>
              <div class="clearfixUP">
                <label id="Urepeat" >Repeat:</label>
                <input name="RPassword" type="password" maxlength="8" id="Uirepeat" placeholder="Repeat Password" >
              </div>
              <button id="btnUp" class="btnUp" type="submit">Sign Up</button>
              <script >
                if (localStorage.getItem('USEstado')=="Es") {
                  document.write('<input type="hidden" name="ES" value="1" /> ');                 
                }else{
                  document.write('<input type="hidden" name="ES" value="2" /> ');                                  
                }
              </script>            
               </form> 
        </section>
        <section id="div-border"></section>
        <section id="UsuFaTwG"> 
             <div class="btn-facebook "><a id="ifac" href= "#button" >Sign up with <b>Facebook</b>>></a></div>
             <div class="btn-twitter "><a id="iTwt" href= "#button" >Sign up with <b>Twitter</b>>></a></div>
             <div class="btn-google " ><a id="iGog" href= "#button" >Sign up with <b>Google</b>>></a></div>
             <div class="btn-github "><a  id="iGit" href= "#button" >Sign up with <b>GitHub</b>>></a></div>
        </section>
  </div>             
    </article>    
  </div>
 </div>
</section>
<script>
if(localStorage.getItem('USEstado')=='Es'){
document.write('<a href="#"  onclick="ING()" ><article id="ESEN"><div id="ajaxloader"></div><article><div id="idioma">ING<div></a>');
}else{
document.write('<a href="#" onclick="ESP()" ><article id="ESEN"><div id="ajaxloader"></div><article><div id="idioma">ESP<div></a>');
}
</script>  

</head>
<body>  