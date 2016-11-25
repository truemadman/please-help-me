<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
if(isset($_POST['submitted']))
{
   if($fgmembersite->RegisterCourse())
   {
        $fgmembersite->RedirectToURL("course-registered.html");
   }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Tutor Page</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
     
</head>
<body>
<div id='fg_membersite_content'>
<h2>This is the Tutor Page!</h2>
This page can be accessed only by Tutors!
<p>
Logged in as: <?= $fgmembersite->UserFullName() ?></br>
Your UserID is: <?= $fgmembersite->UserID() ?></br>
Your UserName is: <?= $fgmembersite->Username() ?></br>
</p>
<div id='fg_membersite'>
    <form id='insertcourse' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
        <fieldset>
        <legend>Insert Course</legend>

        <input type='hidden' name='submitted' id='submitted' value='1'/>
        <input type='hidden' name='userid' id='userid' value='<?= $fgmembersite->UserID() ?>'/>
        <div class='short_explanation'>* required fields</div>

        <div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
        <div class='container'>
            <label for='name' >Course Name*: </label><br/>
            <input type='text' name='coursename' id='coursename' value='<?php echo $fgmembersite->SafeDisplay('Course Name') ?>' maxlength="50" /><br/>
            <span id='register_name_errorloc' class='error'></span>
        </div>
        <div class='container'>
            <label for='hourrate' >Hour Rate*:</label><br/>
            <input type='number' name='hourrate' id='hourrate' value='<?php echo $fgmembersite->SafeDisplay('Hour Rate') ?>' maxlength="10" /><br/>
        </div>
        <div class='container'>
            <input type='submit' name='Submit' value='Submit' />
        </div>
        </fieldset>
    </form>
</div>
<div>Check your Courses</div>
<div id='fg_membersite_content'>
    <p>
        <?PHP
        require_once("./include/fg_membersite.php");
        !$fgmembersite->FetchCourseFromDB($fgmembersite->UserID());
        ?>
    </p>
</div>

<p>
<a href='login-home.php'>Home</a>
<a href='reset-pwd-req.php'>Reset Password</a>
<a href='logout.php'>Log Out</a>
</p>
</div>
</body>
</html>
