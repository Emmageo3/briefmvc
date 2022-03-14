<?php

namespace Brief\models;

use Brief\utils\Helper;

class Domaine
{
    private $id_domaine;
    private $libelle_domaine;

    /**
     * @return mixed
     */
    public function getIdDomaine()
    {
        return $this->id_domaine;
    }

    /**
     * @param mixed $id_domaine
     */
    public function setIdDomaine($id_domaine)
    {
        $this->id_domaine = $id_domaine;
    }

    /**
     * @return mixed
     */
    public function getLibelleDomaine()
    {
        return $this->libelle_domaine;
    }

    /**
     * @param mixed $libelle_domaine
     */
    public function setLibelleDomaine($libelle_domaine)
    {
        $this->libelle_domaine = $libelle_domaine;
    }
    public function all_domaines(){
        $helper = Helper::get_connexion();
        $statement ='SELECT * FROM `domaines`';
        $request = $helper->query($statement);
        return $request->fetchAll();
    }
}