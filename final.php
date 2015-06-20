<?php
	require_once("connexion.php");
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		session_start();
		$query = 'SELECT `id_Voeux` FROM `voeux` WHERE `idprofs` = '.$_SESSION["idprofs"];
		$result = $conn->query($query);
		
		while ($row = $result->fetch_array()) {
			$query1 = 'UPDATE `voeux` SET `jumlage`='.$_GET['q'].',`journee_consecutif`='.$_GET['a'].',`max_horaire_semaine`='.$_GET['c'].',`max_jour_semaine`='.$_GET['y'].',`salle_pref`="'.$_GET['t'].'" WHERE `id_Voeux`='.$row['id_Voeux'];
			$result1 = $conn->query($query1);
		}
		
		if($result1)
		{
			echo("Données insérées avec succés");
		} 
		$conn->close();
			//header("Location: final1.php");
?>