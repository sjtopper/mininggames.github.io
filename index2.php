<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<html>
<head>
	
	<title></title>

	<script>
		
  const spans = document.querySelectorAll('.word span');

spans.forEach((span, idx) => {
  span.addEventListener('click', (e) => {
    e.target.classList.add('active');
  });
  span.addEventListener('animationend', (e) => {
    e.target.classList.remove('active');
  });
  
  // Initial animation
  setTimeout(() => {
    span.classList.add('active');
  }, 750 * (idx+1))
});

	</script>
	<style>
		
		  	 #main_logo
     {
      padding: 20px;
      background-color: none;
     }
      #main_logo:hover{
        background-color: ;
        height: 87px;
      }
   
.topnav {
	
  overflow: hidden;
  background-color: #333;
   font-family: Arial, Helvetica, sans-serif;
   max-width: 100%;
   


}

.topnav a {
  float: left;
  display: block;
  color: orange;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 18px;
    vertical-align: bottom;
    padding-top: 55px;
  
}

.topnav a:hover {
  background-color: orange;
  color: #333;
  transition-duration:0.5s;
  height: 60px;
 
}

.topnav a.active {
  background-color: 04AA6D;
  color: white;
  width:150px;

}
.topnav a.active:hover{

	background-color: black;
}

.topnav .icon {
  display: none;


}


/*
p:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #fff;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
  opacity: .6;
  z-index: -1;
}
/*** The following is just for demo styles  ***/
*/
body {
  
}


 h1 {
    
      justify-content: center;
      color: white;
      font-size: 45px;
    }

    #div6::before {
      content: "more";
      animation: animate infinite 3s;
      padding-left: 10px;
      color: orange;
    }

    @keyframes animate {

      0% {
        content: "get";
      }

      
    }

#centered {
  position: absolute;
  top: 52%;
  left: 50%;
  transform: translate(-50%, -50%);

}
#centered2{
  position: absolute;
  top: 41%;
  left: 50%;
  transform: translate(-50%, -50%);

}
#centered3{
  position: absolute;
  top: -120%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 24px;
  color: orange;
   font-weight: bold;
  font-style: italic;

}
#centered4{
  position: absolute;
  top: 30%;
  left: 80%;
  transform: translate(-50%, -50%);
  text-decoration: none;
  color: orange;
  font-size: 17px;
  font-style: italic;
  font-weight: bold;
  font-weight: 500px;
}
#centered6{
  position: absolute;
  top: 30%;
  left: 80%;
  
  transform: translate(-50%, -50%);
  text-decoration: none;
  color: orange;
 
  font-style: italic;


}
#centered7{
  position: absolute;
  top: 82%;
  left: 25%;
  transform: translate(-50%, -50%);
  text-decoration: none;
  color: orange;
  font-size: 17px;
  font-style: italic;
  font-weight: bold;
  font-weight: 500px;
}
.main-img
{
	width: 100%;
	height: 550px;
	margin:0;
	opacity: 0.9;
  
}
body, html {
  
  margin: 0;
}

.bg {
  /* The image used */
 

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.btn-reg{
	width: 120px;
	height: 50px;
	color: black;
	font-size: 20px;
	background-color: orange;
	border-radius: 10px 10px 10px 10px;
}
.btn-log{
	width: 120px;
	height: 50px;
	color: orange;
	font-size: 20px;
	background-color: white;
	border-radius: 10px 10px 10px 10px;
}
.btn-reg:hover{
	width: 120px;
	height: 50px;
	color: orange;
	font-size: 20px;
	background-color: white;
	border-radius: 22px 10px 22px 10px;
	    -webkit-transform: scale(1.25, 1.25);
  transform: scale(1.1, 1.1);
transition-duration: 0.7s;
}
.btn-log:hover{
	width: 120px;
	height: 50px;
	color: black;
	font-size: 20px;
	background-color: orange;
	border-radius: 22px 10px 22px 10px;
	    -webkit-transform: scale(1.25, 1.25);
  transform: scale(1.1, 1.1);
transition-duration: 0.7s;
}


/*

navbar style code

*/

td {
  line-height   : 35px;
  vertical-align: middle;
  color: red;
  font-size: 25px;
  position: relative;
}
.aButton {
  transition        : 1.0s ease all;
  -moz-transition   : 1.0s ease all;
 -webkit-transition: 1.0s ease all;
   position: relative;
  
  border-radius     : 3px;
  padding           : 0px 10px 0px 10px;

 
  color             : white;
 

  font-size         : 28px;
  
  text-decoration   : none;

  box-sizing        : border-box;
  -webkit-box-sizing: border-box;

}
#h1how
{
  font-size: 45px;
  font-style: italic;
}
.aButton:hover {
  transition        : 1.0s ease all;
  -moz-transition   : 1.0s ease all;
  -webkit-transition: 1.0s ease all;

  background-color  : orange;
  color             : white;
}
         -webkit-transform: scale(1.25, 1.25);
  transform: scale(1.8, 1.8);


.rotate {
  cursor: pointer;  
}
.rotate:hover {
  transform               : rotate(360deg);
  -moz-transform          : rotate(360deg);
  -webkit-transform       : rotate(360deg);
  transform-origin        : center;
  -moz-transform-origin   : center;
  -webkit-transform-origin: center;

  transition              : transform 1.0s ease all;
  -moz-transition         : -moz-transform 1.0s ease all;
  -webkit-transition      : -webkit-transform 1.0s ease all;
}
.rotateY {
  cursor: pointer;  
}
.rotateY:hover {
  transform               : rotateY(360deg);
  -moz-transform          : rotateY(360deg);
  -webkit-transform       : rotateY(360deg);
  transform-origin        : center;
  -moz-transform-origin   : center;
  -webkit-transform-origin: center;

  transition              : transform 1.0s ease all;
  -moz-transition         : -moz-transform 1.0s ease all;
  -webkit-transition      : -webkit-transform 1.0s ease all;
}
.rotateX {
  cursor: pointer;  
}
.rotateX:hover {
  transform               : rotateX(360deg);
  -moz-transform          : rotateX(360deg);
  -webkit-transform       : rotateX(360deg);
  transform-origin        : center;
  -moz-transform-origin   : center;
  -webkit-transform-origin: center;

  transition              : transform 1.0s ease all;
  -moz-transition         : -moz-transform 1.0s ease all;
  -webkit-transition      : -webkit-transform 1.0s ease all;
}
.content {
   position: relative;
  border-radius        : 5px;
  -moz-border-radius   : 5px;
  -webkit-border-radius: 5px;
  box-shadow           : 5px 5px 5px #3f3f3f;
  -moz-box-shadow      : 5px 5px 5px #3f3f3f;
  -webkit-box-shadow   : 5px 5px 5px #3f3f3f;



}

/*

==============================new
*/
  @import url('https://fonts.googleapis.com/css?family=Anton|Roboto');

.word {
  font-family: 'Anton', sans-serif;
 
}

.word span {
  cursor: pointer;
  display: inline-block;
  font-size: 25px;
  user-select: none;
  line-height: ;
}

.word span:nth-child(1).active {
  animation: balance 1.5s ease-out;
  transform-origin: bottom left;
}

@keyframes balance {
  0%, 100% {
    transform: rotate(0deg);
  }
  
  30%, 60% {
    transform: rotate(-45deg);
  }
}

.word span:nth-child(2).active {
  animation: shrinkjump 1s ease-in-out;
  transform-origin: bottom center;
}

@keyframes shrinkjump {
  10%, 35% {
    transform: scale(2, .2) translate(0, 0);
  }
  
  45%, 50% {
    transform: scale(1) translate(0, -150px);
  }
  
  80% {
    transform: scale(1) translate(0, 0);
  }
}

.word span:nth-child(3).active {
  animation: falling 2s ease-out;
  transform-origin: bottom center;
}

@keyframes falling {
  12% {
    transform: rotateX(240deg);
  }
  
  24% {
    transform: rotateX(150deg);
  }
  
  36% {
    transform: rotateX(200deg);
  }
  
  48% {
    transform: rotateX(175deg);
  }
  
  60%, 85% {
    transform: rotateX(180deg);
  }
  
  100% {
    transform: rotateX(0deg);
  }
}

.word span:nth-child(4).active {
  animation: rotate 1s ease-out;
}

@keyframes rotate {
  20%, 80% {
    transform: rotateY(180deg);
  }
  
  100% {
    transform: rotateY(360deg);
  }
}

.word span:nth-child(5).active {
  animation: toplong 1.5s linear;
}

@keyframes toplong {
  10%, 40% {
    transform: translateY(-12vh) scaleY(1);
  }
  
  90% {
    transform: translateY(-12vh) scaleY(4);
  }
}

/* Other styles */



footer {
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  text-align: center;
  letter-spacing: 1px;
}

footer i {
  color: red;
}

footer a {
  color: #3C97BF;
  text-decoration: none;
}


@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
    transition-duration:1s;
     
  }

}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
    transition-duration:1s;
    
  }
  h1{
    font-size: 25px;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    transition-duration:1s;
  }
.main-text
{
	font-size: 35px;
	font-weight: bold;
   font-family: Fantasy;
  color: white;
	text-align: center;
	-webkit-text-stroke-width: 2px;
    -webkit-text-stroke-color: black;
}
.slogan{
	font-size: 15px;
	color: orange;
	font-weight: bold;
  
	text-align: center;
	}

#centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);

}
#centered2{
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);

}
#centered4{
  position: absolute;
  top: 30%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-decoration: none;
  color: orange;
  font-size: 17px;
}
#centered6{
  position: absolute;
  top: 35%;
  left: 80%;
  transform: translate(-50%, -50%);
  text-decoration: none;
  color: orange;
  font-size: 17px;
  font-style: italic;
  font-weight: bold;
  font-weight: 500px;
}
#centered7{
  position: absolute;
  top: 70%;
  left: 30%;
  transform: translate(-50%, -50%);
  text-decoration: none;
  color: orange;
  font-size: 17px;
  font-style: italic;
  font-weight: bold;
  font-weight: 500px;
}

}
@media screen and (max-width: 800px) {
 h1{
  font-size: 25px;
 }
.main-text
{
	font-size: 45px;
	font-weight: bold;
   font-family: Fantasy;
  color: white;
	text-align: center;
	-webkit-text-stroke-width: 2px;
    -webkit-text-stroke-color: black;
}

#centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);

}
#centered2{
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);

}
#centered4{
  position: absolute;
  top: 25%;
  left: 55%;
  transform: translate(-50%, -50%);
  text-decoration: none;
  color: orange;
  font-size: 17px;
}
#centered6{
  position: absolute;
  top:27%;
  left: 75%;
  font-size: 30px;
  transform: translate(-50%, -50%);
  text-decoration: none;
  color: orange;
  font-size: 17px;
  font-style: italic;
  font-weight: bold;
  font-weight: 500px;
}
#centered7{
  position: absolute;
  top: 80%;
  left: 40%;
  transform: translate(-50%, -50%);
  text-decoration: none;
  color: orange;
  font-size: 17px;
  font-style: italic;
  font-weight: bold;
  font-weight: 500px;
}

}

	</style>
</head>
<body>
<div class="topnav" id="myTopnav" >
  <a href="#news" id="main_logo"><img src="images/logomain-removebg-preview.png" width="120" height="80" style="background-color: orange;"></a>
  <a href="#news"><i class="fa fa-fw fa-question-circle"></i> How to Use?</a>
  
   <a href="login.php"><i class="fa fa-fw fa-sign-in"></i>Login</a>
   
  <a href="signup.php" class="log-out"><i class="fa fa-fw fa-user-plus"></i>Register</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>


<div class="container">
  <img src="images/maybe.jpg" class="main-img">
</div>
 
<div class="container">
	<div class="row">
		<div class="" id="centered">
			<a href="login.php"><button class="btn-reg">Login</button></a>
		</div>
		<div class="" id="centered2">
			<a href="signup.php"><button class="btn-log">Register</button></a>
		</div>
  
    </div>
	</div>
</div>

 <div id="centered7">

 <div class="word">
 <span> WelCOME</span>
  <span></span>
  <span>TO</span>
  <span>Mining</span>
  <span>GEMs</span>
</div>
</div>
</div>
  <div id="centered6">
     <h1>DO LESS <div id="div6"> </div></h1>
  </div>

</body>
</html>