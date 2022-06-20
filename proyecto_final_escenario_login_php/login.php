<!--
CURSO: HACKING Y CERTIFICACIÓN WEB
ARCHIVO: HOME.PHP
Presenta el formulario de login
-->

<!DOCTYPE html>
<html>
    <head>

        <title>LOGIN</title>
        <link rel="stylesheet" type="text/css" href="./css/style.css">

    </head>
    <body>

    <div class="container">
    <form method="post" action="check.php">
        <div id="div_login">
            <h1>Login</h1>
            <div>
                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            </div>
            <div>
                <input type="submit" value="Submit" name="but_submit" id="but_submit" />
            </div>
        </div>
    </form>
    </div>

    </body>
</html>