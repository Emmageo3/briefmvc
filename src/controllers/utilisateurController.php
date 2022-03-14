<?php
session_start();
require '../models/Utilisateur.php';
use Brief\models\Utilisateur;

if (isset($_GET['get_connexion'])) {
   get_connexion();
}
function get_connexion(){
    if (isset($_POST['submit'])) {
        $erreur = [];
        if (strlen(trim($_POST['login'])) > 15 || strlen(trim($_POST['login'])) <= 3) {
            $erreur['login'] = "Le login doit etre 4 et 15";
        }
        if (strlen(trim($_POST['password'])) > 15 || strlen(trim($_POST['password'])) <= 3) {
            $erreur['password'] = "Le mot de passe doit etre 4 et 15";
        }
        if (!empty($erreur)) {
            $_SESSION['erreur'] = $erreur;
            header('location:../connexion');
        }
        else {
//          papi thiare
            $location ='';
            $login = htmlspecialchars($_POST['login']);
            $password = htmlspecialchars($_POST['password']);
            $user = new Utilisateur();
            $credential = $user->login($login, sha1($password));
            if ($credential){
                $location ='entrepriseController';
                $user->setIdUtilisateur($credential['id_utilisateur']);
                $user->setPrenomUtilisateur($credential['prenom_utilisateur']);
                $user->setNomUtilisateur($credential['nom_utilisateur']);
                $user->setTelephone($credential['telephone']);
                $_SESSION['user_connected']=[
                    'id'=>$user->getIdUtilisateur(),
                    'prenom'=>$user->getPrenomUtilisateur(),
                    'nom'=>$user->getNomUtilisateur(),
                    'telephone'=>$user->getTelephone()
                ];
            }else{
                $erreur['bad_credentials']='Login ou mot de passe incorrect';
                $_SESSION['erreur'] =$erreur;
                $location='../connexion';
            }
            header("location:$location");
        }
    }
}