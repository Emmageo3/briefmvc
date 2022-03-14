<?php

namespace Brief\models;
require '../utils/Helper.php';
use Brief\utils\Helper;

class Entreprise
{
    private $id_entreprise;
    private $nom_entreprise;
    private $coordonnees;
    private $ninea;
    private $rccm;
    private $date_creattion;
    private $page_web;
    private $nombre_employe;
    private $organigramme;
    private $cotisations_sociales;
    private $contrat;
    private $id_repondant;
    private $id_domaine;
    private $id_dispositif;
    private $id_regime;
    private $id_quartier;
    private $id_utilisateur;
    /**
     * @return mixed
     */
    public function getIdEntreprise()
    {
        return $this->id_entreprise;
    }

    /**
     * @param mixed $id_entreprise
     */
    public function setIdEntreprise($id_entreprise)
    {
        $this->id_entreprise = $id_entreprise;
    }

    /**
     * @return mixed
     */
    public function getNomEntreprise()
    {
        return $this->nom_entreprise;
    }

    /**
     * @param mixed $nom_entreprise
     */
    public function setNomEntreprise($nom_entreprise)
    {
        $this->nom_entreprise = $nom_entreprise;
    }

    /**
     * @return mixed
     */
    public function getCoordonnees()
    {
        return $this->coordonnees;
    }

    /**
     * @param mixed $coordonnees
     */
    public function setCoordonnees($coordonnees)
    {
        $this->coordonnees = $coordonnees;
    }

    /**
     * @return mixed
     */
    public function getNinea()
    {
        return $this->ninea;
    }

    /**
     * @param mixed $ninea
     */
    public function setNinea($ninea)
    {
        $this->ninea = $ninea;
    }

    /**
     * @return mixed
     */
    public function getRccm()
    {
        return $this->rccm;
    }

    /**
     * @param mixed $rccm
     */
    public function setRccm($rccm)
    {
        $this->rccm = $rccm;
    }

    /**
     * @return mixed
     */
    public function getDateCreattion()
    {
        return $this->date_creattion;
    }

    /**
     * @param mixed $date_creattion
     */
    public function setDateCreattion($date_creattion)
    {
        $this->date_creattion = $date_creattion;
    }

    /**
     * @return mixed
     */
    public function getPageWeb()
    {
        return $this->page_web;
    }

    /**
     * @param mixed $page_web
     */
    public function setPageWeb($page_web)
    {
        $this->page_web = $page_web;
    }

    /**
     * @return mixed
     */
    public function getNombreEmploye()
    {
        return $this->nombre_employe;
    }

    /**
     * @param mixed $nombre_employe
     */
    public function setNombreEmploye($nombre_employe)
    {
        $this->nombre_employe = $nombre_employe;
    }

    /**
     * @return mixed
     */
    public function getOrganigramme()
    {
        return $this->organigramme;
    }

    /**
     * @param mixed $organigramme
     */
    public function setOrganigramme($organigramme)
    {
        $this->organigramme = $organigramme;
    }

    /**
     * @return mixed
     */
    public function getCotisationsSociales()
    {
        return $this->cotisations_sociales;
    }

    /**
     * @param mixed $cotisations_sociales
     */
    public function setCotisationsSociales($cotisations_sociales)
    {
        $this->cotisations_sociales = $cotisations_sociales;
    }

    /**
     * @return mixed
     */
    public function getContrat()
    {
        return $this->contrat;
    }

    /**
     * @param mixed $contrat
     */
    public function setContrat($contrat)
    {
        $this->contrat = $contrat;
    }

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
    public function getIdQuartier()
    {
        return $this->id_quartier;
    }

    /**
     * @param mixed $id_quartier
     */
    public function setIdQuartier($id_quartier)
    {
        $this->id_quartier = $id_quartier;
    }

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

    public function all_entreprises(){
        $helper = Helper::get_connexion();
        $statement = 'SELECT * FROM `entreprises` , `repondants` 
                      WHERE entreprises.id_repondant = repondants.id_repondant';
        $request = $helper->query($statement);
        return $request->fetchAll();
    }
    public function get_entreprise($id_entreprise){
        $helper = Helper::get_connexion();
        $statement = 'SELECT * FROM `entreprises` , `repondants` 
                      WHERE entreprises.id_repondant = repondants.id_repondant AND `id_entreprise`=?';
        $request = $helper->prepare($statement);
        $request->execute([$id_entreprise]);
        return $request->fetch();
    }
    public function add_entreprise(Entreprise $enterprise){
        $helper = Helper::get_connexion();
        $statement = 'INSERT INTO `entreprises` (`id_entreprise`,`nom_entreprise`, `coordonnees`, `ninea`, `rccm`, `date_creation`, `page_web`, `nombre_employe`, `organigramme`, `cotisations_sociales`, `contrat`, `id_repondant`, `id_domaine`, `id_dispositif`, `id_regime`, `id_quartier`, `id_utilisateur`) 
                      VALUES (NULL,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ';
        $request = $helper->prepare($statement);
        $request->execute([
            $enterprise->getNomEntreprise(),
            $enterprise->getCoordonnees(),
            $enterprise->getNinea(),
            $enterprise->getRccm(),
            $enterprise->getDateCreattion(),
            $enterprise->getPageWeb(),
            $enterprise->getNombreEmploye(),
            $enterprise->getOrganigramme(),
            $enterprise->getCotisationsSociales(),
            $enterprise->getContrat(),
            $enterprise->getIdRepondant(),
            $enterprise->getIdDomaine(),
            $enterprise->getIdDispositif(),
            $enterprise->getIdRegime(),
            $enterprise->getIdQuartier(),
            $enterprise->getIdUtilisateur()
        ]);
        return $enterprise;
    }
    public function update_entreprise(Entreprise $entreprise){
        $helper = Helper::get_connexion();
        $statement = 'UPDATE `entreprises` SET 
                         `nom_entreprise` = ?,
                         `coordonnees`=?,
                         `ninea` = ?,
                         `rccm` =?,
                         `date_creation` = ?,
                         `page_web` = ?,
                         `nombre_employe` = ?,
                         `organigramme` = ?,
                         `cotisations_sociales` = ?,
                         `contrat` = ?,
                         `id_domaine` = ?,
                         `id_dispositif` = ?,
                         `id_regime` = ?,
                         `id_quartier` = ?
                          WHERE id_entreprise= ? ';
         $request =$helper->prepare($statement);
            $request->execute([
            $entreprise->getNomEntreprise(),
            $entreprise->getCoordonnees(),
            $entreprise->getNinea(),
            $entreprise->getRccm(),
            $entreprise->getDateCreattion(),
            $entreprise->getPageWeb(),
            $entreprise->getNombreEmploye(),
            $entreprise->getOrganigramme(),
            $entreprise->getCotisationsSociales(),
            $entreprise->getContrat(),
            $entreprise->getIdDomaine(),
            $entreprise->getIdDispositif(),
            $entreprise->getIdRegime(),
            $entreprise->getIdQuartier(),
            $entreprise->getIdEntreprise()
        ]);
         return $request->rowCount();
    }
    public function delete_entreprise(Entreprise $entreprise){
        $helper = Helper::get_connexion();
        $statement = 'DELETE FROM `entreprises` 
                      WHERE  `id_entreprise`=?';
        $request = $helper->prepare($statement);
        $request->execute([$entreprise->getIdEntreprise()]);
        return $request->rowCount();
    }

}