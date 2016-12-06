<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('Please Help Me');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('tiago.cruz@yale.edu');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'us-cdbr-iron-east-04.cleardb.net',
                      /*username*/'bcba31cf84da31',
                      /*password*/'f51d57ee',
                      /*database name*/'heroku_fed2d83060b70ed',
                      /*table name*/'maintable');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('qSRcVS6DrTzrPvr');

?>