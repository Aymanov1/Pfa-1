<?php 
       require_once("connexion.php");
					
					
              
               if(!empty($_POST)){
	            $num=addslashes( $_POST['num']);
	            $type=addslashes($_POST['type']);

            }
           
          
 $commande="INSERT into salle (num_salle,type_salle)values ('$num','$type')";
                      $requette=$conn->query($commande) or die ("exec impossible");

                   



                 
                 header('Location: adminEnseignant.php');
                  

                   
                  




      

  ?>