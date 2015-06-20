<!DOCTYPE html>
<html lang="en">

    <head><?php
	require_once("connexion.php");
	session_start();
		if(isset($_SESSION["idprofs"])){
			$query = "select type from authentification where profs_idprofs='".$_SESSION["idprofs"]."'";
			$result = $conn->query($query);
			while ($row = $result->fetch_assoc()) {
				if($type = $row['type'] == "admin") {
					header("location: adminEnseignant.php");
					die();
				}
				else {
					header("location: enseignement.php");
					die();
				}
			}
		}
	?>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Connection</title>

        <!-- Body CSS -->
        <link href="css/body.css" rel="stylesheet">

        <!-- Menu CSS -->
        <link href="css/menu.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/custom.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font.css" rel="stylesheet" type="text/css">


    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">S'authentifier</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Utilisateur" id="user" type="user" autofocus>

                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Mot de passe" id="password" type="password" value="">

                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" id="Remember Me">Souvenez de moi
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <a href="javascript:CreateXHR()" id="valider" class="btn btn-lg btn-success btn-block">Se connecter</a><br/>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript"src="Ajax.js"></script>
    </body>

</html>