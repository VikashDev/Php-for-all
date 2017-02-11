<?php 
    class User {

        // public     -- accessible to all class
        // protected  -- same & extends child class 
        // private    -- same class only
        public $id;
        public $username;
        public $email;
        public $password;




      // constructor
        public function __construct() {
            echo "Hello I found you";
        }

      // method
        public function register() {
            echo 'User Register';
        }

     // 
        public function login($username, $password) {
            $this->username = $username;
            $this->password = $password;
            $this->auth_user();
        }

        public function auth_user() {
            echo $username. ' is authenticated';
        }
        // destructor
        public function __destruct() {
            echo 'Destructor Called';
        }
    }

$User = new User;
$User->register();






?>