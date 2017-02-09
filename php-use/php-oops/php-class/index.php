<?php include "class.php"; ?>


<?php 
$human1 = new Human();
$human1->name = "John";
echo $human1->name;
echo $human->walk();

$human1->setMake('bank account');

$car1 = new Car('fox', 2000);
$car1->getPrice();








?>