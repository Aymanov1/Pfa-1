<!DOCTYPE html>
<html lang="en">
<head>
<?php
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
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-244-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-214-precomposed.png">
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
<br><br><br>




<div align="center"> 
<br><br>
<div   style="width: 800px">

        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th></th>
                    <th><center>8:15-20:15</center></th>
        <th><center>10:30-22:30</center></th>

    <th></th>
    <th><center>14:00-26:00</center></th>
<th><center>16:15-28:15</center></th>
</tr>
</thead>
<tbody> 
<tr>                   
   <td>Lundi</td>
<td><center><input type="checkbox" name="c" id="1"/></td>
<td><center><input type="checkbox" name="c" id="2"></center></td>
<td></td>
<td><center><input type="checkbox" name="c" id="3"></center></td>
<td><center><input type="checkbox" name="c" id="4"></center></td>
</tr>
<tr>
<td>Mardi</td>
<td><center><input type="checkbox" name="c" id="5"></center></td>
<td><center><input type="checkbox" name="c" id="6"></center></td>
<td></td>
<td><center><input type="checkbox" name="c" id="7"></center></td>
<td><center><input type="checkbox" name="c" id="8"></center></td>
</tr>
<tr>
<td>Mercredi</td>
<td><center><input type="checkbox" name="c" id="9"></center></td>
<td><center><input type="checkbox" name="c" id="10"></center></td>
<td></td>
<td><center></center></td>
<td><center></center></td>
</tr>
<tr>
<td>Jeudi</td>
<td><center><input type="checkbox" name="c" id="11" ></center></td>
<td><center><input type="checkbox" name="c" id="12"></center></td>
<td></td>
<td><center><input type="checkbox" name="c" id="13"></center></td>
<td><center><input type="checkbox" name="c" id="14"></center></td>
</tr>
<tr>
<td>Vendredi</td>
<td><center><input type="checkbox" name="c" id="15"></center></td>
<td><center><input type="checkbox" id="16"></center></td>
<td></td>
<td><center><input type="checkbox" name="c" id="17"></center></td>
<td><center><input type="checkbox" name="c" id="18"></center></td>
</tr>
<tr>
<td>Samedi</td>
<td><center><input type="checkbox" name="c" id="19"></center></td>
<td><center><input type="checkbox" name="c" id="20"></center></td>
<td></td>
<td><center></center></td>
<td><center></center></td>
</tr>
</tbody>
</table>

</div></div>

    <center>
<button type="submit"  onclick="calcul();" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button></center>
	
	<br>
	
	 <center><button type="submit"  onclick="toggle();" class="btn btn-default"> Check all <i class="fa fa-arrow-circle-o-right"></i></button>
<button type="submit"  onclick="untoggle();" class="btn btn-default"> UnCheck all <i class="fa fa-arrow-circle-o-right"></i></button>

	</center>
    
<br>

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
		<script type="text/javascript">
function calcul(){
	
	var tab =new Array(20);
     var count=0;

      for (var i = 1 ; i<21; i++) {
			
		if(document.getElementById(i).checked==true)
			{tab[i]=1;count++;
		
			
			}
		else{
			tab[i]=0;}}
			
	request = "";
	
	for (var i = 1 ; i<21; i++) {
		request += tab[i];
	}
			
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
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			alert(xmlhttp.responseText);
			window.open('spec_contraintes.php','_self');
		} 
    }
    xmlhttp.open('GET', "submit2.php?q=" + request);
    xmlhttp.send();}
			
		

//window.open('spec_contraintes.html','_self');


	
	function toggle() {for (var i = 1 ; i<21; i++) {
			
		if(document.getElementById(i).checked==false)
			document.getElementById(i).checked=true;
			
			}
  }
  
  function untoggle() {for (var i = 1 ; i<21; i++) {
			
		if(document.getElementById(i).checked==true)
			document.getElementById(i).checked=false;
			
			}
  }


	</script>
</body>
</html>
