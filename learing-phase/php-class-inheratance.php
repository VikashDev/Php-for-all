<?php
        // public  - accessable to all the class
        // protected - accessacle to same & its child class (inside only)
        // private - accessable to same class only

    class First {
        public $id;
        public $name = "Vikash";    
        public function saySomething() {
            echo "Something";
        }

    }

    class Second extends First {
    }

    $var = new Second;
    echo  $var->name;
    echo $var->saySomething();


?>