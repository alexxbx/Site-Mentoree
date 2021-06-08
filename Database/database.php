
<?php

	$id = $_GET["id"];
	$prenom = $_GET["prenom"];
	$nom = $_GET["nom"];
	$email = $_GET["email"];
	$Conseil = $_GET["Conseil"];
	$urlsite = $_GET["urlsite"];
	$position = $_GET["position"];
	$employeur = $_GET["employeur"];
	$NomStartUp = $_GET["NomStartUp"];
	$Rôle = $_GET["Rôle"];
	$Pays = $_GET["Pays"];
	$TypeStartUp = $_GET["TypeStartUp"];
	echo 'Bonjour ' . $nom . '  -  '.$prenom. '!';


	$servername = "localhost";
	$dbname = "DBMentoree";

	try{
    $dbh = new PDO('sqlite:host=localhost;dbname=DBMentoree', $user, $pass);
    $requete = 'SELECT * from users';
    $result = $dbh->query($requete);
    
    foreach($dbh->query($requete) as $row) {
      print_r($row);
    }
    $dbh = null;
    } catch (PDOException $e) {
      print "Erreur : " . $e->getMessage() . "<br/>";
      die();
    }
$conn = null;


?>
?>