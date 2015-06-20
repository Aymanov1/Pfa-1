<!DOCTYPE html>
<html lang="en">
<head><?php
		session_start();
		if(!isset($_SESSION["idprofs"])){
			header("Location: 404.html");
			die();
		}
	?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Schedule generator</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<div class="container text-center">
		<div class="logo-404">
			<img src="images/home/logo.png" alt="" />
		</div>
		<div class="content-404">
			<?php
				require_once("connexion.php");
				$query = "select * from voeux where `id_Voeux` = ".$_GET['q'];
		$result = $conn->query($query);
		echo "<table  class='table table-striped table-bordered table-hover' align='center'>";
		while ($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td align='center'>Groupe</td>";
			echo "<td align='center'><input type='text' name='group' value='".$row['groupe']."'></td></tr>";			
			echo "<tr>";
			echo "<td align='center'>Section</td>";
			echo "<td align='center'><input type='text' name='section' value='".$row['section']."'></td></tr>";
			echo "<tr>";
			echo "<td align='center'>Matière</td>";
			echo "<td align='center'><input type='text' name='matiere' value='".$row['matiere']."'></td></tr>";
			echo "<tr>";
			echo "<td align='center'>Type de la matière</td>";
			echo "<td align='center'><input type='text' name='type' value='".$row['type_mat']."'></td></tr>";
			
		}
		
		echo "</table>";
		$conn->close();
			?>
		<center><input type='button' value='submit' onClick="window.open('modif.php?g=' + group.value + '&s=' + section.value + '&m=' + matiere.value + '&t=' + type.value + '&q=' + <?php echo $_GET['q'];?>','_self');"></center>
		</div>
	</div>

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>