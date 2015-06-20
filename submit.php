<?php
		require_once("connexion.php");
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		session_start();
		$query = 'INSERT INTO `voeux`(`groupe`, `section`, `matiere`, `type_mat`, `datashow`, `commentaire`,`idprofs`) VALUES ("'.$_GET['q'].'","'.$_GET['c'].'","'.$_GET['a'].'","'.$_GET['p'].'",'.$_GET['d'].',"'.$_GET['l'].'",'.$_SESSION["idprofs"].');';
		$result = $conn->query($query);
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
