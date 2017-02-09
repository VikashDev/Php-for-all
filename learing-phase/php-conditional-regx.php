<?php 

// if - condition

$x = 10;

if($x < 10) {
    echo "do this";
} else {
    echo "do that";
}

if($x < 5 && $x > 7) {
    echo "do this ";
} else {
    echo " do that";
}

if($x == 10) {
    echo "do this";
}


// elseif

if($x < 5) {
    echo "Do this";
} elseif($x < 7) {
    echo "Do that";
} else {
    echo "This is the last else";
}


// Switch 

    switch($x) {
        case 1 : echo "do this"; break;
        case 2 : echo "do that"; break;
        case 3 :  echo "do both"; break;
        default : echo " do nothing";
    }



if(preg_match("/ell", "Hello World", $matches)) {
    echo "Match was found";
    echo $matches[0];
}


// webcheatsheet.com/php/regular_expressions.php

// foo - the string will in the sentance
// ^foo - foo at the start of a string 
// foo$ - foo at 
// ^foo$
// [abc]
// [a-z]
// [^A-z]
// (gif|jpg)
// [a-z]+
// 


?>












