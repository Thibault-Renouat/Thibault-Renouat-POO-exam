<?php

class CarsController {

    public function addCarForm(){

        require 'view/addCarsForm.php';
    }

    public function addCarInBdd()
    {
        $boite=0;
        if($_POST['automatique']==on){
            $boite=1;
        }

        // todo fonction upload avec un return de  l'unique id

        $car = new Cars($_POST['marque'],$_POST['modele'],$_POST['energie'],$boite);
        $carsManager=new CarsManager();
        $carsManager->add($car);
        header('Location: index.php');

    }

}