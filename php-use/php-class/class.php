<?php 
    class Human {
        public $name;
        public $age;
        public $sex;
        private $account;
        // creating constructer in php
        public function __construct() {

        }

    public function walk() {
        echo " Human can walk";
    }

    public function setMake($make) {
        $this->make = $make;
    }

    public function getMake() {

    }

    }

    class Car {
        private $model;
        private $price;

        public function __construct($model, $price) {
            $this->model = $model;
            $this->price = $price;
        }


        public function getPrice() {
            return $this->price;
        }


    }





?>