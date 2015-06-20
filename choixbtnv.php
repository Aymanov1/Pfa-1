<?php

	 				   
                      session_start();

if( isset($_POST['modifier'])){
	                     $id_Voeux=$_POST['id'];
                      $matiere=$_POST['matiere'];
                      $type=$_POST['type'];
                      $groupe=$_POST['groupe'];
                        $section=$_POST['section'];
                        $datashow=$_POST['datashow'];
                        $jumlage=$_POST['jumlage'];
                        $journéeCon=$_POST['journéeCon'];
                        $maxh=$_POST['maxh'];
                         $maxjps=$_POST['maxjps'];
                           $salle=$_POST['salle'];
                             $crenaux=$_POST['crenaux'];

                      $_SESSION['id']= $id_Voeux;
                      $_SESSION['matiere']=$matiere;
                      $_SESSION['type']=$type;
                     $_SESSION['groupe']= $groupe;
                       $_SESSION['section'] =$section;
                       $_SESSION['datashow']= $datashow;
                       $_SESSION['jumlage']= $jumlage;
                       $_SESSION['journéeCon']= $journéeCon;
                       $_SESSION['maxh']= $maxh;
                         $_SESSION['maxjps']=$maxjps;
                          $_SESSION['salle']= $salle;
                            $_SESSION['crenaux']= $crenaux;
                     
                      session_start();
	header('Location:modifier_voeux.php');
	
}elseif (isset($_POST['valider'])){

                       $id_Voeux=$_POST['id'];
                      $matiere=$_POST['matiere'];
                      $type=$_POST['type'];
                      $groupe=$_POST['groupe'];
                        $section=$_POST['section'];
                        $datashow=$_POST['datashow'];
                        $jumlage=$_POST['jumlage'];
                        $journéeCon=$_POST['journéeCon'];
                        $maxh=$_POST['maxh'];
                         $maxjps=$_POST['maxjps'];
                           $salle=$_POST['salle'];
                             $crenaux=$_POST['crenaux'];

                      $_SESSION['id']= $id_Voeux;
                      $_SESSION['matiere']=$matiere;
                      $_SESSION['type']=$type;
                     $_SESSION['groupe']= $groupe;
                       $_SESSION['section'] =$section;
                       $_SESSION['datashow']= $datashow;
                       $_SESSION['jumlage']= $jumlage;
                       $_SESSION['journéeCon']= $journéeCon;
                       $_SESSION['maxh']= $maxh;
                         $_SESSION['maxjps']=$maxjps;
                          $_SESSION['salle']= $salle;
                            $_SESSION['crenaux']= $crenaux;
                 
                      session_start();
	//header('Location:valider_creneaux.php');

}
else
	header('Location:index_admin.php');

?>