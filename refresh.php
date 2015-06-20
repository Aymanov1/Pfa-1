<?php

		require_once("connexion.php");
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$query = 'select distinct section_mat from matiere where niveau_mat="'.$_GET['q'].'" order by section_mat;';
		//echo $query;
		$result = $conn->query($query);
		echo "<select id='section' onchange='matiere()' style='max-width:50px;'><option></option>";		

		while ($row = $result->fetch_assoc()) {
			echo "<option value='".$row['section_mat']."'>".$row['section_mat']."</option>";	
		}
		
		echo "</select>";
		$conn->close();
		
?>
