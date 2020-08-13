<?php
require 'includes.php';
$defaultController= new DefaultController();
$carsController= new CarsController();

if(empty($_GET)) {

    $defaultController->homePage();

}elseif (($_GET['controller']==='cars'  AND  $_GET['action']=== 'add')){

    $carsController->addCarForm();

}elseif (($_GET['controller']==='cars'  AND  $_GET['action']=== 'addBdd')){

    $carsController->addCarInBdd();

}else {


    echo 'vérifie tes paramètres d\'url cher padawan développeur :) ';

}
