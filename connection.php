<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"  href="css/connexion1.css" class="no">
</head>
<body>
	<div style="background-image: url('envel.jpg');" class="k">
		
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
<table class="content-table">
	<th>numéro</th>
	<th>Date</th>
	<th> expéditeur</th>
	<th>objet</th>


<?php
            $host         = "localhost";
            $user         = "nourya";
            $password     = "nouryahasna";
            $dbName       = "test";

$conn = mysqli_connect($host, $user, $password,$dbName);
$query= "SELECT * FROM courr";
$result = mysqli_query($conn,$query);
if($result){
	while($row=mysqli_fetch_assoc($result)){
		echo "<tr>"."<td>".$row['numéro']."</td>"."<td>". $row['Date']."</td>"."<td>".$row['expéditeur']."</td>"."<td>".$row['objet']."</td>"."</tr>" ;
			}
	echo "</table>";
	
}
else{
	echo "y a une erreur";
}


?>
<button class="h" onclick="window.location.href = 'http://localhost/php_courses/logtgr.php'"> Déconnection</button>
