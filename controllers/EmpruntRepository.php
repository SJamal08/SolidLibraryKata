<?php
    require_once('../models/Emprunt.php');
    require_once('../models/connexionDb/connDb.php');

    
    function addEmprunt($conn) {
        $date = date("Y-m-d",strtotime("+4 week"));

		$Emprunt = new Emprunt($_SESSION['identifiant'],$_POST['livre'],$date ); 
        
        try
		{
			$req = $conn->prepare('INSERT INTO emprunt(emprunteur, livre, dateExpiration) VALUES(:emprunteur, :livre, :dateExpiration)');
            $req->execute(array(
	                        'emprunteur' => $Emprunt->getEmprunteur(),
	                        'livre' => $Emprunt->getLivre(),
                            'dateExpiration' =>$Emprunt->getDateExpiration()));
            
            header('Location: http://localhost/libraryKata/views/mesEmprunts.php');

		}
		catch(PDOException $e){
			echo $e->getMessage();	
			return false;
		}
	}

    function getLivresEmpruntes($conn){

      return $requete = $conn->query('SELECT livre,dateExpiration FROM emprunt WHERE emprunteur=\'' . $_SESSION['identifiant'] . '\'');

    }
?>