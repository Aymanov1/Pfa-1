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
								<li><a href="http://www.enis.rnu.tn" target="blank"><i class="fa fa-envelope"></i> www.enis.rnu.tn </a></li>
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
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="enseignement.php">Voeux Enseignements</a></li>
								<li><a href="voeuxcreneaux.php">Voeux temporelles</a></li>
								<li><a href="spec_contraintes.php">Specifications des Contraintes</a></li>			<li><a href="final1.php">Mes Voeux</a></li>
                         
								
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					
				</div>
			</div>
		</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
<div align="center"> 
<br><br>
<div   style="width: 500px">

        <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
   
</thead>
<tbody>                    
    <tr >
        <td > <center>Jumelage :</center></td>
        <td ><center><input type="checkbox" id="1"> </center></td>
</tr>
<tr>
    <td><center>	Journee Consecutives : </center></td>
    <td><center><input type="checkbox" id="2"></center></td>

</tr>
<tr>
    <td><center>Maximum d'horaire par jour : </center></center></td>
    <td><center><select id="3">
  <option value="2">2</option>
  <option value="4">4</option>
  <option value="6">6</option>
  <option value="8">8</option>
</select></center></td>

</tr>
<tr>
    <td><center>Maximum de jour par semaine : </center></td>
    <td><center><select id="4">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
 <option value="5">5</option>
  <option value="6">6</option>
</select></center></td>
</tr>
<tr>
    <td><center>Salle preferee :</center></td>
     <td><center><select id="5">
  <option value="Les 'S'">Les 'S'</option>
  <option value="Bloc 8000">Bloc 8000</option>
  <option value="Bloc microinfo">Bloc microinfo</option>

</select></center></td>
</tr>

</tbody>
</table>

</div>	

</div>
		<br><br><br><center><button class="btn btn-default" onclick="choix();" type="submit">

    <i class="fa fa-arrow-circle-o-right"></i>

</button></center>
		</div><!--/header-bottom-->  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	<script type="text/javascript">
	function choix(){
	var jumelage;
jumelage  = document.getElementById("1").checked;
			
				var journee_consecutive;
journee_consecutive  = document.getElementById("2").checked;
	
	var maxHoraire;
maxHoraire = document.getElementById("3").value;
		var maxJour;
maxJour = document.getElementById("4").value;
	var salle;
salle = document.getElementById("5").value;
 if (window.XMLHttpRequest)
    {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else
    {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }

    xmlhttp.onreadystatechange = function ()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                alert(xmlhttp.responseText);
                {
                    	//alert(xmlhttp.responseText);
						window.open('final1.php','_self');
                }//else alert("internal problem");
    }
	
	xmlhttp.open("GET","final.php?q=" + jumelage + "&a=" + journee_consecutive + "&c=" + maxHoraire + "&y=" + maxJour + "&t=" + salle);
	xmlhttp.send();
	
	
	
}


	</script>

</body>
</html>
