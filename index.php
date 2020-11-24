<?php
session_start();

if(!empty($_SESSION["username"])) {
    header("Location: welcome.php");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login page</title>
    </head>
    <body>
        <form method="POST" action="login.php">
            <label>Username</label>
            <input type="text" name="username" placeholder="Username"><br>
            <label>Password</label>
            <input type="password" name="password" placeholder="Password"><br>
            <label>Access</label>
            <input type="checkbox" name="access"><br>
            <button type="submit">Sign in!</button>
        </form></br>
        <a href="registration.html">You already have a registration ?</a>
    </body>
</html>