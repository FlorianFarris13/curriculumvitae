<?php
	include 'dbname.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<title>Document</title>
	<style>
	 	body{
	 		background-image: url('welcome.jpg');
	 		background-size: cover;
	 	}
	 </style>
</head>
<body>
	<form action="index.php" method="POST">
		<p><input type="text" name="nom" style="display:block; margin:auto;" required placeholder ="Nom"></p>
		<p><input type="text" name="prenom" style="display:block; margin:auto;" required placeholder ="Prenom"></p>
		<p><input type="text" name="email" style="display:block; margin:auto;" required placeholder ="Email"></p>
		<p><input type="submit" value="Login" name="login" style="display:block; margin:auto;"></p>
	</form>
<p>
	<?php
		

		if (isset($_POST['login'])){ // verifier que les champs sois remplie et que l'on es appuyer sur Login. 
			if ($nom == 'farris' and $prenom == 'florian' and $email == 'farris.florian@hotmail.com'){
		    
		        header('Location: CVflo.php');
		    }
		    else
		    {
		        echo "<p>
		        <FONT size=25>Erreur De Saisie</FONT></p>"; 

		        /*echo '<p><img src="giphy.gif" alt="gros"></p>'; Pour integret une image ou un GIF*/
		        /*echo '<embed  height="60" type="audio/midi" width="144" src="alarme.mp3" volume="60" loop="true" autostart="true"></embed>'; Ne marche pas car "type=audio/midi" et non "type=audio/mpeg" NE MARCHE PAS*/

		         /* echo '<embed height="60" type="audio/mpeg" width="144" src="poin.mp3" volume="60" loop="true" autostart="true"></embed>'; Fonctionne*/
    };}
	?>
</p>
</body>
</html>