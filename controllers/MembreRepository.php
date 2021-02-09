<?php
    require_once('./models/Membre.php');
    require_once('./models/connexionDb/connDb.php');

    
    function addMembre($conn) {
		$membre = new Membre($_POST['username']); 
        
        try
		{
			$req = $conn->prepare('INSERT INTO membre(identifiant) VALUES(:identifiant)');
            $req->execute(array(
	                        'identifiant' => $membre->getIdentifiant()));


		}
		catch(PDOException $e){
			echo $e->getMessage();	
			return false;
		}
	}

    function getCountMembre($conn, $identifiant){

        return $requete = $conn->query('SELECT count(*) FROM membre WHERE identifiant=\'' . $identifiant . '\'');
  
      }

?>