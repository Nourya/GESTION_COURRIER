<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"  href="css/modifier11.css">
</head>
<body>
	<div style="background-image: url(envel.jpg);" class="p">
	<div>
<img src="logoo.png" >
</div>
</body>
</html>
<style>
      table { border-color: #8ebf42; background-color: #d9d9d9;}
     th  {border:2.5px solid #095484;}   
      td {border:2.5px solid #095484;}
    </style>
<table class="content-table" align="center">
	<th>numéro</th>
	<th>Date</th>
	<th> expéditeur</th>
	<th>objet</th>
	<th>supp</th>
	<th>modifier</th>


<?php
            $host         = "localhost";
            $user         = "nourya";
            $password     = "nouryahasna";
            $dbName       = "test";

$conn = mysqli_connect($host, $user, $password,$dbName);
$expéditeur = !empty($_POST['expéditeur']) ? $_POST['expéditeur'] : NULL;
$query= "SELECT * FROM `courr` where expéditeur like '%$expéditeur%'";
$result = mysqli_query($conn,$query);
if($result){
	while($row=mysqli_fetch_assoc($result)){
		$numéro=$row['numéro'];
		echo "<tr>"."<td>".$numéro."</td>"."<td>". $row['Date']."</td>"."<td>".$row['expéditeur']."</td>"."<td>".$row['objet']."</td>"."<td>"."<a href='supp.php?numéro=$numéro'>supp</a>"."</td>"."<td>"."<a href='update.php?numéro=$numéro'>modifier</a>"."</td>"."</tr>" ;
			}
	echo "</table>";
	
}
else{
	echo "y a une erreur";
}


?>
<button class="h" onclick="window.location.href = 'http://localhost/php_courses/logtgr.php'"> Déconnection</button>
