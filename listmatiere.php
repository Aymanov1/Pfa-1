<?php

require_once("connexion.php");
					
					
             
          
                    $commande="select * from  matiere";

                      echo "<center><table class='table table-striped table-bordered table-hover'> <th>code</th><th>libellé</th>
                      <th>CI</th>
                      <th>TP</th>
                      <th>niveau</th>
                      <th>simestre</th>
                      <th>section</th><th></th><th></th>";
                     $requette=$conn->query($commande);
                      while ($resultat= $requette->fetch_assoc()){
                      $code=$resultat['code_mat'];
                      $libelle=$resultat['libelle'];
                        $CI=$resultat['CI'];
                        $TP=$resultat['TP'];
                        $niveau=$resultat['niveau_mat'];
                        $simestre=$resultat['semestre_mat'];
                        $section=$resultat['section_mat'];
                     
                     
                      echo '<form action="choixbtn3.php" method="POST" >

                      <tr>

                      <td >'.$code.' <input type="hidden" name="code" value="'.$code.'"></td>
                      <td>'.$libelle.'<input type="hidden" name="libelle" value="'.$libelle.'"></td>
                      <td>'.$CI.'<input type="hidden" name="CI" value="'.$CI.'"></td>
                      <td>'.$TP.'<input type="hidden" name="TP" value="'.$TP.'"></td>
                     <td>'.$niveau.'<input type="hidden" name="niveau" value="'.$niveau.'"></td>
                     <td>'.$simestre.'<input type="hidden" name="simestre" value="'.$simestre.'"></td>
                      <td>'.$section.'<input type="hidden" name="section" value="'.$section.'"></td>


                     
                      <td><input type="submit"  name="supprimer" value="supprimer"></td>
                      <td><input type="submit" name="modifier" value="modifier"></td>
                      </tr></form>';

                   }
                   echo "</table></center>"

?>