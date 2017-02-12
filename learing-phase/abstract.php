<?php
    abstract class Animal {
        public $name;
        public $color;
    
    public function describe() {
        return $this->name . " is " . $this->color;
    }
    public abstract function makeSound();

    }

class Dog extends Animal {
    public function describe() {
        return parent::describe();
    }

    public function makeSound() {
        return 'Bow Bow';
    }
}

class Cat extends Animal {
    public function describe() {
        return parent::describe();
    }

    public function makeSound() {
        return 'Meau Meau';
    }
}

$animal = new Dog();
$animal->name = "Ashok";
$animal->color = "Brown";

echo $animal->describe();
echo $animal->makeSound();




?>