<?php

                      session_start();

if( isset($_POST['modifier'])){
	                  
                      $code=$_POST['code'];
                      $libelle=$_POST['libelle'];
                      $CI=$_POST['CI'];
                      $TP=$_POST['TP'];
                      $niveau=$_POST['niveau'];
                      $simestre=$_POST['simestre'];
                      $section=$_POST['section'];

                      $_SESSION['code']=$code;
                      $_SESSION['libelle']=$libelle;
                      $_SESSION['CI']=$CI;
                      $_SESSION['TP']=$TP;
                      $_SESSION['niveau']=$niveau;
                       $_SESSION['simestre']=$simestre;
                      $_SESSION['section']=$section;
                      session_start();
	header('Location:modifier_matiere.php');
	
}elseif (isset($_POST['supprimer'])){
$id=$_POST['id'];
                      $code=$_POST['code'];
                      $libelle=$_POST['libelle'];
                      $CI=$_POST['CI'];
                      $TP=$_POST['TP'];
                      $niveau=$_POST['niveau'];
                      $simestre=$_POST['simestre'];
                      $section=$_POST['section'];

                      $_SESSION['code']=$code;
                      $_SESSION['libelle']=$libelle;
                      $_SESSION['CI']=$CI;
                      $_SESSION['TP']=$TP;
                       $_SESSION['simestre']=$simestre;

                      $_SESSION['niveau']=$niveau;
                      $_SESSION['section']=$section;
                      session_start();
	header('Location:supprimer_matiere.php');

}
else
	header('Location:index_admin.php');

?>