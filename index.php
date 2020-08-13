<?php
require 'includes.php';
$defaultController= new DefaultController();
$carsController= new CarsController();

if(empty($_GET)) {

    $defaultController->homePage();

}
