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
                                $sql = "SELECT 
                            * 
                        FROM
                            user_credentials
                        WHERE
                            username = '".$_POST["username"]."' AND
                            password = '".$_POST["password"]."'
                        LIMIT 1";
                                    
                                ;
                $stmt = $connection->query($sql);
                $user = $stmt->fetchAll();

                if(!empty($user)) 
                {   
                    $_SESSION["username"] = $user[0]["username"];
                    header("Location: welcome.php");
                }
                else
                {
                    header("Location: index.html");
                }
            }
        else 
            {   
                echo "missing required params";    
            }    
    }
