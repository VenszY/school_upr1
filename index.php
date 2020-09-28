<?php
    // echo "Hello World ! <br>";

    // $username = "Vnesz";
    // echo $username."<br>";
    // $age = 22;
    // echo $age."<br>";
    // $bool = 1123;
    // print_r($bool."<br><br>"); 
    // $array = [true, false, 3689, "true"];
    // foreach ($array as $arrval)
    //     {
    //         echo $arrval." | ";
    //     }
    
    $classStartAt = 420;
    $classStartAt2 = 500;
    // if($classStartAt > $classStartAt2)
    // {
    //     echo "Its too early anyway, I am not coming";
    // }
    // else 
    // {
    //     echo "WTF ?!";
    // }

    switch($classStartAt){
        case $classStartAt > $classStartAt2 : 
            echo "case 1";
            break;
        case $classStartAt < $classStartAt2:
            echo "case 2";
            break;
        default : 
            echo "else text";
    }