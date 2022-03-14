<?php

namespace Brief\models;
use Brief\utils\Helper;

class Repondant
{
    private $id_repondant;
    private $prenom_repondant;
    private $nom_repondant;
    private $telephone_repondant;
    private $courriel;
    private $id_fonction;

    /**
     * @return mixed
     */
    public function getIdRepondant()
    {
        return $this->id_repondant;
    }

    /**
     * @param mixed $id_repondant
     */
    public function setIdRepondant($id_repondant)
    {
        $this->id_repondant = $id_repondant;
    }

    /**
     * @return mixed
     */
    public function getPrenomRepondant()
    {
        return $this->prenom_repondant;
    }

    /**
     * @param mixed $prenom_repondant
     */
    public function setPrenomRepondant($prenom_repondant)
    {
        $this->prenom_repondant = $prenom_repondant;
    }

    /**
     * @return mixed
     */
    public function getNomRepondant()
    {
        return $this->nom_repondant;
    }

    /**
     * @param mixed $nom_repondant
     */
    public function setNomRepondant($nom_repondant)
    {
        $this->nom_repondant = $nom_repondant;
    }

    /**
     * @return mixed
     */
    public function getTelephoneRepondant()
    {
        return $this->telephone_repondant;
    }

    /**
     * @param mixed $telephone_repondant
     */
    public function setTelephoneRepondant($telephone_repondant)
    {
        $this->telephone_repondant = $telephone_repondant;
    }

    /**
     * @return mixed
     */
    public function getCourriel()
    {
        return $this->courriel;
    }

    /**
     * @param mixed $courriel
     */
    public function setCourriel($courriel)
    {
        $this->courriel = $courriel;
    }

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
    public function all_repondants(){
        $helper = Helper::get_connexion();
        $statement = 'SELECT * FROM `repondants`';
        $request = $helper->query($statement);
        return $request->fetchAll();
    }
    public function find($id_repondant){
        $helper = Helper::get_connexion();
        $statement = 'SELECT * FROM `repondants` WHERE `id_repondant` = ?';
        $request = $helper->prepare($statement);
        $request->execute([$id_repondant]);
        return $request->fetch();
    }
    public function add_repondant(Repondant $repondant){
        $helper = Helper::get_connexion();
        $statement = 'INSERT INTO `repondants`(`prenom_repondant`,`nom_repondant`,`telephone_repondant`,`courriel`,`id_fonction`)
                      VALUES(?,?,?,?,?)';
        $request = $helper->prepare($statement);
        $request->execute([
            $repondant->getPrenomRepondant(),
            $repondant->getNomRepondant(),
            $repondant->getTelephoneRepondant(),
            $repondant->getCourriel(),
            $repondant->getIdFonction()
        ]);
        return $repondant;
    }
    public function get_last_repondant(){
        $helper = Helper::get_connexion();
        $statement ='SELECT * FROM `repondants` ORDER BY id_repondant DESC LIMIT 1 ';
        $request = $helper->query($statement);
        return $request->fetch();
    }
    public function update_repondant(Repondant  $repondant){
        $helper = Helper::get_connexion();
        $statement = 'UPDATE `repondants` SET 
                        `prenom_repondant` = ?,
                        `nom_repondant` = ?,
                        `telephone_repondant` = ?, 
                        `courriel` = ?,
                        `id_fonction` =?
                        WHERE `id_repondant` = ?';
        $request = $helper->prepare($statement);
        $request->execute([
           $repondant->getPrenomRepondant(),
           $repondant->getNomRepondant(),
           $repondant->getTelephoneRepondant(),
           $repondant->getcourriel(),
           $repondant->getIdFonction(),
           $repondant->getIdRepondant()
        ]);
        return $request->rowCount();
    }
    public function delete_repondant($id_repondant){
        $helper = Helper::get_connexion();
        $statement = 'DELETE FROM `repondants`
                      WHERE `id_repondant` = ?';
        $request = $helper->prepare($statement);
        $request->execute([$id_repondant]);
        return $request->rowCount();
    }
}