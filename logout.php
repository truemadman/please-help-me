<?PHP
require_once("./include/membersite_config.php");

$fgmembersite->LogOut();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <title>LogOut</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
        <link rel="STYLESHEET" type="text/css" href="style/pwdwidget.css" />
        <link rel="stylesheet" href="style/base.css">  
        <link rel="stylesheet" href="style/main.css">
        <link rel="stylesheet" href="style/vendor.css">  
        <script src="scripts/modernizr.js"></script>
        <script src="scripts/pwdwidget.js" type="text/javascript"></script>      
        <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
</head>
<body>
 <header>

   	<div class="row">


	   	<nav id="main-nav-wrap">
				<ul class="main-navigation">
					<li class="current"><a class="smoothscroll"  href="#intro" title="">Home</a></li>
					<li><a class="smoothscroll"  href='index.php#process' title="">Log In</a></li>
					<li class="highlight with-sep"><a class="smoothscroll" href='index.php#pricing' title="">Sign Up</a></li>					
				</ul> 
			</nav>

			<a class="menu-toggle" href="#"><span>Menu</span></a>
   		
   	</div>   	
   	
   </header> <!-- /header -->

	<!-- intro section
   ================================================== -->
   <section id="intro">

   	<div class="shadow-overlay"></div>

   	<div class="intro-content">
   		<div class="row">

   			<div class="col-twelve">

                        <h1>You have logged out</h1>
	   			<h5>Login Again</h5>
	   			

	   			<a class="button stroke" href='index.php#process' title="">Log In</a>
	   			

	   		</div>  
   			
   		</div>   		 		
   	</div> 

   </section> <!-- /intro -->

    <script src="scripts/jquery-1.11.3.min.js"></script>
    <script src="scripts/jquery-migrate-1.2.1.min.js"></script>
    <script src="scripts/plugins.js"></script>
    <script src="scripts/main.js"></script>
</body>
</html>