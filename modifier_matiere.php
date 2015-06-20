<?php
                      
                      require_once("connexion.php");
                      session_start();
                      
                      $code= $_SESSION['code'];
                     $libelle= $_SESSION['libelle'];
                      $CI=$_SESSION['CI'];
                     $TP= $_SESSION['TP'];
                      $simestre= $_SESSION['simestre'];
                      $niveau=$_SESSION['niveau'];
                      $section=$_SESSION['section'];
                echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style_admin.css" type="text/css" media="all">';      
                      ?>
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
								<li><a href="voeuxcreneaux.html">Voeux temporelles</a></li>
								<li><a href="enseignement.html">Voeux Enseignements</a></li>
								<li><a href="spec_contraintes.html">Specifications des Contraintes</a></li>
                         
								
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
		<div style="width: 800px" >
<form action="" method="POST" name="matiere" >

	<table class="table table-striped table-bordered table-hover">
		<tr>
		<td>Code Matiére:</td>
		<td><input type="text" maxlength="20" name="code" value="<?php echo $code;?>" ></td>
		</tr>

       <tr>
		<td>Libellé</td>
		<td><input type="text" maxlength="20"  name="libelle" value="<?php echo $libelle; ?>"></td>
	   </tr>

	    <tr>
		<td>CI</td>
		<td><input type="text" maxlength="20" name="CI" value="<?php echo $CI;?>" ></td>
	   </tr>
	    <tr>
		<td>TP</td>
		<td><input type="text" maxlength="20"  name="TP"  value="<?php echo $TP;?>"></td>
	   </tr>

	    <tr>
		<td>Niveau</td>
		<td><input type="text" maxlength="20" name="niveau" value="<?php echo $niveau;?>" ></td>
	   </tr>

	    <tr>
		<td>Semestre:</td>
		<td><input type="text" maxlength="20" name="simestre"  value="<?php echo $simestre;?>"></td>
	   </tr>

	    <tr>
		<td>Section:</td>
		<td><input type="text" maxlength="20"  name="section" value="<?php echo $section;?>" ></td>
	   </tr>

	</table>
		<input type="reset" value="annuler" ><input type="submit" value="Valider">

	</form></div></center>
	<?php

               if(!empty($_POST)){
	                  $code1=$_POST['code'];
                      $libelle=$_POST['libelle'];
                      $CI=$_POST['CI'];
                      $TP=$_POST['TP'];
                      $niveau=$_POST['niveau'];
                      $simestre=$_POST['simestre'];
                      $section=$_POST['section'];
	           
	            $commande="UPDATE  matiere set code_mat='$code1' ,libelle='$libelle' ,CI='$CI',TP='$TP' ,niveau_mat='$niveau',

	            section_mat='$section',semestre_mat='$simestre' WHERE code_mat='$code'";
	              $res=$conn->query($commande) or die("ressayer une autre fois") ;
                     header('location:index_admin.php');
                  }

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