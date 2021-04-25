<?php
if (isset($_COOKIE["auth"])) {
  $cookie = $_COOKIE["auth"];
  if ($cookie = false) {
    header('Location:motdepasse.php');
  }
}
else {
  header('Location:motdepasse.php');
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="css/photos.css">
  <link rel="stylesheet" href="css/all.min.css">
  <title>LMNG - Photographie</title>
</head>
<body>
  <nav>
    <a target="_blank" href="cheval.html" class="menu-item">Cheval</a>
    <a target="_blank" href="judo.html" class="menu-item">Judo</a>
    <a target="_blank" href="foot.html" class="menu-item">Foot</a>
  </nav>
  <div id="content">
    <div id="info">
      <div class="info-img">
        <img src="img/photo_meline4.jpg" alt="Méline" id="roundedimg">
      </div>
      <div id="info-text">
        <p class="info">Salut!</p>
        <p class="info">Je suis Méline Bellier Benistand, j'ai 15 ans et je suis photographe amateur!</p>
        <p class="info">J'utilise un Nikon D3500 et un objectif 18-140mm.</p>
      </div>
    </div>
    <div id="main">
      <h2 class="title">Bienvenue!</h2>
      <p class="main">Voici un site sur lequel vous pourrez télécharger mes photos simplement! Il y a trois rubriques: Cheval, Judo et Foot!</p>
      <p class="main">J'espère que mon travail vous plaira!</p>
    </div>
  </div>
  <footer>
    <p class="footer">Suivez moi sur <a href="">Instagram <i class="fab fa-instagram"></i></a></p>
    <p class="right">Site réalisé par Orane Bouy--Intartaglia</p>
  </footer>
</body>
</html>
