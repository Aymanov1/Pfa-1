<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Schedule-Generator</title>
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
								<li><a href="enseignement.html">Voeux Enseignements</a></li>
								<li><a href="voeuxcreneaux.html">Voeux temporelles</a></li>
								<li><a href="spec_contraintes.html">Specifications des Contraintes</a></li>
                         
								
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
<div class="col-sm-3">
						
					</div>
					
				</div>
				
			</div>
		</div>
		</div><!--/header-middle--><?php

session_start();
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style_admin.css" type="text/css" media="all">';
require_once("connexion.php");
$id=$_SESSION['id'];
$nom =$_SESSION['nom'];


$req="select * from  voeux where idprofs='$id' ";
echo ' <center>
<center><h2>Les voeux de (Mr/Mme) '.$nom.':</h2><hr></center>
<table class="table table-striped table-bordered table-hover">
<th>matiere</th>
<th>Type</th>
<th>groupe</th>
<th>section</th>
<th>datashow</th>
<th>jumlage</th>
<th>journée consecutif</th>
<th>max horaire par semaine</th>
<th>max jour</th>
<th>salle préféré</th>
<th>chrono</th>


';
$commande=$conn->query($req);
 while ($resultat=$commande->fetch_assoc()){
                      $matiere=$resultat['matiere'];
                      $type=$resultat['type_mat'];
                      $groupe=$resultat['groupe'];
                        $section=$resultat['section'];
                        $datashow=$resultat['datashow'];
                        $jumlage=$resultat['jumlage'];
                        $journéeCon=$resultat['journee_consecutif'];
                        $maxh=$resultat['max_horaire_semaine'];
                         $maxjps=$resultat['max_jour_semaine'];
                           $salle=$resultat['salle_pref'];
                             $crenaux=$resultat['voeux_creneaux'];
                      echo '<form action="choixbtnv.php" method="POST" >

                      <tr>
	
                      <td>'.$matiere.'<input type="hidden" name="matiere" value="'.$matiere.'"></td>
                      <td>'.$type.'<input type="hidden" name="type" value="'.$type.'"></td>
                      <td>'.$groupe.'<input type="hidden" name="groupe" value="'.$groupe.'"></td>
                      <td>'.$section.'<input type="hidden" name="section" value="'.$section.'"></td>
                      <td>'.$datashow.'<input type="hidden" name="datashow" value="'.$datashow.'"></td>
                      <td>'.$jumlage.'<input type="hidden" name="jumlage" value="'.$jumlage.'"></td>
                      <td>'.$journéeCon.'<input type="hidden" name="journéeCon" value="'.$journéeCon.'"></td>
                      <td>'.$maxh.'<input type="hidden" name="maxh" value="'.$maxh.'"></td>
                      <td>'.$maxjps.'<input type="hidden" name="maxjps" value="'.$maxjps.'"></td>
                      <td>'.$salle.'<input type="hidden" name="salle" value="'.$salle.'"></td>
                      <td>'.$crenaux.'<input type="hidden" name="crenaux" value="'.$crenaux.'"></td>
                      <td><input type="submit"  name="valider" value="valider"></td>
                      <td><input type="submit" name="modifier" value="modifier"></td>
                    
                      </tr></form>';

}
echo '</table></center>';


?>
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
							
                                    
                                
								
					
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	
	
	

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	<script src="valider2.js"></script>
	<script src="valider.js"></script>
</body>
</html>