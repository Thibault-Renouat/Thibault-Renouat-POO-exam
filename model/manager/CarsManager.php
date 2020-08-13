<?php

class CarsManager extends DbManager
{


    public function __construct()
    {
        parent::__construct();
    }


    public function selectAll()
    {

        $cars = [];
        $query = 'SELECT * FROM car;';
        foreach ($this->bdd->query($query) as $row) {


            $cars[] = new Cars($row['marque'], $row['modele'], $row['energie'], $row['est_automatique'], $row['image'], $row['id']);

        }
        return $cars;

    }

    public function add(Cars $car)
    {

        $marque = $car->getMarque();
        $modele = $car->getModele();
        $energie = $car->getEnergie();
        $automatique = $car->getAutomatique();
        $image = $car->getImage();


        $query= $this->bdd->prepare('INSERT INTO car (marque, modele, energie, est_automatique,image) VALUES  (?,?,?,?,?)');
        $query->bindParam(1,$marque);
        $query->bindParam(2,$modele);
        $query->bindParam(3,$energie);
        $query->bindParam(4,$automatique);
        $query->bindParam(5,$image);
        $query->execute();


    }

    public function getOneById($id)
    {
        $query = $this->bdd->prepare("SELECT * FROM car WHERE id=?");
        $query->bindParam(1, $id);
        $query->execute();
        $res = $query->fetch();

        $cars= new Cars($res['marque'], $res['modele'], $res['energie'], $res['est_automatique'], $res['image'], $res['id']);


        return $cars;
    }

    public function delete($id)
    {

        $query = $this->bdd->prepare('DELETE FROM car where id = ?');
        $query->bindParam(1,$id);
        $query->execute();


    }
}