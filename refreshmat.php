<?php

		require_once("connexion.php");
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$query = 'select distinct libelle from matiere where section_mat="'.$_GET['c'].'" and niveau_mat="'.$_GET['q'].'" order by libelle;';
		
		echo "<select id='matiere' onchange='type_mat()' style='max-width:50px;'><option></option>";
		$result = $conn->query($query);

		while ($row = $result->fetch_assoc()) {
			echo "<option value='".$row['libelle']."'>".$row['libelle']."</option>";	
		}
		echo "</select>";
		$conn->close();
		
?>
