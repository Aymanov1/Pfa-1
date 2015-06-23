<?php
                      
                      require_once("connexion.php");
                      session_start();

					 $id=$_SESSION['id'];
					 $query = "DELETE  FROM profs WHERE idprofs=".$id;
					 $result = $conn->query($query);
					 if ($conn->error) {
						echo "<input type='button' value='back' onclick='history.back()'><br>";
						die("Delete failed: " . $conn->error);
					 }
                      header('location:index_admin.php');

?>
