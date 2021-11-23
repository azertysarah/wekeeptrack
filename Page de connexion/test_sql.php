<?php 

	try {
		
	$bdd = new PDO('mysql:host = login;dbname=login;charset=utf8','root','');
	
	}catch(Exception $e){
		die ('Erreur: '.$e->getMessage());
	}
	
	// AJOUTER USERNAME
	
	/*$requete = $bdd->exec('INSERT INTO log_account(username, password, email) VALUES("Matthew", "couillon", "houston@exemple.com")');*/
	
	//MODIFIER USERNAME
	
	/*$requete = $bdd->exec('UPDATE log_account SET password = "poivrot" WHERE username = "Matthew"');*/
	
	//SUPPRIMER
	
	/*$requete = $bdd->exec('DELETE FROM log_account WHERE username = "Paul"') or die(print_r($bdd->errorInfo()));*/
	
	//LIRE DES INFORMATIONS
	$requete = $bdd->query('SELECT * FROM log_account');
	
			echo '<table border>
				<tr>
					<th> prénom</th>
					<th>Nom</th>
				</tr>';
			
			
	while($donnees = $requete->fetch()){
		echo '<tr>
				<td>'.$donnees['username'].'</td>
				<td>'.$donnees['password'].'</td>
			</tr>';
	} 
	echo '</table>';
	

?>