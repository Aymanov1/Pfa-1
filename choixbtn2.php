<?php

	 				   
                      session_start();

if( isset($_POST['modifier'])){
	                    $num=$_POST['num'];
                      $type=$_POST['type'];
                      
                      $_SESSION['num_salle']=$num;
                      $_SESSION['type_salle']=$type;
                     
                      session_start();
	header('Location:modifier_salle.php');
	
}elseif (isset($_POST['supprimer'])){

                       $num=$_POST['num'];
                      $type=$_POST['type'];
                      
                      $_SESSION['num_salle']=$num;
                      $_SESSION['type_salle']=$type;
                     
                 
                      session_start();
	header('Location:supprimer_salle.php');

}
else
	header('Location:index_admin.php');

?>