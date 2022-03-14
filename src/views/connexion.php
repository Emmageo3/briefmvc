<?php
session_start();
?>
<!Doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Connexion à la plateforme de recensement</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
	<div class="container">

		<div>
            <?php
                if (array_key_exists('erreur',$_SESSION)){
                    echo "<div class='alert alert-danger'>";
                    print_r(implode('<br/>',$_SESSION['erreur']));
                    echo "</div>";
                    unset($_SESSION['erreur']);
                }
            ?>
        </div>


		<form class="login" method="post" action="utilisateurs/connexion ">
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Nom d'utilisateur</label>
				<input type="text" class="form-control" name="login">
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Mot de passe</label>
				<input type="password" class="form-control" name="password">
			</div>
			<button type="submit" class="btn btn-primary" name="submit">Se connecter</button>
		</form>

	</div>
</div>
</body>
</html>
