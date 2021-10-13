<?php 
            $host               = "localhost";
            $user               = "nourya";
            $password      = "nouryahasna";
            $dbName       = "test";

$conn = mysqli_connect($host, $user, $password,$dbName);

if(!empty($_GET['numéro']) ? $_GET['numéro'] : NULL){
$numéro = !empty($_GET['numéro']) ? $_GET['numéro'] : NULL;
$query="DELETE from `courr` where numéro ='$numéro'";
$result = mysqli_query($conn,$query);
header("Location:modifier.php");
}
   ?>
