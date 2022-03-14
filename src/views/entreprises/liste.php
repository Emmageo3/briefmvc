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
    <title>Liste des entreprises</title>
    <link rel="stylesheet" href="style" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div id="page">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">Recensement</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
              <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Accueil</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="../utilisateurs/add_organisation" class="btn btn-success">Ajouter une entreprise</a>
              </li>
              <li class="nav-item">
              <a href="../utilisateurs/logout" class="btn btn-danger" style="margin-left: 70rem">Déconnexion</a>
              </li>
          </ul>
          </div>
      </div>
      </nav>

  <div class="container mt-4">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Nom de l'entreprise</th>
        <th scope="col">Détails</th>
        <th scope="col">Modifier</th>
        <th scope="col">Supprimer</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach($_SESSION['all'] as $entreprise){?>
          <tr>
              <td><?= $entreprise['nom_entreprise']; ?></td>
              <td><a class="btn btn-primary JPO_open">Voir</a></td>
              <td><a class="btn btn-success" href=<?='update/'.$entreprise['id_entreprise']?> >Modifier</a></td>
              <td><a class="btn btn-danger" href="<?='delete/'.$entreprise['id_entreprise']?>">Supprimer</a></td>
          </tr>
        <?php } ?>

    </tbody>
  </table>

  <section id="JPO" style="background-color: white; padding: 5rem; border-radius: 1rem" >
          <div class="details">
          <h1>Informations sur l'entreprise</h1>
              <ul style="list-style: none">
                <li>
                  <u>Nom de l'entreprise</u> : <?= $entreprise['nom_entreprise']; ?>
                </li>
                <li>
                  <u>Ninea</u> : <?= $entreprise['ninea']; ?>
                </li>
                <li>
                  <u>Registre de commerce</u> : <?= $entreprise['rccm']; ?>
                </li>
                <li>
                  <u>date de création</u> : <?= $entreprise['date_creation']; ?>
                </li>
                <li>
                    <u>page web</u>  : <?= $entreprise['page_web']; ?>
                </li>
                <li>
                  <u>organigramme</u> : <?= $entreprise['organigramme']; ?>
                </li>
              </ul>

              <h1>Informations sur le répondant</h1>
              <ul>
                <li>
                  Nom complet : <?= $entreprise['prenom_repondant'].' '.$entreprise['nom_repondant'] ?>
                </li>
              </ul>
          </div>
  </section>
  </div>
  </div>

  <script src="js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/vast-engineering/jquery-popup-overlay@2/jquery.popupoverlay.min.js"></script>

    <script>
        $(document).ready(function() {
    
          // Initialize the plugin
          $('#JPO').popup();
    
          // Set default `pagecontainer` for all popups (optional, but recommended for screen readers and iOS*)
          $.fn.popup.defaults.pagecontainer = '#page'
        });

    </script>
</body>
</html>
