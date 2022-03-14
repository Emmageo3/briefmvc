<?php

namespace Brief\models;

use Brief\utils\Helper;

class Regime
{
 private $id_regime;
 private $libelle_regime;

    /**
     * @return mixed
     */
    public function getIdRegime()
    {
        return $this->id_regime;
    }

    /**
     * @param mixed $id_regime
     */
    public function setIdRegime($id_regime)
    {
        $this->id_regime = $id_regime;
    }

    /**
     * @return mixed
     */
    public function getLibelleRegime()
    {
        return $this->libelle_regime;
    }

    /**
     * @param mixed $libelle_regime
     */
    public function setLibelleRegime($libelle_regime)
    {
        $this->libelle_regime = $libelle_regime;
    }
    public function all_regimes(){
        $helper = Helper::get_connexion();
        $statement ='SELECT * FROM `regimes`';
        $request = $helper->query($statement);
        return $request->fetchAll();
}
}