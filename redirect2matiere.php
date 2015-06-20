<?php 
       require_once("connexion.php");
					
					
              
               if(!empty($_POST)){
	            $code=addslashes( $_POST['code']);
	            $libellé=addslashes($_POST['libellé']);
             $CI=addslashes($_POST['CI']);

	            $TP=addslashes($_POST['TP']);
              $niveau=addslashes($_POST['niveau']);
              $semestre=addslashes($_POST['semestre']);
              $section=addslashes($_POST['section']);








            }
           
          
 $commande="insert into matiere (code_mat,libelle,CI,TP,  niveau_mat,semestre_mat,section_mat)values('$code','$libellé','$CI','$TP','$niveau','$semestre','$section')";
                      $requette=$conn->query($commande) or die ("exec impossible");

                   



                 
                 header('Location: index_admin.php');
                  

                   
                  




      

  ?>