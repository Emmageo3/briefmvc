<?php
session_start();
if(!isset($_SESSION['user_connected'])){
    header('location:../connexion');
}
?>
<!Doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Ajouter une nouvelle organisation</title>
    <link rel="stylesheet" href="style" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<form class="d-flex" method="POST" action="update">
    <div class="col-6 border-end">
        <h2 class="text-center"> Informations sur l'organisation</h2>
        <!-- Nom de l'entreprise-->
        <div class="form-row align-items-center">
            <div class="col-sm-3 col-md-12 my-1 px-3">
                <label class="sr-only" for="nom_entreprise">Nom de l'entreprise</label>
                <input type="text" class="form-control" id="nom_entreprise" placeholder="Nom de l'entreprise" name="nom_entreprise" value="<?=$_SESSION['update_data']['nom_entreprise']?>" >
            </div>
        </div>
        <!-- Regime et doamine -->
        <div class="form-row align-items-center d-flex">
            <div class="col-sm-3 col-md-6 my-1 px-3">
                <label class="sr-only" for="id_regime">Quel est votre regime?</label>
                <select class="form-select" id="id_regime" name="id_regime" aria-label="Default select example" >
                    <?php
                    foreach ($_SESSION['regimes'] as $regime){
                        ?>
                        <option value=<?=$regime['id_regime']?>><?=$regime['libelle_regime']?></option>
                    <?php }?>
                </select>
            </div>
            <div class="col-sm-3 col-md-6 my-1 px-3">
                <label class="sr-only" for="id_domaine">Quel est votre domaine?</label>
                <select class="form-select" id="id_domaine" name="id_domaine" aria-label="Default select example">
                    <?php
                    foreach ($_SESSION['domaines'] as $domaine){
                        ?>
                        <option value=<?=$domaine['id_domaine']?>><?=$domaine['libelle_domaine']?></option>
                    <?php }?>
                </select>
            </div>
        </div>
        <!-- dispositif et quartier -->
        <div class="form-row align-items-center d-flex">
            <div class="col-sm-3 col-md-6 my-1 px-3">
                <label class="sr-only" for="id_dispositif">Quel est votre dispositif de formation?</label>
                <select class="form-select" id="id_dispositif" name="id_dispositif" aria-label="Default select example">
                    <?php
                    foreach ($_SESSION['dispositifs'] as $dispositif){
                        ?>
                        <option value=<?=$dispositif['id_dispositif']?> > <?=$dispositif['libelle_dispositif']?> </option>
                    <?php }?>
                </select>
            </div>
            <div class="col-sm-3 col-md-6 my-1 px-3">
                <label class="sr-only" for="id_quartier">Quartier</label>
                <select class="form-select" id="id_quartier" name="id_quartier" aria-label="Default select example">
                    <?php
                    foreach ($_SESSION['quartiers'] as $quartier){
                        ?>
                        <option value=<?=$quartier['id_quartier']?> > <?=$quartier['nom_quartier']?> </option>
                    <?php }?>
                </select>
            </div>
        </div>
        <!--Date de creation  -->
        <div class="form-row align-items-center">
            <div class="col-sm-3 col-md-12 my-1 px-3">
                <label class="sr-only" for="date_creation">Date de creation de l'entreprise</label>
                <input type="date" class="form-control" id="date_creation"  name="date_creation" value="<?=$_SESSION['update_data']['date_creation']?>" >
            </div>
        </div>
        <!--Ninea et Rccm  -->
        <div class="form-row align-items-center d-flex">
            <div class="col-sm-3 col-md-6 my-1 px-3">
                <label class="sr-only" for="ninea">Ninea</label>
                <input type="text" class="form-control" id="ninea" placeholder="Mettez le ninea" name="ninea" value="<?=$_SESSION['update_data']['ninea']?>">
            </div>
            <div class="col-sm-3 col-md-6 my-1 px-3">
                <label class="sr-only" for="rccm">Registre de commerce</label>
                <input type="text" class="form-control" id="rccm" placeholder="Mettez le registre de commerce" name="rccm" value="<?=$_SESSION['update_data']['rccm']?>">
            </div>
        </div>
        <!-- Coordoonees et page web -->
        <div class="form-row align-items-center d-flex">
            <div class="col-sm-3 col-md-6 my-1 px-3">
                <label class="sr-only" for="coordonnees">coordonnees</label>
                <input type="text" class="form-control" id="coordonnees" placeholder="Mettez les coordonnes" name="coordonnees" value="<?=$_SESSION['update_data']['coordonnees']?>">
            </div>
            <div class="col-sm-3 col-md-6 my-1 px-3">
                <label class="sr-only" for="page_web">Page web</label>
                <input type="text" class="form-control" id="page_web" placeholder="lien de votre page web" name="page_web" value="<?=$_SESSION['update_data']['page_web']?>">
            </div>
        </div>
        <!-- Nbr employe et organigramme -->
        <div class="form-row align-items-center d-flex">
            <div class="col-sm-3 col-md-6 my-1 px-3">
                <label class="sr-only" for="nombre_emloye">Nombre d'employés</label>
                <input type="number" class="form-control" id="nombre_emloye" placeholder="Mettez les nombres d'employés" name="nombre_emloye" style="appearance:textfield;" value="<?=$_SESSION['update_data']['nombre_employe']?>">
            </div>
            <div class="col-sm-3 col-md-6 my-1 px-3">
                <label class="sr-only" for="organigramme">Avez-vous un organigramme?</label>
                <select class="form-select" id="organigramme" name="organigramme" aria-label="Default select example">
                    <option value="1">Oui</option>
                    <option value="2">Non</option>
                </select>
            </div>
        </div>
        <!-- contrats et cotisations -->
        <div class="form-row align-items-center d-flex">
            <div class="col-sm-3 col-md-6 my-1 px-3">
                <label class="sr-only" for="contrat">Les contrats de vos employes</label>
                <input type="text" class="form-control" id="contrat" placeholder="Mettez les contrats des employés" name="contrat" value="<?=$_SESSION['update_data']['contrat']?>">
            </div>
            <div class="col-sm-3 col-md-6 my-1 px-3">
                <label class="sr-only" for="cotisations_sociales">Faites vous des cotisations sociales?</label>
                <select class="form-select" id="cotisations_sociales" name="cotisations_sociales" aria-label="Default select example">
                    <option value="1">Oui</option>
                    <option value="2">Non</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-6">
        <h2 class="text-center"> Informations sur le repondant</h2>
        <!-- Prenom et nom du repondant -->
        <div class="form-row align-items-center d-flex">
            <div class="col-sm-3 col-md-6 my-1 px-3">
                <label class="sr-only" for="prenom_repondant">Prenom du Repondant</label>
                <input type="text" class="form-control" id="prenom_repondant" placeholder="Mettez le prenom du repondant" name="prenom_repondant" value="<?=$_SESSION['update_data_repodant']['prenom_repondant']?>">
            </div>
            <div class="col-sm-3 col-md-6 my-1 px-3">
                <label class="sr-only" for="nom_repondant">Nom du Repondant</label>
                <input type="text" class="form-control" id="nom_repondant" placeholder="Mettez le nom du repondant" name="nom_repondant" value="<?=$_SESSION['update_data_repodant']['nom_repondant']?>">
            </div>
        </div>
        <!-- Telephone et courriel -->
        <div class="form-row align-items-center d-flex">
            <div class="col-sm-3 col-md-6 my-1 px-3">
                <label class="sr-only" for="telephone_repondant">Telephone du Repondant</label>
                <input type="text" class="form-control" id="telephone_repondant" placeholder="Mettez le telephone du repondant" name="telephone_repondant" value="<?=$_SESSION['update_data_repodant']['telephone_repondant']?>">
            </div>
            <div class="col-sm-3 col-md-6 my-1 px-3">
                <label class="sr-only" for="courriel">Email du Repondant</label>
                <input type="email" class="form-control" id="courriel" placeholder="Mettez l'adresse mail du repondant" name="courriel" value="<?=$_SESSION['update_data_repodant']['courriel']?>">
            </div>
        </div>
        <!-- fonction du repondant -->
        <div class="form-row align-items-center d-flex">
            <div class="col-sm-3 col-md-12 my-1 px-3">
                <label class="sr-only" for="id_fonction">Fonction du Repondant</label>
                <select class="form-select" id="id_fonction" name="id_fonction" aria-label="Default select example">
                    <?php
                    foreach ($_SESSION['fonctions'] as $fonction){
                        ?>
                        <option value=<?=$fonction['id_fonction']?>><?=$fonction['libelle_fonction']?></option>
                    <?php }?>
            </div>
        </div>

    </div>
    <div class="col-12 my-5">

        <input type="submit" class="btn btn-success col-12 my-5" value="Modifier l'organisation" name="update_organisation">
    </div>
</form>
modif
</body>
</html>
