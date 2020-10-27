<?php
session_start();
$servername = "localhost";
$db = "school_upr1";
$db_username = "root";
$db_password = "";
$connection;
try {
    $connection = new PDO(
        "mysql:host=$servername;dbname=$db",
        $db_username,
        $db_password
    );
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}




if(isset($_POST) && !empty($_POST))
    {
        if(!empty($_POST["username"]) && !empty($_POST["password"]))
            {
                $sql = "INSERT INTO
                            user_credentials(`id`,`username`,`password`)
                        VALUES
                            (NULL,'".$_POST["username"]."','".$_POST["password"]."')";
                            
                        ;
                $connection->exec($sql);
                header("Location: index.html");

            }
        else 
            {   
                echo "missing required params";    
            }    
}
