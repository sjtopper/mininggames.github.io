<!DOCTYPE html>
<html>
<head>
	<title>How to use?</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Static Navbar</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


<style>
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
.main-img
{
	width: 100%;
	height: auto;
	opacity: 0.7;
	margin-top: 55px;
}

#centered {
  position: absolute;
  top: 35%;
  left: 50%;
  transform: translate(-50%, -50%);

}
.h1{
	color: black;
	font-weight: bold;
    font-size:45px;
    background-color: orange;
    color: white;
    outline: 2px double black;
}
/*
faqs
*/
.collapsible {
  background-color: orange;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 18px;
  border-radius: 12%;
}

.collapsible:hover {
  background-color: #ffcc99;
  transition-duration: .5s;
  color: black;
}
.collapsible:after {
  content: '\002B';
  color: black;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #FFFFF7.;
   transition: 1s ease-out;
   color: black;

}
#plus
{
	position: absolute;
	margin-left: 820px;
}
.faqs-section
{
	background-color: grey;
	font-color:white;
}










/*
================footer
*/
footer .main-footer{  padding: 20px 0;  background: #252525;}
footer ul{  padding-left: 0;  list-style: none;}

/* Copy Right Footer */
.footer-copyright { background: #222; padding: 5px 0;}
.footer-copyright .logo {    display: inherit;}
.footer-copyright nav {    float: right;    margin-top: 5px;}
.footer-copyright nav ul {  list-style: none; margin: 0;  padding: 0;}
.footer-copyright nav ul li { border-left: 1px solid #505050; display: inline-block;  line-height: 12px;  margin: 0;  padding: 0 8px;}
.footer-copyright nav ul li a{  color: #969696;}
.footer-copyright nav ul li:first-child { border: medium none;  padding-left: 0;}
.footer-copyright p { color: #969696; margin: 2px 0 0;}

/* Footer Top */
.footer-top{  background: #252525;  padding-bottom: 30px; margin-bottom: 30px;  border-bottom: 3px solid #222;}

/* Footer transparent */
footer.transparent .footer-top, footer.transparent .main-footer{  background: transparent;}
footer.transparent .footer-copyright{ background: none repeat scroll 0 0 rgba(0, 0, 0, 0.3) ;}

/* Footer light */
footer.light .footer-top{ background: #f9f9f9;}
footer.light .main-footer{  background: #f9f9f9;}
footer.light .footer-copyright{ background: none repeat scroll 0 0 rgba(255, 255, 255, 0.3) ;}

/* Footer 4 */
.footer- .logo {    display: inline-block;}

/*==================== 
  Widgets 
====================== */
.widget{  padding: 20px;  margin-bottom: 40px;}
.widget.widget-last{  margin-bottom: 0px;}
.widget.no-box{ padding: 0; background-color: transparent;  margin-bottom: 40px;
  box-shadow: none; -webkit-box-shadow: none; -moz-box-shadow: none; -ms-box-shadow: none; -o-box-shadow: none;}
.widget.subscribe p{  margin-bottom: 18px;}
.widget li a{ color: #ff8d1e;}
.widget li a:hover{ color: #4b92dc;}
.widget-title {margin-bottom: 20px;}
.widget-title span {background: #839FAD none repeat scroll 0 0;display: block; height: 1px;margin-top: 25px;position: relative;width: 20%;}
.widget-title span::after {background: inherit;content: "";height: inherit;    position: absolute;top: -4px;width: 50%;}
.widget-title.text-center span,.widget-title.text-center span::after {margin-left: auto;margin-right:auto;left: 0;right: 0;}
.widget .badge{ float: right; background: #7f7f7f;}

.typo-light h1, 
.typo-light h2, 
.typo-light h3, 
.typo-light h4, 
.typo-light h5, 
.typo-light h6,
.typo-light p,
.typo-light div,
.typo-light span,
.typo-light small{  color: #fff;}

ul.social-footer2 { margin: 0;padding: 0; width: auto;}
ul.social-footer2 li {display: inline-block;padding: 0;}
ul.social-footer2 li a:hover {background-color:#ff8d1e;}
ul.social-footer2 li a {display: block; height:30px;width: 30px;text-align: center;}
.btn{background-color: #ff8d1e; color:#fff;}
.btn:hover, .btn:focus, .btn.active {background: #4b92dc;color: #fff;
-webkit-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
-moz-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
-ms-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
-o-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
-webkit-transition: all 250ms ease-in-out 0s;
-moz-transition: all 250ms ease-in-out 0s;
-ms-transition: all 250ms ease-in-out 0s;
-o-transition: all 250ms ease-in-out 0s;
transition: all 250ms ease-in-out 0s;

}

/*
media quire =================
*/




@media screen and (max-width: 600px) {
  
#centered {
  position: absolute;
  top: 35%;
  left: 50%;
  transform: translate(-50%, -50%);

}
.h1{
	font-size: 50px;
	background-color: orange;	
	color: white;
	  outline: 2px double black;
}

}

@media screen and (max-width: 600px) {
  
  .h1{
    font-size: 25px;
      outline: 2px double black;
  }

#centered {
  position: absolute;
  top: 35%;
  left: 50%;
  transform: translate(-50%, -50%);

}


}
@media screen and (max-width: 800px) {
 .h1{
  font-size: 30px;
    outline: 2px double black;
 }

#centered {
  position: absolute;
  top: 35%;
  left: 50%;
  transform: translate(-50%, -50%);

}
.h1{
	font-size: 22px;
	background-color: orange;
	color: white;
	  outline: 2px double black;
}
}

</style>
</head>

<body>

 
    <nav class="navbar navbar-expand-lg navbar-light bg-warning text-center">
        <div class="container">
            <a href="index.php" class="navbar-brand" >MiningGems</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse" >
                <div class="navbar-nav">
                    <a href="help.php" class="nav-item nav-link active">How it works</a>
                  
                    <a href="login.php" class="nav-item nav-link">Login</a>
                     <a href="signup.php" class="nav-item nav-link">Signup</a>
                  
                </div>
                <div class="navbar-nav ms-auto">
                   
                </div>
            </div>
        </div>
    </nav>
</div>
 


<div class="container">
  <img src="images/people.jpg" class="main-img">
	<div class="" id="centered">
		<h1 class="h1">How Can We Help You?</h1>
		</div>

		<br><br>
		<br>
		<br>
		<div class="container text-center text-white" >
		<div class="faqs-section">
		<h1 id="heading">
			Frequently Asked Questions(FAQs)
		</h1>
		<br>
</div>

<button class="collapsible">What is MiningGems.com?</button>
<div class="content">
  <p>MiningGems is an online earning platform where you can earn real money with minimum or no effort.</p>
</div>
<br>
<br>

<button class="collapsible">How you can earn from MiningGems?</button>
<div class="content">
  <p>You can earn from MiningGems by just watching ads.Earning will depend on your work.</p>
</div>
<br>
<br>
<button class="collapsible">How much you can earn from MiningGems?</button>
<div class="content">
  <p>Earning will depend on your work. You can earn more by watching more ads.</p>
</div>
<br>
<br>

<button class="collapsible">How you can increase your earning?</button>
<div class="content">
  <p>Earning will depend on your work. You can increase your earning by watching more ads or clicking more ads. Remember that if you watch ads and click them your earning will be increased.</p>
</div>
<br>
<br>
<button class="collapsible">How you can withdraw your money? </button>
<div class="content">
  <p>You will recieve withdraw through jazzcash and easypaisa. Withdraw will be processed automatically.</p>
</div>
<br>
<br>

<button class="collapsible">What you can do if having any problem?</button>
<div class="content">
  <p>Contact us on Facebook by clicking <a href="https://web.facebook.com/groups/271781791325061">here</a>  Join our group and message. We will solve your problem as soon as possible.</p>
</div>
<br>
<br>

<button class="collapsible">How you can Contact Us?</button>
<div class="content">
  <p>Join our Facebook group by clicking <a href="https://web.facebook.com/groups/271781791325061" target="_blank">here</a> </p>
</div>
<br>
<br>

<button class="collapsible">How much you can earn from MiningGems in a day?</button>
<div class="content">
  <p>You can complete 1ad in 4sec. So  10ADs in 40 sec obviously. If you flow the following details so you can watch 1000Ads in one hour. We pay 450Rs(2.64USD) for your one hour.This is good for you that you work 1 hour daily.</p>
</div>
<br>
<br>

<button class="collapsible">How much you can earn Complete detail?</button>
<div class="content">
  <p>You can complete 1ad in 4sec. So  10ADs in 40 sec obviously. If you flow the following details so you can watch 1000Ads in one hour. We pay 450Rs(2.64USD) for your one hour.This is good for you that you work 1 hour daily.</p>
</div>
<br>
<br>

<button class="collapsible">Is earning Fixed?</button>
<div class="content">
  <p>No, Earning will increase if you click ads instead of just watching ads.</p>
</div>
<br>
<br>

<button class="collapsible">How many ads you can watch in a day?</button>
<div class="content">
  <p>There is no limit of watching ads. You can watch ads as much as you can.</p>
</div>
</div>
<br>
<br>
<br>
<br>


</div>

<div class="container-fluid" style="background-color: #222222;">
<div class="row">
  
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget subscribe no-box">
<h5 class="widget-title text-white">MiningGems<span></span></h5>
<p class="text-warning">MiningGems is an online earning platform where you can earn by watching ads. </p>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget no-box">
<h5 class="widget-title text-white">Quick Links<span></span></h5>
<ul class="thumbnail-widget text-warning">
<li>
<div class="thumb-content text-white"><a href="https://web.facebook.com/groups/271781791325061" target="_blank">Having any Problem</a></div> 
</li>
<li>
<div class="thumb-content"><a href="#.">Top Leaders</a></div> 
</li>

</ul>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget no-box">
<h5 class="widget-title text-white">Get Started<span></span></h5>
<p class="text-warning">Start Earning Today</p>
<a class="btn" href="signup.php" target="_blank">Get Started</a>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3">

<div class="widget no-box">
<h5 class="widget-title text-white">Policies<span></span></h5>
<li>
<div class="thumb-content"><a href="Policy.php" target="_blank">Privacy Policy</a></div> 
</li>
</ul>
</div>
</div>

</div>
</div>
</div>
  
<div class="footer-copyright">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<p>Copyright MiningGems © 2021. All rights reserved.</p>
</div>
</div>

</div>
</footer>
</div>

 <script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

</body>





<script>
	<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}



</script>
</script>
</html>