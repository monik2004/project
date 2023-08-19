<?php
    $tomail="monikrupareliya123@gmail.com";
    $sub="xyz";
    $otp = random_int(0,9). random_int(0,9). random_int(0,9). random_int(0,9)   ;
    echo $otp;
    $body = $otp ;
    $header="From: rupareliyamonik3@gmail.com";

    if (mail($tomail,$sub,$body,$header)) {
        echo "
      
        ";
    } else {
        echo "No";
    }
    
?>