<?php

class DefaultController {

    public function homepage(){
        $carsManager= new CarsManager();
        $carTable= $carsManager->selectAll();

        require 'view/cars.php';

    }

}