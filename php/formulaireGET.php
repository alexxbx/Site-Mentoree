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

	try {
	    $conn = new PDO("sqlite:host=$servername;dbname=$dbname");
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    
	    $sql = "INSERT INTO users (id, Nom, Prenom, email, Conseil, urlsite, position, employeur, NomStartUp, Rôle, Pays, TypeStartUp)
	    VALUES ('$id', '$nom', '$prenom', '$email', '$Conseil', '$urlsite', '$position', '$employeur', '$NomStartUp', '$Rôle', '$Pays', '$TypeStartUp')";
	    // use exec() because no results are returned
	    $conn->exec($sql);
	    echo "New record created successfully";
	    }
	catch(PDOException $e)
	    {
	    echo $sql . "<br>" . $e->getMessage();
	    }

$conn = null;


?>