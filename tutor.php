<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("index.php");
    exit;
}
if(isset($_POST['submitted']))
{
   if($fgmembersite->RegisterCourse())
   {
        $fgmembersite->RedirectToURL("course-registered.html");
   }
}
if(isset($_POST['deletesubmitted']))
{
   if($fgmembersite->DeleteCourse())
   {
        $fgmembersite->RedirectToURL("course-deleted.html");
   }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Tutor Page</title>
        <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
        <link rel="stylesheet" href="style/base.css">  
        <link rel="stylesheet" href="style/main.css">
        <link rel="stylesheet" href="style/vendor.css">  
        <script src="scripts/modernizr.js"></script>
        <script>
            function changeAlert() {
                alert("Dude, gimme a break! Do you realize how many methods I have to write to let you change your course? Just delete it and add a new one");
            }
        </script>
</head>
<body id="top">

	<!-- header 
   ================================================== -->
     <header>

   	<div class="row">
   	    <h5>Tutor Dashboard</h5>
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
   
	<!-- intro section
   ================================================== -->

        <section id="process">	
            <div class="row">
            </div>
            <div class="row">
                <div id='fg_membersite'>
                    <form id='insertcourse' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
                        <fieldset>
                            <legend>Insert Course</legend>

                            <input type='hidden' name='submitted' id='submitted' value='1'/>
                            <input type='hidden' name='userid' id='userid' value='<?= $fgmembersite->UserID() ?>'/>
                            <div class='short_explanation'>* required fields</div>

                            <div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
                            <div class='container'>
                                <label for='name' >Course Name*: </label>
                                <input type='text' name='coursename' id='coursename' value='<?php echo $fgmembersite->SafeDisplay('Course Name') ?>' maxlength="50" />
                                <span id='register_name_errorloc' class='error'></span>
                            </div>
                            <div class='container'>
                                <label for='hourrate' >Hour Rate*:</label>
                                <input type='number' name='hourrate' id='hourrate' value='<?php echo $fgmembersite->SafeDisplay('Hour Rate') ?>' maxlength="10" />
                            </div>
                            <div class='container'>
                                <input type='submit' name='Submit' value='Submit' />
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
             <div class="row">
                <div id='fg_membersite'>
                <form id='deletecourse' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
                    <fieldset>
                        <legend>Check your Courses</legend>
    
                        <input type='hidden' name='deletesubmitted' id='deletesubmitted' value='1'/>
                        <input type='hidden' name='userid' id='userid' value='<?= $fgmembersite->UserID() ?>'/>
                        <p>
                            <?PHP
                                require_once("./include/fg_membersite.php");
                                !$fgmembersite->FetchCourseFromDB($fgmembersite->UserID());
                            ?>
                        </p>
                        <div class='container'>
                            <input type='submit' name='Submit' value='Delete Selected' />
                            <button onclick="changeAlert()">Change Selected</button>
                        </div>
                    </fieldset>
                </form>
            </div>
  <?PHP      
        if($fgmembersite->UserType()=='st')
{
    echo "<br><br><a href='student_tutor.php'>Go back to the Student Tutor Page</a>";
}
?>
        </section>
        
        

    <script src="scripts/jquery-1.11.3.min.js"></script>
    <script src="scripts/jquery-migrate-1.2.1.min.js"></script>
    <script src="scripts/plugins.js"></script>
    <script src="scripts/main.js"></script>
</body>
</html>
