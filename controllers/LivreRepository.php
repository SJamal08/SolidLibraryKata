<?php
    require_once('./models/Livre.php');
    require_once('./models/connexionDb/connDb.php');

    
    function addLivre($conn) {
		$livre = new Livre($_POST['titre'], $_POST['auteur']); 
        
        try
		{
			$req = $conn->prepare('INSERT INTO livre(titre, auteur) VALUES(:titre, :auteur)');
            $req->execute(array(
	                        'titre' => $livre->getTitre(),
	                        'auteur' => $livre->getAuteur()));
            
            header('Location: http://localhost/libraryKata/views/bibliothecaire.php');

		}
		catch(PDOException $e){
			echo $e->getMessage();	
			return false;
		}
	}

    function getLivres($conn){

      return $requete = $conn->query('SELECT * FROM livre');

    }
?>