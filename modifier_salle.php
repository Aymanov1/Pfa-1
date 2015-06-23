<?php
require_once("connexion.php");
session_start();

$num = $_SESSION['num_salle'];
$type = $_SESSION['type_salle'];
if (!empty($_POST)) {
    $num1 = addslashes($_POST['num']);
    $type = addslashes($_POST['type']);

    $commande = "UPDATE  salle set num_salle=$num1 ,type_salle='$type' WHERE num_salle=$num";
    $res = $conn->query($commande) or die("ressayer une autre fois");




    header("location:javascript://history.go(-2)");
}
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
                           
                            <div class="col-sm-3">

                            </div>

                        </div>

                    </div>
                </div>
            </div><!--/header-middle-->
            <center>
                <div style="width: 800px">
                    <form name="ajoutEns"  action="" method="POST">

                        <table class="table table-striped table-bordered table-hover">
                            <tr>
                                <td><p>Numero de salle: <font color="red">*</font></p></td><td><input type="text" maxlength="100" value="<?php echo $num; ?>" maxlength="3" name="num" id="nomComplet" onblur="verifform(this);"></td>
                            </tr>

                            <tr>

                                <td><p>Type de salle: <font color="red">*</font></p></td><td><input type="text" maxlength="100" value="<?php echo $type; ?>" maxlength="1" name="type" id="charge" onblur="verifform(this);"></td>
                            </tr>



                        </table>
                        <input type="submit" name="envoyer" value="Valider"><input type="reset" value="Annuler" name="annuler">
                    </form>
                </div>

                <p><font align="right" color="red" >*: champ obligatoire</font></p>

                </aside>
            </center>	<div class="header-bottom"><!--header-bottom-->
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
