<?php
                      
                      require_once("connexion.php");
                      session_start();

					 $num=$_SESSION['num_salle'];

           
            $commande="DELETE  FROM salle WHERE num_salle='$num'";
                      $res=mysql_query($commande) or die("exec impossible") ;
                      
                      


                      header('location:index_admin.php');

?>