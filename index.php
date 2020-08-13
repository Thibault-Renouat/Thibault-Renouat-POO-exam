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

}elseif (($_GET['controller']==='cars'  AND  $_GET['action']=== 'detail' AND isset($_GET['id']))){

    $carsController->CarDetail($_GET['id']);

}elseif (($_GET['controller']==='cars'  AND  $_GET['action']=== 'delete' AND isset($_GET['id']))){

    $carsController->deleteCar($_GET['id']);


}else {


    echo 'vérifie tes paramètres d\'url cher padawan développeur :) ';

}
