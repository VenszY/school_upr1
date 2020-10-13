<?php
session_start();
$usertest="test";
$passtest="123";
if(isset($_POST) && !empty($_POST))
    {
        if(!empty($_POST["username"]) && !empty($_POST["password"]))
            {
                if($_POST["username"] === $usertest && $_POST["password"] === $passtest) 
                {   
                    $_SESSION["username"] = $usertest;
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
