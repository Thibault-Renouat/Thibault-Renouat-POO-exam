<?php

class CarsManager extends DbManager {


    public function __construct()
    {
        parent::__construct();
    }


        public function selectAll(){

            $cars = [];
            $query= 'SELECT * FROM car;';
            foreach ($this->bdd->query($query) as $row){


                $cars[]= new Cars($row['marque'],$row['modele'],$row['energie'],$row['est_automatique'],$row['image'],$row['id']);

            }
            return $cars;

        }
}