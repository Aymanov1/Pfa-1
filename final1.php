<!DOCTYPE html>
<html lang="en">
<head>
	<?php session_start();?>
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
<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> 74274862 74274090</a></li>
								<li><a href="http://www.enis.rnu.tn" target="blank"><i class="fa fa-envelope"></i> www.enis.rnu.tn</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/innovation.enis?fref=ts"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://plus.google.com/116544286547792739837"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<img src="images/home/logo.png" alt="" />
						</div>
						
					</div>
					<!--<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Account</a></li>
	
								<li><a href="login.html" class="active"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>-->
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="enseignement.php">Voeux Enseignements</a></li>
								<li><a href="voeuxcreneaux.php">Voeux temporelles</a></li>
								<li><a href="spec_contraintes.php">Specifications des Contraintes</a></li>			<li><a href="final1.php">Mes Voeux</a></li>
                         
								
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
<div class="col-sm-3">
						
					</div>
					
				</div>
				
			</div>
		</div>
		</div><!--/header-middle-->
	<center>	
<div   style="width: 800px">
	<?php
		
		require_once("connexion.php");
		$query = "select * from voeux where `idprofs` = ".$_SESSION["idprofs"];
		$result = $conn->query($query);
		echo "<table  class='table table-striped table-bordered table-hover' align='center'>";
		echo "  <thead>
									<tr>
										<th><center>Groupe</center></th>
							<th><center>Section</center></th>
						<th><center>Matiére</center></th>
					<th><center>Type de la matiére</center></th>
					</tr>
				</thead>";
		while ($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td align='center'>".$row['groupe']."</td>";
			echo "<td align='center'>".$row['section']."</td>";
			echo "<td align='center'>".$row['matiere']."</td>";
			echo "<td align='center'>".$row['type_mat']."</td>";?>
			<td align='center'><input type='button' value='supprimer' onclick='window.open("supp_voeux.php?q=<?php echo $row['id_Voeux'];?>","_self");'></td>
			<?php echo "</tr>";
		}
		echo "</table>";

		$conn->close();

	
	
	
	?>

  </div></center>
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>