<?php

require_once("connexion.php");
					
					
             
          
                    $commande="select * from  profs ";

                      echo "<center><table class='table table-striped table-bordered table-hover'><th>nom </th><th>grade</th><th>charge horaire</th><th></th><th></th>";
                      $requette=$conn->query($commande);
                      while ($resultat= $requette->fetch_assoc()){
                      $nom_complet_prof=$resultat['nom_complet_prof'];
                      $grade_prof=$resultat['grade_prof'];
                      $charge_horaire_prof=$resultat['charge_horaire_prof'];
                      echo '<form action="choixbtn.php" method="POST" >

                      <tr>

                      <td>'.$nom_complet_prof.'<input type="hidden" name="nom" value="'.$nom_complet_prof.'"></td>
                      <td>'.$grade_prof.'<input type="hidden" name="grade" value="'.$grade_prof.'"></td>
                      <td>'.$charge_horaire_prof.'<input type="hidden" name="charge" value="'.$charge_horaire_prof.'"></td>
                      <td><input type="submit"  name="supprimer" value="supprimer"></td>
                      <td><input type="submit" name="modifier" value="modifier"></td>
                      <td><input type="submit" name="voeux" value="voeux"></td>
                      </tr></form>';

                   }
                   echo "</table></center>"

?>