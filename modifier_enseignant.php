<?php
                      
                      require_once("connexion.php");
                      session_start();
                      
                      $nom=$_SESSION['nom'];
                      $grade=$_SESSION['grade'];
                      $charge=$_SESSION['charge'];
                      ?>

<!DOCTYPE html>
<html>
<head>
	<title>modifier</title>
</head>
<body>
<form name="ajoutEns"  action="" method="POST">
	<table>
	<tr>
	<td><p>Nom complet: <font color="red">*</font></p></td><td><input type="text" value="<?php echo $nom; ?>" maxlength="100" maxlength="3" name="nom" id="nomComplet" onblur="verifform(this);"></td>
	</tr>
	<tr>
	<td><p>Grade: </p></td>
		<td><select name="grade" id="grade" >
					<option value="<?php echo $grade; ?>" selected="selected"><?php echo $grade; ?></option>
		               <option value="PR">PR</option>
		            <option value="MC">MC</option>
		            <option value="MA">MA</option>
		            <option value="DO">DO</option>

            	</select></td>
    </tr>
   
	<tr>
	<td><center><input type="submit" name="envoyer" value="Valider"><input type="reset" value="Annuler" name="annuler"> </center></td>
	</tr>
	
	</table>
	</form>
<?php

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
	            $id=$_SESSION['id'];
	            $commande="UPDATE  profs set nom_complet_prof='$nom', grade_prof='$grade' ,charge_horaire_prof='$charge' WHERE idprofs='$id'";
	              $res=mysql_query($commande) or die("exec impossible") ;
	                                    
                      


                     header('location:index_admin.php');
                 }

?>