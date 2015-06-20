<!DOCTYPE html>
<html>
<head>
	<title>ajout ensiegnant</title>


 
</head>




<body>
<header>
	
</header>
<aside>
<center>
	<form name="ajoutEns"  action="redirect1.php" method="POST">
	<table>
	<tr>
	<td><p>Nom complet: <font color="red">*</font></p></td><td><input type="text" maxlength="100" maxlength="3" name="nom" id="nomComplet" onblur="verifform(this);"></td>
	</tr>
	<tr>
	<td><p>Grade: </p></td>
		<td><select name="grade" id="grade">
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

	<p><font align="right" color="red" >*: champ obligatoire</font></p>
	
</aside>
</center>
<footer>
	
</footer>

</body>
</html>