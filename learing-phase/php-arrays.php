<?php
// notice basic syntax of indexed based 0, 1, 2 ,3 ...

$arr = array('one', 2, 'three', 4, 'five'); // notice element pattern
$arr2 = ['one', 2, 'three', 4, 'five']; // same with some change syntax

// print the array for devlopment purpose
    print_r($arr);


//access the element

echo $arr[0]; 
echo $arr2[1];

// array with our own key based 

$arr3 = array (
    "key1" => "hello",
    "key2" => "hi hello",
    "key3" => "just hi"
);

echo $arr3['key1'];
echo $arr3['key2'];

// Some useful full funtion of array

echo  count($arr3); // count the elments
echo array_pop($arr3); // just return the last element


?>