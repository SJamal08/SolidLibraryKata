<?php
session_start();

require_once('./models/connexionDb/connDb.php');
require_once('./controllers/LivreRepository.php');
require_once('./controllers/MembreRepository.php');
require_once('./controllers/EmpruntRepository.php');

$_SESSION['identifiant'] = '';

if (isset($_POST['username'])) {
    addMembre($conn);
    $_SESSION['identifiant'] = $_POST['username'];
}

$id='';

if ($_SESSION['identifiant']=='')
    {
        $id="invité";
    }
else {
    $id=$_SESSION['identifiant'];
    
}

$liste= getLivres($conn);
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
            <h2> vous êtes connecté en tant que <?php echo $id ?></h2>

            <form method="post" action="index.php">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Identifiant" aria-label="Recipient's username" aria-describedby="button-addon2" id="username" name="username">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Confirmer</button>
                </div>
            </form>

            <div>
                    <h3>Bibliotèque</h3>

                    <div>
                        <?php while ($donnees= $liste->fetch())
                                    {
?>
    <div class="card">
  <div class="card-body">
    <h5 class="card-title"><?php echo $donnees['titre'] ?></h5>
    <p class="card-text"><?php echo $donnees['auteur'] ?></</p>
  </div>
</div>
<?php
}

?>

                    </div>
            </div>

        <form method="post" action="index.php">
        <label> Emprunter un livre</label>
        <select name="livre">
<?php
$liste = getLivres($conn);
        while ($donnees = $liste->fetch())
									{
									?>
					<option value="<?php echo $donnees['titre']; ?>"> 
					    <?php echo $donnees['titre']; ?>
					</option>
					<?php } ?>
		</select>
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Confirmer</button>
        </form>

    </body>
</html>
<?php
    if (isset($_POST['livre']) && isset($_SESSION['identifiant'])) {
        addEmprunt($conn);
    }
?>