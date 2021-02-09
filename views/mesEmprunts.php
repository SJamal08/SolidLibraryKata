<?php
session_start();

require_once('../controllers/EmpruntRepository.php');
require_once('../models/connexionDb/connDb.php');

$liste= getLivresEmpruntes($conn);

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
        <div>
        
            <h3>Bibliotèque</h3>
                <div>
                    <?php while ($donnees= $liste->fetch())
                        {
                    ?>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $donnees['livre'] ?></h5>
                            <p class="card-text"><?php echo $donnees['dateExpiration'] ?></</p>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
        </div>

    </body>
</html>