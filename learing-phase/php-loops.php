<?php 
    // for loop
    for($i = 0; $i < 5; $i++) {
        echo $i;
    }

    // while loop
    $i = 0;
    while($i < 5) {
        echo $i;
        $i++;
    }

    // for array

    $forEachLoops = [1,2,3,4,5,6];
    foreach($forEachLoops as $tempVar) {
        echo $tempVar;
    }

    // foreach for key value pair
    $keyValueArray = array(
        'key1' => 'one',
        'key2' => 'two',
        'key3' => 'three'
    );
    foreach($keyValueArray as $key => $value) {
        echo $key. " ".$value;
    }



?>