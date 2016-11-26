<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("index.php");
    exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Student Page</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
        <link rel="stylesheet" href="style/base.css">  
        <link rel="stylesheet" href="style/main.css">
        <link rel="stylesheet" href="style/vendor.css">  
        <script src="scripts/modernizr.js"></script>
</head>
<body id="top">

	<!-- header 
   ================================================== -->
     <header>

   	<div class="row">
   	    <h5>Student Dashboard</h5>
	   	<nav id="main-nav-wrap">
				<ul class="main-navigation">
					<li class="highlight with-sep">Logged in as: <?= $fgmembersite->UserFullName() ?></li>
					<li class="smoothscroll"><a   href="login-home.php" title="">Home</a></li>
					<li class="smoothscroll"><a   href="reset-pwd-req.php" title="">Reset Password</a></li>
					<li class="highlight with-sep"><a href="logout.php" title="">Log Out</a></li>					
				</ul>
			</nav>
			<a class="menu-toggle" href="#"><span>Menu</span></a>
   		
   </div>
   	
   </header> <!-- /header -->
    <section id="process">	
            <div class="row">
                <a class="button stroke" href='list_tutors.php'>Find a tutor and subject</a>
            </div>
    </section>
    <script src="scripts/jquery-1.11.3.min.js"></script>
    <script src="scripts/jquery-migrate-1.2.1.min.js"></script>
    <script src="scripts/plugins.js"></script>
    <script src="scripts/main.js"></script>
</body>
</html>
