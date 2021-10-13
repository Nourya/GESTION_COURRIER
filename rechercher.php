<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"  href="css/rechercher1.css">
</head>
<body>
	<div style="background-image: url('envel.jpg');" class="c">
	<div>
<img src="logoo.png" >
</div>

<form action="modifier.php" method="POST">

		<h1>Recherche d'un expéditeur</h1>
		<label for="expéditeur" >
			<h2>Entrez  l'expéditeur : </h2>
			<input type="text" name="expéditeur" id="expéditeur" class="b">
		</label>
		<input type="submit" name="send" value="rechercher">

		
		
	</form>
	<br><br><button class="h" onclick="window.location.href = 'http://localhost/php_courses/logtgr.php'"> Déconnection</button>
</body>
</html>
