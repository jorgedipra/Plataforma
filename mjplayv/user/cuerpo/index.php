
     <div id="outer-circle">
        <div id="inner-circle">
          <div id="center-circle">
            <div id="content">
            </div>
          </div>
        </div>
      </div>
      <h1>log</h1>
<section id="tabs">
  <nav>
   <ul>
    <li id="INI"><a href= "#tabs-1" >Log in</a></li>
    <li id="REG"><a href= "#tabs-2" >Sign up</a></li>
  </ul>   
  </nav>
 <div class="target">
  <div class="glass"></div>  
    <article  class="body" >
    <div id="tabs-1">
      <h2><- Login  In -></h2>
        <section id="UsuCon">
           <form action="index.php" method="post">             
              <div class="clearfix">
                <label>Username:</label>
                <input name="Apodo" type="text" id="firstname" maxlength="10" placeholder="Username"  
                 required>
              </div>
              <div class="clearfix">
                <label>Password:</label>
                <input name="Password" type="password" placeholder="Password" required>
              </div>
              <button class="btn" type="submit">Sign In</button>
              <input type="hidden" name="ES" value="On" />              
               </form> 
        </section>
        <section id="div-border"></section>
        <section id="UsuFaTwG"> 
             <div class="btn-facebook "><a  href= "#button" >Sign in with <b>Facebook</b>>></a></div>
             <div class="btn-twitter "><a  href= "#button" >Sign in with <b>Twitter</b>>></a></div>
             <div class="btn-google " ><a href= "#button" >Sign in with <b>Google</b>>></a></div>
             <div class="btn-github "><a  href= "#button" >Sign in with <b>GitHub</b>>></a></div>
        </section>
     </div>   
  <div id="tabs-2">
    <h2><- Sing Up -></h2>
    <section id="UsuConUp">
           <form action="index.php" method="post">             
              <div class="clearfixUP">
                <label>Username:</label>
                <input name="Apodo" type="text" id="firstname" maxlength="10" placeholder="Username" required>
              </div>
              <div class="clearfixUP">
                <label>Name:</label>
                <input name="Name" type="text" id="firstname"  placeholder="Name" required>
              </div>
              <div class="clearfixUP">
                <label>Last Name:</label>
                <input name="LName" type="text" id="firstname"  placeholder="Last Name" required>
              </div>
              <div class="clearfixUP">
                <label>Email:</label>
                <input name="Email" type="email" id="firstname"  placeholder="Ejemplo@mj.com" required>
              </div>
              <div class="clearfixUP">
                <label>Date:</label>
                <input name="Date" type="text" id="datepicker"  placeholder="dd/mm/aaaa" required>
              </div>
              <div class="clearfixUP">
                <label>Password:</label>
                <input name="Password" type="password" placeholder="Password" required>
              </div>
              <div class="clearfixUP">
                <label>Repeat:</label>
                <input name="RPassword" type="password" placeholder="Repeat Password" required>
              </div>
              <button class="btnUp" type="submit">Sign Up</button>
              <input type="hidden" name="ES" value="Up" />              
               </form> 
        </section>
        <section id="div-border"></section>
        <section id="UsuFaTwG"> 
             <div class="btn-facebook "><a  href= "#button" >Sign up with <b>Facebook</b>>></a></div>
             <div class="btn-twitter "><a  href= "#button" >Sign up with <b>Twitter</b>>></a></div>
             <div class="btn-google " ><a href= "#button" >Sign up with <b>Google</b>>></a></div>
             <div class="btn-github "><a  href= "#button" >Sign up with <b>GitHub</b>>></a></div>
        </section>
  </div>             
    </article>    
  </div>
 </div>
</section>
</head>
<body>