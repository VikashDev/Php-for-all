<?php include ''; ?>
<?php include_once '' ; // programs go on?>
<?php require '' ; ?>
<?php require '' ; // halts the program?>


<?php 
        // without parameter
    function className() {
        echo "hello function";
    }

        // default parameter
    function className2($parm1, $pram2 = "default") {
        echo $pram1. ' ' .$word2;
    }

    className('Hello');
    className2('Hello');
    className2('Hello','other para');

    function add($a, $b) {
        return $a + $b;
    }

    $sum = add(2, 3);
    echo $sum;


// some inbuilt function

$phrase = 'I like to eat apple';
$phrase = str_replace('apples', 'oranges', $pharse);
echo $phrase;

?>