<?php
class Student {
    public $name1 = "abc";
    public $name2 = "bbc";
    public $name3 = "ccc";
    public $name4 = "ddc";
    private $name5 = "eec";

    // public function iteration() {
    //     foreach($this as $key => $value) {
    //         echo $key . " is ". $value . "\n";
    //     }
    // }


}

$student  =  new Student;


        foreach($student as $key => $value) {
            echo $key . " is ". $value . "\n";
        }

//$student->iteration();



?>