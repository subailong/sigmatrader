<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sigmatrader</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Make real profits on our simulated exchange, or trade real stock on our leveraged matched liquidity exchange">
    <meta name="author" content="Christopher Reeves, Sigma Trader LLC">
    <meta name="keywords" content="Stock, Trading, Exchange, Sigmatrader, Liquidity, Leverage">
    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
   <link type='text/css' href='css/osx.css' rel='stylesheet' media='screen' />
     <link type='text/css' href='css/login.css' rel='stylesheet' media='screen' />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35985024-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

  </head>

    <div id='container' >
 
  <div id='content'>
    <div id='osx-modal'>
     
      <input id = "modes" type='button' style="display:none;" name='osx' value='Demo' class='osx demo'/> 
    </div>
   
    <!-- modal content -->
    <div id="osx-modal-content">

    </div>
  </div>

</div>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">

    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         
          <div class="nav-collapse collapse">
               <ul class="nav">

              
              <li class="active">
                <a href="./">Home</a>
              </li>
              <li class="">
                <a href="trade.php">Trade</a>
              </li>
              <li class="">
                <a href="realmarket.php">Real Market</a>
              </li>
              <li class="">
                <a href="about.php">About</a>
              </li>
               

               
               <?php

                     if (isset($_COOKIE["username"]))
                      {

                        print '<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="profile.php">Profile</a></li>
                  
          
                  <li class="divider"></li>
                  <li class="nav-header">Actions</li>';

                   print '<li class="">';  
                      print "<a  href = '#' onclick='logout()'>Log Out</a>";
                      print ' </li>';

                  //print'<li><a href="profile.php#reset">Reset Account</a></li></ul></li>';






                     
                      }
                      else
                      {
                        print '<li class="">';
                         print "<a  href = '#'' onclick='login()'>Login</a>";
                         print ' </li>';
                      }
                  ?>


             
          
              
            </ul>
          </div>
        </div>
      </div>
    </div>

<div class="jumbotron masthead">
  <div class="container">
    <h1>Sigma Trader</h1>
    <p>Make real profits trading on our simulated exchange</p>
    <p><a href="trade.php" class="btn btn-primary btn-large" >Start Trading</a></p>
    <ul class="masthead-links">
      <li><a href="http://facebook.com/Sigmatrader" >Facebook Page</a></li>
      <li><a href="http://twitter.com/sigmatrader1" >Twitter</a></li>
      <li>Version 2.1.1</li>
    </ul>
  </div>
</div>

<div class="bs-docs-social">
  <div class="container">
    <ul class="bs-docs-social-buttons">
      
      <li class="follow-btn">
        <a href="https://twitter.com/sigmatrader1" class="twitter-follow-button" data-link-color="#0069D6" data-show-count="true">Follow @sigmatrader</a>
      </li>
      <li class="tweet-btn">
        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://sigmatrader.com" data-count="horizontal" data-via="sigmatrader" data-related="sigmatrader simulated exchange">Tweet</a>
      </li>
    </ul>
  </div>
</div>

<div class="container">

  <div class="marketing">

    <h1>Introducing Real Market</h1>
    <p class="marketing-byline">make simulated trades of real stocks with other users (coming soon)</p>

    <div class="row-fluid">
      <div class="span4">
        <img src="assets/img/ten.png" >
        <h2>Payout at $10 Profit</h2>
        <p>when your account reaches $10.00 profit you can cash out, and a check will be sent to you in the mail. Along with some SigmaTrader extras.</p>
      </div>
      <div class="span4">
        <img src="assets/img/bs-docs-responsive-illustrations.png">
        <br/><br/>
        <h2>Unlimited Accounts</h2>
        <p>Resetting your account is as easy as refreshing the page. But make sure you save your account if you are on a winning streak!</p>
      </div>
      <div class="span4">
        <img src="assets/img/rank.png">
        <h2>Real Profit</h2>
        <p>Even though you do not have to contribute any capital, all of the profits you make are yours thanks to our step sizing algorithm.</p>
      </div>
    </div>

    <hr class="soften">
<!-- Footer
    ===========================================
    <h1>Trading Windows</h1>
    <p class="marketing-byline">Our easy to use trading windows make placing orders simple<a href="http://builtwithbootstrap.tumblr.com/" target="_blank">visit our blog</a> or <a href="./getting-started.html#examples">Browse Trading Windows</a>.</p>
    <div class="row-fluid">
      <ul class="thumbnails example-sites">
        <li class="span3">
          <a class="thumbnail" href="http://soundready.fm/" target="_blank">
            <img src="assets/img/example-sites/soundready.png" alt="SoundReady.fm">
          </a>
        </li>
        <li class="span3">
          <a class="thumbnail" href="http://kippt.com/" target="_blank">
            <img src="assets/img/example-sites/kippt.png" alt="Kippt">
          </a>
        </li>
        <li class="span3">
          <a class="thumbnail" href="http://www.fleetio.com/" target="_blank">
            <img src="assets/img/example-sites/fleetio.png" alt="Fleetio">
          </a>
        </li>
        <li class="span3">
          <a class="thumbnail" href="http://www.jshint.com/" target="_blank">
            <img src="assets/img/example-sites/jshint.png" alt="JS Hint">
          </a>
        </li>
      </ul>
     </div>
======= -->
  </div>

</div>



    <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
        <p class="pull-right"><a href="#">Back to top</a></p>
         <ul class="footer-links">
          <li><a href="http://sigmatrader.blogspot.com">Read the blog</a></li>
          <li><a href="http://facebook.com/Sigmatrader">Facebok Page</a></li>
          <li><a href="http://twitter.com/sigmatrader1">Follow on Twitter</a></li>
        </ul>
      </div>
    </footer>

<script>
    function logout()
{
    
   del_cookie("username");
   del_cookie("password");
   del_cookie("account");
   document.location.reload(true);
    
}
    </script>
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/bootstrap-affix.js"></script>
    <script src="assets/js/application.js"></script>

<script language="javascript">





function readCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  }
  return null;
}

var account = 0.0;

if(readCookie("username"))
{
account = readCookie("account");
} 






function eraseCookie(name) {
  createCookie(name,"",-1);
}

function postRequest(strURL)
{
  var xmlHttp;
  if(window.XMLHttpRequest)
  { // For Mozilla, Safari, ...
    var xmlHttp = new XMLHttpRequest();
  }
  else if(window.ActiveXObject)
  { // For Internet Explorer
    var xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlHttp.open('GET', strURL, true);
  xmlHttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xmlHttp.onreadystatechange = function()
  {
    if (xmlHttp.readyState == 4)
    {
    ajaxloginupdate(xmlHttp.responseText);
  }
  }
xmlHttp.send(strURL);
}

function ajaxloginupdate(str)
{
  if(str=="ok")
  {
     $("#osx-modal-content").html('<div id="osx-modal-title" style="z-index:99999999;">Login</div> <div style="padding-top:20px;"><div style="width:500px; margin-left:20px;" class="alert alert-block alert-info fade in"><button type=button class=close data-dismiss=alert>&times;</button><h4 class=alert-heading>Welcome Back</h4><p>try again or check your email for the password</p></div><form class="form-horizontal" onSubmit="myFunction(); return false;" name="formLogin"  id="formLogin" ><div class="control-group"><label class="control-label"  for="inputEmail">Email</label><div class="controls"><input type="text" id="username" name="username"  placeholder="Email"></div></div><div class="control-group"><label class="control-label" for="inputPassword">Password</label><div class="controls"><input type="password" id="password" name="password" placeholder="Password"></div></div><div class="control-group"><div class="controls"><button  type= "Submit" class="btn">Sign in</button></div></div></form></div>');

     document.location.reload(true);


 
  }
  else
  {
      $("#osx-modal-content").html('<div id="osx-modal-title" style="z-index:99999999;">Login</div> <div style="padding-top:20px;"><div style="width:500px; margin-left:20px;" class="alert alert-block alert-error fade in"><button type=button class=close data-dismiss=alert>&times;</button><h4 class=alert-heading>Oh snap! You got an error!</h4><p>try again or check your email for the password</p></div><form class="form-horizontal" onSubmit="myFunction(); return false;" name="formLogin"  id="formLogin" ><div class="control-group"><label class="control-label"  for="inputEmail">Email</label><div class="controls"><input type="text" id="username" name="username"  placeholder="Email"></div></div><div class="control-group"><label class="control-label" for="inputPassword">Password</label><div class="controls"><input type="password" id="password" name="password" placeholder="Password"></div></div><div class="control-group"><div class="controls"><button  type= "Submit" class="btn">Sign in</button></div></div></form></div>');
  }
}





function registerRequest(strURL)
{
  var xmlHttp;
  if(window.XMLHttpRequest)
  { // For Mozilla, Safari, ...
    var xmlHttp = new XMLHttpRequest();
  }
  else if(window.ActiveXObject)
  { // For Internet Explorer
    var xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlHttp.open('GET', strURL, true);
  xmlHttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xmlHttp.onreadystatechange = function()
  {
    if (xmlHttp.readyState == 4)
    {
     

      $("#osx-modal-content").html(xmlHttp.responseText);
      var n=xmlHttp.responseText.search("error");
      if (n== -1)
      {
         document.location.reload(true); 
      }
      
      
    }
  }
xmlHttp.send(strURL);
}


function sendprofitRequest(strURL)
{
  var xmlHttp;
  if(window.XMLHttpRequest)
  { // For Mozilla, Safari, ...
    var xmlHttp = new XMLHttpRequest();
  }
  else if(window.ActiveXObject)
  { // For Internet Explorer
    var xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlHttp.open('GET', strURL, true);
  xmlHttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xmlHttp.onreadystatechange = function()
  {
    if (xmlHttp.readyState == 4)
    {
    sendprofitupdate(xmlHttp.responseText);
  }
  }
xmlHttp.send(strURL);
}



function sendprofitupdate(str)
{
  if(str=="ok")
  {
    
      
  }
  else
  {
      
  }
}






function loginajax()
{
  var username = window.document.formLogin.username.value;
  var password = window.document.formLogin.password.value;
  //var url = "login.php?username=" + username + "&password=" +password ;
 
} 
</script>

<script>
function myFunction()
{
var username = window.document.formLogin.username.value;
var password = window.document.formLogin.password.value;
var url = "login.php?username=" + username + "&password=" +password ;
postRequest(url);

}


function registerFunction()
{
    var username = window.document.formregister.username.value;
    var password = window.document.formregister.password.value;
    var country = window.document.formregister.country.value;
    var email = window.document.formregister.email.value;
    var url = "register.php?username=" + username + "&password=" +password + "&country=" +country + "&email=" +email+ "&account=" +account;
    registerRequest(url);
    
}


function sendprofit()
{
    
   username = readCookie("username");
   password = readCookie("password");
    var url = "sendprofit.php?username=" + username + "&password=" +password + "&account=" +account;
    sendprofitRequest(url);
    
}

function del_cookie(name) {
document.cookie = name +
'=; expires=Thu, 01-Jan-70 00:00:01 GMT;';
}

function logout()
{
    
   del_cookie("username");
   del_cookie("password");
   del_cookie("account");
   document.location.reload(true);
    
}

</script>
<script>
function login()
{

     $("#osx-modal-content").html('<div id="osx-modal-title" style="z-index:99999999;">Login</div> <div style="padding-top:20px;"><div style="width:500px; margin-left:20px;" class="alert alert-block alert-info fade in"><button type=button class=close data-dismiss=alert>&times;</button><h4 class=alert-heading>enter your username and password</h4><p>An email was sent with your login details</p></div><form class="form-horizontal" onSubmit="myFunction(); return false;" name="formLogin"  id="formLogin" ><div class="control-group"><label class="control-label"  for="inputEmail">Email</label><div class="controls"><input type="text" id="username" name="username"  placeholder="Email"></div></div><div class="control-group"><label class="control-label" for="inputPassword">Password</label><div class="controls"><input type="password" id="password" name="password" placeholder="Password"></div></div><div class="control-group"><div class="controls"><button  type= "Submit" class="btn">Sign in</button></div></div></form></div>');

document.getElementById('modes').click();





}







    var smoothie = new SmoothieChart();
    var currentprice = 0.0;
    var needToConfirm = false;
    var trade = 0.0;
    var execution = 0.0;
    var buy = false;
    var sell = false;
    var flat = true;

    function flatten()
    {
       buy  = false;
      sell = false;
      flat = true;
      account = Number(account) + Number(trade);
      trade = 0.0;

       document.getElementById("opentrade").innerHTML='<div class="well sidebar-nav"> <a class="btn btn-large btn-primary" href="assets/bootstrap.zip">Save Account</a><p>Account: $ <span id="account"></span></p></div>';

       var tmp1 = (Math.round((account)*100)/100).toFixed(2);
       if (tmp1 > 0)
       {
        document.getElementById("account").innerHTML= '<font color = "green">' + String(tmp1) + "</font>";
       }
        if (tmp1 < 0)
       {
        document.getElementById("account").innerHTML= '<font color = "red">' + String(tmp1) + "</font>";
       }
        if (tmp1 == 0)
       {
        document.getElementById("account").innerHTML=  + String(tmp1) ;
       }
        

    }
   
smoothie.streamTo(document.getElementById("mycanvas"));
var canvas = document.getElementsByTagName('canvas')[0];

canvas.width  = document.documentElement.clientWidth;
canvas.height = 280;

var line1 = new TimeSeries();
  var lastVal = 100;
setInterval(function() {
  lastVal += Math.random() < 0.5 ? -0.01 : 0.01;
  line1.append(new Date().getTime(), lastVal);
   
   currentprice = (Math.round(lastVal*100)/100).toFixed(2);
  document.getElementById("currentprice").innerHTML= currentprice;


  if (buy == true )
  {
   
    trade = (Math.round((currentprice-execution)*100)/100).toFixed(2);
    if (trade>0)
    {
        document.getElementById("trade").innerHTML='<font color = "green">' + String(trade) + '</font>' ;
    }
      if (trade<0)
    {
        document.getElementById("trade").innerHTML='<font color = "red">' + String(trade) + '</font>' ;
    }
      if (trade==0)
    {
        document.getElementById("trade").innerHTML= String(trade);
    }
    
   

  }
  if (sell == true )
  {
    trade = (Math.round((execution-currentprice)*100)/100).toFixed(2);
    

       if (trade>0)
    {
        document.getElementById("trade").innerHTML='<font color = "green">' + String(trade) + '</font>' ;
    }
      if (trade<0)
    {
        document.getElementById("trade").innerHTML='<font color = "red">' + String(trade) + '</font>' ;
    }
      if (trade==0)
    {
        document.getElementById("trade").innerHTML= String(trade);
    }

  }
  if(flat == true )
  {
  
  
  
  }


  if(canvas.width  != document.documentElement.clientWidth)
  {
    canvas.width  = document.documentElement.clientWidth; 
  }
  
 
}, 250);

smoothie.addTimeSeries(line1);





    </script>



<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/osx.js'></script>



  </body>
</html>
