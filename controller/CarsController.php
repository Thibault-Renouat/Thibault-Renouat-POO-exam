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

    public function CarDetail($id)
    {
        $carsManager= new CarsManager();
        $car=$carsManager->getOneById($id);

//        var_dump($car); die();

        require 'view/carDetail.php';

    }

    public function deleteCar($id)
    {

        $carsManager= new CarsManager();
        $carsManager->delete($id);

        header('Location: index.php');

    }

}