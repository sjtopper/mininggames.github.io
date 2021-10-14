<!DOCTYPE html>
<html>
<head>
	<title>Withdraw</title>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<style>
	/*

navbar style code

*/

 /* Main Footer */
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
.widget{   margin-bottom: 40px;}
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
input, textarea {
      display: block;
      width: 300px;
      font-size: 18px;
      margin: 7px 0px;
    }
    label {
      display: block;
      padding: 2px 0px;
    }

</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-warning text-center position-sticky">
        <div class="container">
            <a href="dashboard.php" class="navbar-brand" >MiningGems</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse" >
                <div class="navbar-nav">
                    <a href="dashboard.php" class="nav-item nav-link ">View Ads</a>
                    <a href="withdraw.php" class="nav-item nav-link active">Withdraw</a>
                    <a href="aboutus.php" target="_blank" class="nav-item nav-link">About us</a>
                  
                    <a href="help.php" class="nav-item nav-link">Help</a>
                     <a href="login.php" class="nav-item nav-link">Logout</a>
                  
                </div>
                
            </div>
        </div>
    </nav>
</div>
<br>
 <br>
 <div class="container-fluid">
 <h3 style="color: red;">Warning: If you will fill wrong details <br> then you will not get the money.</h1>
  </div>
<div class="container-fluid text-center text-warning">
  <div class="row">

    <div class="col-lg-6 col-md-6 col-12"><h2>Form for Pakistan</h2>
 <form method="post" action="send.php">
      <label>Jazzcash Account:</label>
      <input type="text" 
             name="name" placeholder="Jazzcash account no.">
    <label>Account Holder name:</label>
      <input type="text" 
             name="message" placeholder="Account Holder name">
      <label>MiningDreams Username</label>
      <textarea name="user_name" placeholder="Website Username"></textarea>

      <input type="submit" 
             name="btn">
    </form>


    </div>
    <div class="col-lg-6 col-md-6 col-12"><h2>For all Countries</h2></div>
  </div>
</div>
<div class="container-fluid" style="background-color: #222222;">
<div class="row">
  
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget subscribe no-box">
<h5 class="widget-title text-white">MININGGEMS<span></span></h5>
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

</body>
</html>