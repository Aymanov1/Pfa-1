<?php
                      
                      require_once("connexion.php");
                      session_start();

					 $code=$_SESSION['code'];

           
            $commande="DELETE  FROM matiere WHERE code_mat='$code'";
                      $res=$conn->query($commande) or die("exec impossible") ;
                      
                      


                      header('location:index_admin.php');

?>
