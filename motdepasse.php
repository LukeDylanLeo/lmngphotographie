<?php
  setcookie("auth", false);
  $mdp = $_POST['mdp'];
  $motdepasse = 'motdepasse';
  $admin = 'Méline';
  if ($mdp == $motdepasse) {
    header('Location:photos.php');
    setcookie("auth", user);
  }
  elseif ($mdp == $admin) {
    header('Location:photos.php');
    setcookie("auth", admin);
  }
  else {
    header('Location:wrongpassword.html');
  }

 ?>
