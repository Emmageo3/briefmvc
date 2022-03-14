<?php

namespace Brief\models;
use Brief\utils\Helper;

class Fonction
{
    private $id_fonction;
    private $libelle_fonction;

    /**
     * @return mixed
     */
    public function getIdFonction()
    {
        return $this->id_fonction;
    }

    /**
     * @param mixed $id_fonction
     */
    public function setIdFonction($id_fonction)
    {
        $this->id_fonction = $id_fonction;
    }

    /**
     * @return mixed
     */
    public function getLibelleFonction()
    {
        return $this->libelle_fonction;
    }

    /**
     * @param mixed $libelle_fonction
     */
    public function setLibelleFonction($libelle_fonction)
    {
        $this->libelle_fonction = $libelle_fonction;
    }
    public function add_fonction($libelle_fonction){
        $helper = Helper::get_connexion();
        $statement ='INSERT INTO `fonctions`(`libelle_fonction`) VALUES(?)';
        $request = $helper->prepare($statement);
        $request->execute([$libelle_fonction]);
        return $request->fetch();
    }
    public function get_fonction($id_fonction){
        $helper = Helper::get_connexion();
        $statement ='SELECT * FROM `fonctions` WHERE `id_fonction` =?';
        $request = $helper->prepare($statement);
        $request->execute([$id_fonction]);
        return $request->fetch();
}
    public function update_fonction($id_fonction,$libelle_fonction){
        $helper = Helper::get_connexion();
        $statement ='UPDATE `fonctions` SET `libelle_fonction`=? WHERE `id_fonction`=?';
        $request = $helper->prepare($statement);
        $request->execute([$libelle_fonction,$id_fonction]);
        return $request->fetch();
    }
    public function delete_fonction($id_fonction){
        $helper = Helper::get_connexion();
        $statement ='DELETE FROM `fonctions` WHERE `id_fonction` =?';
        $request = $helper->prepare($statement);
        $request->execute([$id_fonction]);
        return $request->fetch();
    }
    public function all_fonctions(){
        $helper = Helper::get_connexion();
        $statement ='SELECT * FROM `fonctions`';
        $request = $helper->query($statement);
        return $request->fetchAll();
    }
}