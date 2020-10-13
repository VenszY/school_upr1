<?php
session_start();
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

