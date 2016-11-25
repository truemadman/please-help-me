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
      <title>Student Page</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
</head>
<body>
<div id='fg_membersite_content'>
<h2>This is the Student Page!</h2>
This page can be accessed only by Students!
<p>
Logged in as: <?= $fgmembersite->UserFullName() ?>
</p>
<p>
<a href='list_tutors.php'>Find a tutor and subject</a>
</p>
<p>
<a href='login-home.php'>Home</a>
</p>
</div>
</body>
</html>