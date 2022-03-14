<?php

namespace Brief\models;

use Brief\utils\Helper;

class Dispositif
{
 private $id_dispositif;
 private $libelle_dispositif;

    /**
     * @return mixed
     */
    public function getIdDispositif()
    {
        return $this->id_dispositif;
    }

    /**
     * @param mixed $id_dispositif
     */
    public function setIdDispositif($id_dispositif)
    {
        $this->id_dispositif = $id_dispositif;
    }

    /**
     * @return mixed
     */
    public function getLibelleDispositif()
    {
        return $this->libelle_dispositif;
    }

    /**
     * @param mixed $libelle_dispositif
     */
    public function setLibelleDispositif($libelle_dispositif)
    {
        $this->libelle_dispositif = $libelle_dispositif;
    }
    public function all_dispositifs(){
        $helper= Helper::get_connexion();
        $statement ='SELECT * FROM `dispositifs_de_formations`';
        $request = $helper->query($statement);
        return $request->fetchAll();
    }
}