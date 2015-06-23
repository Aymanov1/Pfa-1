<?php 
       require_once("connexion.php");
					
					
              
               if(!empty($_POST)){
	            $num=addslashes( $_POST['num']);
	            $type=addslashes($_POST['type']);
            








            }
           
          
 $commande="INSERT into salle (num_salle,type_salle)values ('$num','$type')";
                      $requette=mysql_query($commande) or die ("exec impossible");

                   



                 
                 header('Location: index_admin.php');
                  

                   
                  




      

  ?>