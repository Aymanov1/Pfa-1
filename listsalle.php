<?php

require_once("connexion.php");
					
					
             
          
                    $commande="select * from  salle";

                      echo "<center><table class='table table-striped table-bordered table-hover'> <th>num salle</th><th>Type  salle</th><th></th><th></th>";
                      $requette=$conn->query($commande);
                      while ($resultat= $requette->fetch_assoc()){
                      $num_salle=$resultat['num_salle'];
                      $type_salle=$resultat['type_salle'];
                     
                     
                      echo '<form action="choixbtn2.php" method="POST" >

                      <tr>

                      <td >'.$num_salle.' <input type="hidden" name="num" value="'.$num_salle.'"></td>
                      <td>'.$type_salle.'<input type="hidden" name="type" value="'.$type_salle.'"></td>
                     
                      <td><input type="submit"  name="supprimer" value="supprimer"></td>
                      <td><input type="submit" name="modifier" value="modifier"></td>
                      </tr></form>';

                   }
                   echo "</table></center>"

?>