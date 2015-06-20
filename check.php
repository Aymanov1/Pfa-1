<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once("connexion.php");
$nom = $_POST["var1"];
$pw = $_POST["var2"];



$query = "select count(*) as number,type,profs_idprofs as idprofs  from authentification where login='$nom' and password='$pw'";
$result = $conn->query($query);

while ($row = $result->fetch_assoc()) {
    $number = $row['number'];
	$type = $row['type'];
	$idprofs = $row['idprofs'];
}


if ($number <= 0) {
    echo 'false';
   
} else if($type == "admin") {
	session_start();
	$_SESSION["idprofs"] = $idprofs;
    echo 'true1';
}else{
	session_start();
	$_SESSION["idprofs"] = $idprofs;
	echo "true2";
} 

$conn->close();

