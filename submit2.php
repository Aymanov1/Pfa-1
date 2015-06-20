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
		
		while ($row = $result->fetch_assoc()) {
			$query = 'UPDATE `voeux` set `voeux_creneaux`="'.$_GET['q'].'" where `id_Voeux`='.$row['id_Voeux'];
			$result1 = $conn->query($query);
		}
		
		if($result)
		{
			echo("Données insérées avec succés");
		} 
		else
		{
			echo($conn->error);
		}
		$conn->close();
?>