<?php

		require_once("connexion.php");
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$query = 'select distinct CI,TP from matiere where section_mat="'.$_POST['c'].'" and niveau_mat="'.$_POST['q'].'" and libelle="'.$_POST['a'].'";';
		
		
		echo "<select id='typmatiere' style='max-width:50px;'><option></option>";
		$result = $conn->query($query);

		while ($row = $result->fetch_assoc()) {
			if($row['TP'] != '0') echo "<option value='TP'>TP</option>";
			if($row['CI'] != '0') echo "<option value='CI'>TP</option>";
			if($row['TP'] != '0' && $row['CI'] != '0') echo "<option value='TP/CI'>TP/CI</option>";
		}
		echo "</select>";
		$conn->close();
		
?>
