<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/update1.css">

    <meta charset="UTF-8">
   
      <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  
  <script src="jsjQuery.js" async></script>
      
 
</head>
<body>
  <div style="background-image: url(envel.jpg);" class="c">
  <div>
    <img src="logoo.png">
  </div>

<?php





  $host               = "localhost";
            $user               = "nourya";
            $password      = "nouryahasna";
            $dbName       = "test";
            $conn = mysqli_connect($host, $user, $password,$dbName);


            $numéro = !empty($_GET['numéro']) ? $_GET['numéro'] : NULL;
$query="SELECT * FROM `courr` where numéro='$numéro'";
$result = mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);





  ?>


<form action="update.php" method="post" class="a">

  <p>num      : <br><input type="text" name="numéro" value="<?php echo $row['numéro'] ; ?>"></p>
  <p>Date      : <br><input type="date" name="date" value="<?php echo $row['Date'] ; ?>"></p>
  <p>expéditeur: <br><input type="text" name="expéditeur" value="<?php echo $row['expéditeur'] ; ?>" ></p>
  <p>objet    :<br><input type="text" class="za" name="objet" value="<?php echo $row['objet'] ; ?>"  > </p>
   <p> <input type="submit" name="send" value="modifier"></p>

   <?php 
            $host               = "localhost";
            $user               = "nourya";
            $password      = "nouryahasna";
            $dbName       = "test";
            $conn = mysqli_connect($host, $user, $password,$dbName);
$numéro = !empty($_POST['numéro']) ? $_POST['numéro'] : NULL;

 
   $date = !empty($_POST['date']) ? $_POST['date'] : NULL;
   $expéditeur = !empty($_POST['expéditeur']) ? $_POST['expéditeur'] : NULL;
   $objet = !empty($_POST['objet']) ? $_POST['objet'] : NULL;
   $pSubmit = !empty($_POST['send']) ? $_POST['send'] : NULL;

 if($pSubmit){
$numéro = !empty($_POST['numéro']) ? $_POST['numéro'] : NULL;
$query="UPDATE `courr` SET `numéro`='$numéro',`Date`='$date',`expéditeur`='$expéditeur',`objet`='$objet' where numéro = '$numéro'";
$result = mysqli_query($conn,$query);
}
?>
</form>
<button class="h" onclick="window.location.href = 'http://localhost/php_courses/logtgr.php'"> Déconnection</button>
<p><h2> cliquer <a href="cr.php"> ici </a> pour revenir à la page d'accueil</h2></a></p>
</body>
</html>
