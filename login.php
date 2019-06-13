<!doctype html>
<html>
<head>
<style>
body.aaa {
	background: #3E5151;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #DECBA4, #3E5151);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #DECBA4, #3E5151); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-user-select:none;
     -moz-user-select:none;
      -ms-user-select:none;
          user-select:none;
}

body {
  background: hsla(255, 255%, 255%, 1);
  font: 100%/1 'Lobster', cursive;
  font-family: 'Lobster', sans-serif;
}

.login {
  position:absolute;
  top: 50%;
  left: 50%;
  margin: -10rem 0 0 -10rem;
  width: 30rem;
  height: 20rem;
  padding: 3em;
  background: hsla(255,255%,255%,1);
  border-radius: 50%;
  overflow: hidden;
  -webkit-transition: all 1s ease;
  transition:all 1s ease;
}
.login:hover > .header, .login.clicked > .header {
  width: 2rem;
}
.login:hover > .header > .text, .login.clicked > .header > .text {
  font-size: 1rem;
  -webkit-transform: rotate(-90deg);
  transform: rotate(-90deg);
}
.login.loading > .header {
  width: 20rem;
  -webkit-transition: all 1s ease;
  transition:all 1s ease;
}
.login.loading > .header > .text {
  display: none;
}
.login.loading > .header > .loader {
  display: block;
}
.header {
  position: absolute;
  left: 0;
  top: 0;
  z-index: 1;
  width: 20rem;
  height: 20rem;
  background: hsla(0, 5%, 0%, 1);
  -webkit-transition: width 0.5s ease-in-out;
  transition: width 0.5s ease-in-out;
}
.header > .text {
  display: block;
  width: 100%;
  height: 100%;
  font-size: 5rem;
  text-align: center;
  line-height: 20rem;
  color: hsla(255,255%,255%,1);
  -webkit-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}
.header > .loader {
  display: none;
  position: absolute;
  left: 5rem;
  top: 5rem;
  width: 10rem;
  height: 10rem;
  border-left: 10px solid hsla(255, 255%, 255%, 1);
  border-bottom:10px solid hsla(255,255%,255%,1);
  border-right:10px solid hsla(255,255%,255%,1);
  border-top: 8px solid hsla(255,255%,255%,1);
  border-radius: 50%;
  box-shadow:inset 2px 2px 2px 2px hsla(0, 5%, 0%, 1);
  -webkit-animation: loading 2s linear infinite;
          animation: loading 2s linear infinite;
}
.header > .loader:after {
  content: "";
  position: absolute;
  left: 4.15rem;
  top: -0.5rem;
  width: 1rem;
  height: 1rem;
  background: hsla(1, 75%, 55%, 1);
  border-radius: 50%;
  border-right: 1px solid hsla(1, 75%, 55%, 1);
  
}
.header > .loader:before {
  content: "";
  position: absolute;
  left: 3.4rem;
  top: -0.5rem;
  width: 0;
  height: 0;
  border-right: 1rem solid hsla(1, 75%, 55%, 1);
  border-top: 0.5rem solid transparent;
  border-bottom: 0.5rem solid transparent;
}

@-webkit-keyframes loading {
  50% {
  border-left: 10px solid hsla(1, 95%, 25%, 1);
  border-bottom:10px solid hsla(1, 95%, 25%, 1);
  border-right:10px solid hsla(1, 95%, 25%, 1);
  border-top:8px solid hsla(1, 95%, 25%, 1);  
  }

  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}

@keyframes loading {
  50% {
  border-left: 10px solid hsla(1, 95%, 25%, 1);
  border-bottom:10px solid hsla(1, 95%, 25%, 1);
  border-right:10px solid hsla(1, 95%, 25%, 1);
  border-top:8px solid hsla(1, 95%, 25%, 1);  
  }

  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
.form {
  margin: 0 0 0 2rem;
  padding: 0.5rem;
}

.input {
  display: block;
  width: 100%;
  font-size: 2rem;
  padding: 0.5rem 1rem;
  box-shadow: none;
  border-color: hsla(0, 5%, 0%, 1);
  border-width: 0 0 3px 0;
  -webkit-transition: all .5s ease-in;
  transition: all .5s ease-in;
  outline:transparent;
}
.input + .input {
  margin: 10px 0 0;
}
.input:focus {
  border-bottom: 3px solid hsla(1, 75%, 55%, 1);
}

.btn {
  position: absolute;
  right: 7.8rem;
  bottom: 3rem;
  width: 4rem;
  height: 4rem;
  border: none;
  background: hsla(255, 255%, 255%, 1);
  font-size: 0;
  border: none;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.btn:after {
  content: "";
  position: absolute;
  left: 1.4rem;
  top: 1rem;
  width: 0;
  height: 0;
  border-left: 1.6rem solid hsla(1, 75%, 55%, 1);
  border-top: .8rem solid transparent;
  border-bottom: .8rem solid transparent;
  -webkit-transition: border 0.3s ease-in-out 0s;
  transition: border 0.3s ease-in-out 0s;
}
.btn:hover, .btn:focus, .btn:active {
  outline: none;
  
}
.btn:hover:after, .btn:focus:after, .btn:active:after {
  border-left-color: hsla(0, 5%, 0%, 1);
}
.resetbtn{
  margin:1%;
  border:none;
  padding:.5em;
  width:5em;
  background:hsla(0,0%,0%,1);
  color:hsla(255,255%,255%,1);
  font-size:1.5em;
  border-radius:2px;
  -webkit-transition: all 1s ease-in-out;
  transition:all 1s ease-in-out;
  outline:none;
  box-shadow:0 0 1px 1px hsla(0,0%,0%,0.2);
}
.resetbtn:hover, .resetbtn:focus{
  background:hsla(255,255%,255%,1);
  color:hsla(0,0%,0%,1);
  outline:5px solid hsla(0,0%,0%,1);
}
.one {
text-align:center;
background: #AA076B;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #61045F, #AA076B);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #61045F, #AA076B); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

height:180px;
width:1345px;
}
.two {
float:left;
background: #AA076B;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #61045F, #AA076B);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #61045F, #AA076B); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

height:600px;
width:200px;
padding-left:30px;
}
.four {
float:left;
background: #00d2ff;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3a7bd5, #00d2ff);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3a7bd5, #00d2ff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
 height:600px;
 width:1132px;
 text-align:center;
 }
a:link,a:visited {
background-color: green;
    color: yellow;
    padding: 14px 25px;
    text-align: center; 
    text-decoration: none;
    display: inline-block;
}
a:active,a:hover {
background-color: lightblue;
color:blue;
text-decoration:underline;
}
.l
{
margin-left:300px;
margin-right:300px;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-user-select:none;
     -moz-user-select:none;
      -ms-user-select:none;
          user-select:none;
}

body {
  background: hsla(255, 255%, 255%, 1);
  font: 100%/1 'Lobster', cursive;
  font-family: 'Lobster', sans-serif;
}

.login {
  position: absolute;
  top: 63%;
  left: 55%;
  margin: -10rem 0 0 -10rem;
  width: 20rem;
  height: 20rem;
  padding: 3em;
  background: hsla(255,255%,255%,1);
  border-radius: 50%;
  overflow: hidden;
  -webkit-transition: all 1s ease;
  transition:all 1s ease;
}
.login:hover > .header, .login.clicked > .header {
  width: 2rem;
}
.login:hover > .header > .text, .login.clicked > .header > .text {
  font-size: 1rem;
  -webkit-transform: rotate(-90deg);
  transform: rotate(-90deg);
}
.login.loading > .header {
  width: 20rem;
  -webkit-transition: all 1s ease;
  transition:all 1s ease;
}
.login.loading > .header > .text {
  display: none;
}
.login.loading > .header > .loader {
  display: block;
}
.header {
  position: absolute;
  left: 0;
  top: 0;
  z-index: 1;
  width: 20rem;
  height: 20rem;
  background: rgb(0,70,70);
  -webkit-transition: width 0.5s ease-in-out;
  transition: width 0.5s ease-in-out;
}
.header > .text {
  display: block;
  width: 100%;
  height: 100%;
  font-size: 5rem;
  text-align: center;
  line-height: 20rem;
  color: hsla(255,255%,255%,1);
  -webkit-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}
.header > .loader {
  display: none;
  position: absolute;
  left: 5rem;
  top: 5rem;
  width: 10rem;
  height: 10rem;
  border-left: 10px solid hsla(255, 255%, 255%, 1);
  border-bottom:10px solid hsla(255,255%,255%,1);
  border-right:10px solid hsla(255,255%,255%,1);
  border-top: 8px solid hsla(255,255%,255%,1);
  border-radius: 50%;
  box-shadow:inset 2px 2px 2px 2px hsla(0, 5%, 0%, 1);
  -webkit-animation: loading 2s linear infinite;
          animation: loading 2s linear infinite;
}
.header > .loader:after {
  content: "";
  position: absolute;
  left: 4.15rem;
  top: -0.5rem;
  width: 1rem;
  height: 1rem;
  background: hsla(1, 75%, 55%, 1);
  border-radius: 50%;
  border-right: 1px solid hsla(1, 75%, 55%, 1);
  
}
.header > .loader:before {
  content: "";
  position: absolute;
  left: 3.4rem;
  top: -0.5rem;
  width: 0;
  height: 0;
  border-right: 1rem solid hsla(1, 75%, 55%, 1);
  border-top: 0.5rem solid transparent;
  border-bottom: 0.5rem solid transparent;
}

@-webkit-keyframes loading {
  50% {
  border-left: 10px solid hsla(1, 95%, 25%, 1);
  border-bottom:10px solid hsla(1, 95%, 25%, 1);
  border-right:10px solid hsla(1, 95%, 25%, 1);
  border-top:8px solid hsla(1, 95%, 25%, 1);  
  }

  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}

@keyframes loading {
  50% {
  border-left: 10px solid hsla(1, 95%, 25%, 1);
  border-bottom:10px solid hsla(1, 95%, 25%, 1);
  border-right:10px solid hsla(1, 95%, 25%, 1);
  border-top:8px solid hsla(1, 95%, 25%, 1);  
  }

  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
.form {
  margin: 0 0 0 2rem;
  padding: 0.5rem;
}

.input {
  display: block;
  width: 100%;
  font-size: 2rem;
  padding: 0.5rem 1rem;
  box-shadow: none;
  border-color: hsla(0, 5%, 0%, 1);
  border-width: 0 0 3px 0;
  -webkit-transition: all .5s ease-in;
  transition: all .5s ease-in;
  outline:transparent;
}
.input + .input {
  margin: 10px 0 0;
}
.input:focus {
  border-bottom: 3px solid hsla(1, 75%, 55%, 1);
}

.btn {
  position: absolute;
  right: 7.8rem;
  bottom: 3rem;
  width: 4rem;
  height: 4rem;
  border: none;
  background: hsla(255, 255%, 255%, 1);
  font-size: 0;
  border: none;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.btn:after {
  content: "";
  position: absolute;
  left: 1.4rem;
  top: 1rem;
  width: 0;
  height: 0;
  border-left: 1.6rem solid hsla(1, 75%, 55%, 1);
  border-top: .8rem solid transparent;
  border-bottom: .8rem solid transparent;
  -webkit-transition: border 0.3s ease-in-out 0s;
  transition: border 0.3s ease-in-out 0s;
}
.btn:hover, .btn:focus, .btn:active {
  outline: none;
  
}
.btn:hover:after, .btn:focus:after, .btn:active:after {
  border-left-color: hsla(0, 5%, 0%, 1);
}

a.ad:link,a.bc:visited {
background: #3C3B3F;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #605C3C, #3C3B3F);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #605C3C, #3C3B3F); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
color:white;
    padding: 14px 25px;
    text-align: center; 
    text-decoration: none;
    display: inline-block;
}
a.ds:active,a.as:hover {
background-color: lightblue;
color:blue;
text-decoration:underline;
}
 

 </style>
 </head>

 <body class="aaa">
  <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
 <div class="one">
<p><font style="font-family: 'Lobster', sans-serif;" color="rgb(0,64,64)"> <img class="h" src="logo.png" height=175 width=1000>
 </div>
 <div class="two">
 <br>
 <a class="ad as bc ad" href="about.php">About</a><br><br>

 
 </div>
 <div class="four"><br>
 <h1><font 	style="color: #2d2e2e;font-family: 'Lobster', sans-serif;">Lab Stock Maintainance System</h1><br><br>

 <br><br>
  <div class="login"><br>
  <header class="header">
    <span class="text">Login</span>
    <span class="loader"></span>
  </header>
  <form class="form" action="logincheck.php" method="POST">  
    <input class="input" type="text" name="username" placeholder="Username">
    <input class="input" type="password" name="password" placeholder="Password">
    <button class="btn" type="submit"></button>
  </form>

	</div>
</body>
</html>
 
 