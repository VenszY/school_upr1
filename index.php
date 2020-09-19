<?php

    echo "Hello World ! <br>";

    $username = "Vnesz";
    echo $username."<br>";
    $age = 22;
    echo $age."<br>";
    $bool = 1123;
    print_r($bool."<br><br>"); 
    $array = [true, false, 3689, "true"];
    foreach ($array as $arrval)
        {
            echo $arrval." | ";
        }
    