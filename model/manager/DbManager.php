<?php


class dbManager
{

    protected $bdd;
    public $bddConnected=0;
    private $host = 'localhost';
    private $dbName = 'cars';
    private $username = 'root';
    private $password = 'root';

    public function __construct()
    {

        try {
            $this->bdd = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->dbName, $this->username, $this->password);
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->bddConnected=1;



        } catch (Exception $e) {
            die('Erreur ' . $e->getMessage());
        }
    }


}