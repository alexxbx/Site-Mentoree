<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
</head>
<body>
    <h1>Thank You</h1>
    <p>Here is the information you have submitted:</p>
    <ol>
        <li><em>Username:</em> <?php echo $_POST["name"]?></li>
        <li><em>Password:</em> <?php echo $_POST["email"]?></li>
      
	</ol>
	<a class="button" href="Accueil.php" title="Connect"><img class="accueillogo"><text class="connexion">Retour</text></a>
</body>
</html>