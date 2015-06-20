<?php
	require_once("connexion.php");
	$query = "DELETE FROM voeux WHERE id_voeux=".$_GET['q'];
	$result = $conn->query($query);
	$conn->close();
	header("location: final1.php");