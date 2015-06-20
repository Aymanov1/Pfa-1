<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Saisie voeux</title>
</head>

<body bgcolor="#F1F1F1">
<div id="voeux1">
  <table width="1293" border="0">
    <tr>
      <td width="49"><label>Groupe:</label></td>
      <td width="41"><select style="max-width:50px;" name="groupe" id="groupe" onchange="section()" width="100px">
      <option></option>
	  <?php
		require_once("connexion.php");


		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$query = "select distinct niveau_mat from matiere order by niveau_mat";
		$result = $conn->query($query);

		while ($row = $result->fetch_assoc()) {
			echo "<option value='".$row['niveau_mat']."'>".$row['niveau_mat']."</option>";	
		}

		$conn->close();

	  ?>
      </select></td>
      <td width="48"><label>Section:</label></td>
      <td width="41">
	  <div id='section1'>
	  <select style="max-width:50px;" name="section" id="section" >
	  </select >
	  </div>
      </td>
      <td width="54"><label>Matiére:
      </label></td>
      <td width="41">
	  <div id="matiere1">
	  <select style="max-width:50px;" name="matiere" id="matiere">
    
      </select >
	  </div></td>
      <td width="85"><label>Type matière:
      </label></td>
      <td width="41">
	  <div id="typemat1">
	  <select style="max-width:50px;" name="typemat" id="typemat">
	  <option></option>
	  <option value="TP">TP</option>
	  <option value="CI">CI</option>
	  <option value="TP/CI">CI/TP</option>
      </select >
	  </div></td>
      <td width="67">DataShow:</td>
      <td width="20"><input type="checkbox" name="datashow" id="datashow" /></td>
      <td width="88"><label>Commentaire:
      </label></td>
      <td width="197"><textarea name="com" id="com" cols="30" rows="3"></textarea></td>
      <td align="right" width="150">
	  
  <input type="button" name="valider" id="valider" value="valider" onclick="submit()"/>
  </td>
    </tr>
  </table>
</div>

<script src="borni.js"></script>
</body>
</html>