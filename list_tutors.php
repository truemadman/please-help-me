<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Tutor Listing</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
        <link rel="stylesheet" href="style/base.css">  
        <link rel="stylesheet" href="style/main.css">
        <link rel="stylesheet" href="style/vendor.css">  
        <script src="scripts/modernizr.js"></script>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
</style>
</head>


<body>
    	<!-- header 
   ================================================== -->
     <header>

   	<div class="row">
   	    <h5>Student Dashboard</h5>
	   	<nav id="main-nav-wrap">
				<ul class="main-navigation">
					<li class="highlight with-sep">Logged in as: <?= $fgmembersite->UserFullName() ?></li>
					<li class=""><a   href="login-home.php" title="">Home</a></li>
					<li class=""><a   href="reset-pwd-req.php" title="">Reset Password</a></li>
					<li class="highlight with-sep"><a href="logout.php" title="">Log Out</a></li>					
				</ul>
			</nav>
			<a class="menu-toggle" href="#"><span>Menu</span></a>
   		
   </div>
   	
   </header> <!-- /header -->
    <section id="process">	
    <script src="scripts/jquery-1.11.3.min.js"></script>
    <script src="scripts/jquery-migrate-1.2.1.min.js"></script>
    <script src="scripts/plugins.js"></script>
    <script src="scripts/main.js"></script>
    
    
    
<div id='fg_membersite_content'>
<h2>Tutor Listing!</h2>
<p>
<?PHP
require_once("./include/fg_membersite.php");
!$fgmembersite->ListTutors();
?>


  </div>
</p>
<p>
<a href='student.php'>Go back to your Student Profile Page</a>
</p>
<p>
<a href='login-home.php'>Home</a>
</p>

</body>
</html>
