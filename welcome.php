<?php
session_start();
    if(empty($_SESSION["username"])) {
        header("Location: index.php");
    }
echo 
"
<html>
    <head>
        <meta charset='UTF-8'>
        <title>Welcome page</title>
    </head>
    <body>
        <H1>Welcome!".$_SESSION["username"]."</H1>
    </body>
</html>
";

