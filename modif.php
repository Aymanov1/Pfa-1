<?php
	require_once("connexion.php");
	$query = "UPDATE  voeux set groupe='".$_GET['g']."', section='".$_GET['s']."' ,matiere='".$_GET['m']."',type_mat='".$_GET['t']."' WHERE id_voeux=".$_GET['q'];
	$result = $conn->query($query);
	header('location:final1.php');
?>