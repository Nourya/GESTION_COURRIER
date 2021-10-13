
<?php
require('config.php');


if (isset($_POST['username'])){
  $username = !empty($_POST['username']) ? $_POST['username'] : NULL;
  $password = !empty($_POST['password']) ? $_POST['password'] : NULL;
    $query = "SELECT * FROM `logtgr` WHERE username='$username' and password='$password'";
  $result = mysqli_query($conn,$query);
  $rows = mysqli_num_rows($result);
  if($rows==1){
      $_SESSION['username'] = $username;
      header("Location: cr.php");
  }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }
}
?>
<form class="box1" action="" method="post" name="login">
<h1 class="box-logo box-title">

  <div class="input-icone">
<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" class="no" >
<i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
</div>
<br>

<div class="input-icone">
 <input type="password" class="box-input" name="password" placeholder="Mot de passe"  class="n">
<i class="fa fa-key fa-lg fa-fw" aria-hidden="true"></i>
</div>
<br>


<input type="submit" value="Connexion " name="submit" class="box-button" >
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</div>
</body>
</html>
