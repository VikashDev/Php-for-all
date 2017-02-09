<?php 
    // implode (convert array in string)

    $arr = array('a', 'b', 'c', 'd', 'e');
    $newArray = implode(', ', $arr);
    echo $newArray;

    // explode (string to array converstion)

    $var = "a,b,c,d,e,f";
    $var2 = explode(',' , $var);

    print_r($var2);

    // upper case first letter in a sentance

    ucwords('hello world');


    strtoupper('hello world');

    count($arr); // count the number in arrary
    sort($arr); // sort the array






?>