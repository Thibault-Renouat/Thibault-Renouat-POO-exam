<?php


class Cars
{
    private $marque;
    private $modele;
    private $energie;
    private $automatique;
    private $image;

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * @param mixed $modele
     */
    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    /**
     * @return mixed
     */
    public function getEnergie()
    {
        return $this->energie;
    }

    /**
     * @param mixed $energie
     */
    public function setEnergie($energie)
    {
        $this->energie = $energie;
    }

    /**
     * @return mixed
     */
    public function getAutomatique()
    {
        return $this->automatique;
    }

    /**
     * @param mixed $automatique
     */
    public function setAutomatique($automatique)
    {
        $this->automatique = $automatique;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * Cars constructor.
     * @param $marque
     * @param $modele
     * @param $energie
     * @param $automatique
     * @param $image
     */
    public function __construct($marque, $modele, $energie, $automatique, $image)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->energie = $energie;
        $this->automatique = $automatique;
        $this->image = $image;
    }


}