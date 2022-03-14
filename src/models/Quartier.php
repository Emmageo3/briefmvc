<?php

namespace Brief\models;

use Brief\utils\Helper;

class Quartier
{
    private $id_quartier;
    private $nom_quartier;
    /**
     * @return mixed
     */
        public function getIdQuartier()
        {
            return $this->id_quartier;
        }/**
         * @param mixed $id_quartier
         */
        public function setIdQuartier($id_quartier)
        {
            $this->id_quartier = $id_quartier;
        }/**
         * @return mixed
         */
        public function getNomQuartier()
        {
            return $this->nom_quartier;
        }/**
         * @param mixed $nom_quartier
         */
        public function setNomQuartier($nom_quartier)
        {
            $this->nom_quartier = $nom_quartier;
        }
        public function all_quartier(){
            $helper = Helper::get_connexion();
            $statement = 'SELECT * FROM `quartiers`';
            $request = $helper->query($statement);
            return $request->fetchAll();
        }
}