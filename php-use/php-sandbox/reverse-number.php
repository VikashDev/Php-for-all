<?php 
    $var = readline('Enter the Number');
    $reverse = 0;
    while(($var != 0)) {
        $reverse = $reverse* 10 + $var % 10;   
        $var =  $var / 10;
    }

    echo $reverse;
?>