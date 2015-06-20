<?php 
       require_once("connexion.php");
					
					
              
              if(!empty($_POST)){
	            $nom=addslashes( $_POST['nom']);
	           
	            $grade=addslashes($_POST['grade']);
              if ($grade=='PR') {
              $charge='210';
              } elseif($grade=='MC') {
                $charge='180';
              }
              elseif($grade=='MA') {
                $charge='225';
              }
              else{

                $charge='147';
              }
              

            }
           echo $nom.$charge.$grade;

  //$commande="insert into profs (idprofs,nom_complet_prof,grade_prof,charge_horaire_prof)values('','$nom','$grade','$charge')";
                     // $requette=mysql_query($commande) or die ("exec impossible11"); 

   //$commande="select * from profs where ( nom_complet_prof='$nom' and grade_prof='$grade' and charge_horaire_prof='$charge')";
                  //    $requette=mysql_query($commande) or die ("exec impossible2"); 
                    //  $res=mysql_fetch_array($requette);
                      //$id=$res['idprofs'];
// $commande="insert into authentification (login,password,type,profs_idprofs)values('$nom','$nom','user','$id')";
                    //  $requette=mysql_query($commande) or die ("exec impossible3");
               



                 
               //  header('Location: index_admin.php');
                  

                   
                  




      

  ?>