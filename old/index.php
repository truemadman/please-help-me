<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="indexScript.js"></script>
        <title>Pleae Help Me</title>
    </head>
    <body>
        <h1>Welcome to the Please Help me App Page!</h1>
        <div>
            <h2>Please Help Me connects students and teachers</h2>
        </div>
        <button id="loginButton" type="button">Login</button> 
        <button type="button" onclick="window.location.href='subscribe.html'">Subscribe</button> 
        <div id="loginForm" style="display:none;">
            <form id='login' action='login.php' method='post' accept-charset='UTF-8'>
                <fieldset >
                    <legend>Login</legend>
                    <input type='hidden' name='submitted' id='submitted' value='1'/>
                    <label for='username' >UserName*:</label>
                    <input type='text' name='username' id='username'  maxlength="50" />
                    <label for='password' >Password*:</label>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <input type='submit' name='Submit' value='Submit' />
                </fieldset>
            </form>
        </div>
    </body>
</html>