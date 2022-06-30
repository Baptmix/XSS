<?php
ob_start();
session_start();
include("db_config.php");
if (!$_SESSION["username"]){
header('Location:login.php?msg=1');
}
ini_set('display_errors', 1);
?>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Authentification</title>

    <link href="css/htmlstyles.css" rel="stylesheet">
	</head>

  <body>
  <div class="container-narrow">
		
		<div class="jumbotron">
			<p class="lead" style="color:white">
				Bienvenue <?php echo $_SESSION["username"]; ?>, connexion réussie !</a>
			</p>
        </div>
		
	  <div class="footer">
		<p><h4><a href="index.php">Déconnexion</a> |
              <a href="comments.php">Commentaires</a><h4> </p>
      </div>
	  
	  
	  <div class="footer">
<!--		<p>Riyaz Walikar | @riyazwalikar</p>-->
      </div>

	</div> <!-- /container -->
  
</body>
</html>
