<!DOCTYPE html>
<html lang="fr">
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://csshake.surge.sh/csshake.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Accueil</title>



</head>

<?php $resultat = session_status();
if ($resultat==2) : ?>
<body>
  <nav id=nav2>
    <div id="movenav3">
    <img src="./logo.svg"style="width:150%;">
</div>
<div id="movenav4">
  <ul id="ul1">
  <a href="listResto.php?liste=restos"style="text-decoration:none;"><li class="twoli"style="color:white;"> Liste des restaurants </li></a>
    <a href="./ajoutResto.php"style="text-decoration:none;"><li class="twoli"style="color:white;"> Ajouter un restaurant </li></a>
    <a href="./profil.php"style="text-decoration:none;"><li style="color:white;"> Profil </li></a>
    <a href="./index.php"style="text-decoration:none;"><li class="twoli"style="color:white;"> Deconnexion </li></a>
</ul>
</div>
</nav>

  <!--
<nav id="navmove">
  <div class="cp">
    <a class="p" href="listResto.php?liste=restos">Liste des restaurants</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="p">
        <a class="p" aria-current="page" href="profil.php">Profil</a>
        
        <a class="p" href="./ajoutResto.php">Ajoute un resto</a>
        <form method="POST"action="logout.php">
        <button type="submit" class="btn btn-primary" name="submit">Deconnexion</button>
        </form>
      </div>
    </div>
  </div>
</nav>-->
<?php else : ?>

  <nav id="nav1"> 
    <div id="movenav1">
    <img src="./logo.svg"style="width:150%;">
</div>
<div id="movenav2">
  <ul id="ul1">
    <a href="./index.php"style="text-decoration:none;"><li class="firstli" style="color:white;"> Connexion </li></a>
    <a href="./inscription.php"style="text-decoration:none;"><li style="color:white;"> Inscription </li></a>
</ul>
</div>
</nav>

 
<?php  endif?>


