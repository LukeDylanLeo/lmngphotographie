<?php
  $mdp = $_POST['mdp'];
  $motdepasse = 'motdepasse';
  if ($mdp == $motdepasse) {
    header('Location:photos.html');
  }
  else {
    header('Location:wrongpassword.html');
  }

 ?>
