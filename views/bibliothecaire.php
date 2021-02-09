<?php
    require('../models/Livre.php');
    require_once('../controllers/LivreRepository.php');
    require_once('../models/connexionDb/connDb.php');

    if (isset($_POST['titre']) && isset($_POST['auteur'])) {
        addLivre($conn);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </head>
    <body>
            <h2>Ajout de livres</h2>
            <form method="post" action="bibliothecaire.php">
                <div class="input-group">
                <span class="input-group-text">Titre du livre</span>
                    <input type="text" class="form-control" placeholder="titre du livre" aria-label="Recipient's username" aria-describedby="button-addon2" id="titre" name="titre">
                    <span class="input-group-text">Auteur</span>
                    <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2" id="auteur" name="auteur">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Confirmer</button>
                </div>
            </form>
    </body>
</html>