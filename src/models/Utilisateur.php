<?php

namespace Brief\models;
require '../utils/Helper.php';
use Brief\utils\Helper;

class Utilisateur
{
    private $id_utilisateur;
    private $prenom_utilisateur;
    private $nom_utilisateur;
    private $login;
    private $password;
    private $telephone;

    /**
     * @return mixed
     */
    public function getIdUtilisateur()
    {
        return $this->id_utilisateur;
    }

    /**
     * @param mixed $id_utilisateur
     */
    public function setIdUtilisateur($id_utilisateur)
    {
        $this->id_utilisateur = $id_utilisateur;
    }

    /**
     * @return mixed
     */
    public function getPrenomUtilisateur()
    {
        return $this->prenom_utilisateur;
    }

    /**
     * @param mixed $prenom_utilisateur
     */
    public function setPrenomUtilisateur($prenom_utilisateur)
    {
        $this->prenom_utilisateur = $prenom_utilisateur;
    }

    /**
     * @return mixed
     */
    public function getNomUtilisateur()
    {
        return $this->nom_utilisateur;
    }

    /**
     * @param mixed $nom_utilisateur
     */
    public function setNomUtilisateur($nom_utilisateur)
    {
        $this->nom_utilisateur = $nom_utilisateur;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }
    public function login($login,$password){
            $helper = Helper::get_connexion();
            $statement = "SELECT `id_utilisateur`,`prenom_utilisateur`,`nom_utilisateur`,`telephone` FROM `utilisateurs`
                          WHERE `login` =? AND password =?";
            $request = $helper->prepare($statement);
            $request->execute([$login,$password]);
            return $request->fetch();
    }
}