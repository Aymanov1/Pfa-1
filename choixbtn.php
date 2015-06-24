<?php

					  
                      session_start();
	 				  $id=$_POST['id'];
                      $nom=$_POST['nom'];
                      $grade=$_POST['grade'];
                      $charge=$_POST['charge'];
                      $_SESSION['id']=$id;
                      $_SESSION['nom']=$nom;
                      $_SESSION['grade']=$grade;
                      $_SESSION['charge']=$charge;

if( isset($_POST['modifier'])){
                      session_start();
	$id=$_POST['id'];
                      $nom=$_POST['nom'];
                      $grade=$_POST['grade'];
                      $charge=$_POST['charge'];
                      $_SESSION['id']=$id;
                      $_SESSION['nom']=$nom;
                      $_SESSION['grade']=$grade;
                      $_SESSION['charge']=$charge;
	header('Location:modifier_enseignant.php');
	
}elseif (isset($_POST['supprimer'])){
$id=$_POST['id'];
                      $nom=$_POST['nom'];
                      $grade=$_POST['grade'];
                      $charge=$_POST['charge'];
                      $_SESSION['id']=$id;
                      $_SESSION['nom']=$nom;
                      $_SESSION['grade']=$grade;
                      $_SESSION['charge']=$charge;
                      session_start();
	header('Location:supprimer_enseignant.php');

}
 elseif(isset($_POST['voeux'])){
                      session_start();
                      $id=$_POST['id'];
                      $nom=$_POST['nom'];
                      $grade=$_POST['grade'];
                      $charge=$_POST['charge'];
                      $_SESSION['id']=$id;
                      $_SESSION['nom']=$nom;
                      $_SESSION['grade']=$grade;
                      $_SESSION['charge']=$charge;
  header('Location:voeux_enseignant.php');
}
else
	header('Location:adminEnseignant.php');

?>
