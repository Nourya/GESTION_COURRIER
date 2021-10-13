<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> <?php echo $homePage;?></title>
      <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  
  <script src="jsjQuery.js" async></script>
      <link rel="stylesheet" href="css/ctgr1.css">
	</head>
</head>
<body>
  
  <div style="background-image: url('envel.jpg'); " class="ba" >
     
  	<div class="a">
    <img src="logoo.png">
    </div>
     



    <form action="cr.php" method="post" class="a">
  <p>Date      : <input type="Date" name="Date"  required></p>
  
  <?php
  $host               = "localhost";
            $user               = "nourya";
            $password      = "nouryahasna";
            $dbName       = "test";

$conn = mysqli_connect($host, $user, $password,$dbName);
$query="SELECT expéditeur FROM  `expéditeur` ";
$result = mysqli_query($conn,$query); ?>
<p> expéditeur:
 <select size="1" name="expéditeur" required>
<OPTION>   </OPTION>
<?php
while ($row=mysqli_fetch_array($result))
{
?>
<OPTION> <?php echo $row['expéditeur']; ?></OPTION>
<?php
}
?>
</p></select>
  <p>Objet détaillé    :<br><textarea type="text" class="za" name="Objet" required></textarea> </p>
 <p> <input type="submit" name="send" value="ajouter"></p>
</form>

         <button  type="submit" on onclick="window.location.href = 'http://localhost/php_courses/rechercher.php';">Rechercher </button> 
        <button class="h" onclick="window.location.href = 'http://localhost/php_courses/logtgr.php'"> Déconnection</button>
         
   <?php 
            $host               = "localhost";
            $user               = "nourya";
            $password      = "nouryahasna";
            $dbName       = "test";

$conn = mysqli_connect($host, $user, $password,$dbName);
   $pDate = !empty($_POST['Date']) ? $_POST['Date'] : NULL;
   $pExpéditeur = !empty($_POST['expéditeur']) ? $_POST['expéditeur'] : NULL;
   $pObjet = !empty($_POST['Objet']) ? $_POST['Objet'] : NULL;
   $pSubmit = !empty($_POST['send']) ? $_POST['send'] : NULL;
  
   if($pSubmit){
   $query="INSERT INTO `courr`(`Date`,`expéditeur`,`Objet`) VALUES('$pDate','$pExpéditeur','$pObjet')";
 
   $result = mysqli_query($conn,$query);
   
} 
   ?>
   <p >cliquer  <a href="connection.php">ici</a> pour afficher les courriers</p>
   
</body>
</html>
