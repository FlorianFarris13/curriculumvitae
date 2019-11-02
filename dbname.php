<?php
try{
	$bdd = new PDO("mysql:host=localhost;dbname=FORMULAIRE","farris","farris13");
}
catch(PDOEXception $error){
	echo "erreur" . $error-> getMessages();
}
if(!empty($_POST)){
$nom = $_POST['nom'];

$prenom = $_POST['prenom'];

$email = $_POST['email'];

$insert = $bdd->query("INSERT INTO FORMULAIRE VALUES ('$nom' , '$prenom' , '$email')");
} else{
	$nom = "";
	$prenom = "";
	$email = "";

}
?>