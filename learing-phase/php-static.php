<?php

    // Declaring class properties or methods as static makes them accessible without needing an instantiation of the class. A property declared as static cannot be accessed with an instantiated class object (though a static method can).

    class User {
        public $username;
        public static $minPassword = 5;

        public static function validatePassword($password) {
            if(strlen($password) >= self::$minPassword) {
                return true;
            } else {
                return false;
            }
        }
    }

    $password = "password";


    // No class are instraction

    // accesing the property 
    echo User::$minPassword;
    // accessing the methods 
    if(User::validatePassword($password)) {
        echo "valid";
    } else {
        echo "invalid";
    }




?>