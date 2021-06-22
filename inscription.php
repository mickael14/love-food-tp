<?php

require_once 'header.inc.php';
?>

<section id="section1">
<div id="inscription">
  <div id="moduleinscription">
 
<div id="co3"class="animate__animated animate__backInLeft">
<h1> Inscription </h1>
<img src="./barre.svg">
<form class="row g-3" method="POST" action="controllerInscription.php" enctype="multipart/form-data"> 
  <div class="col">
    <label for="validationDefault01" class="module">Nom</label><br>
    <input type="text" class="champ" id="validationDefault01"  name="nameUser" required>
  </div><br><br>
  <div class="col">
    <label for="validationDefault01" class="modolue">Prenom</label><br>
    <input type="text" class="champ" id="validationDefault04"  name="prenomUser" required>
  </div><br><br>
  <br>
  <div class="col">
    <label for="validationDefault02" class="module">Email</label><br>
    <input type="email" class="champ" id="validationDefault02" name="mailUser" required>
  </div>
 
  <div class="col">
    <label for="validationDefault05" class="module">Mot de passe</label><br>
    <input type="password" class="champ" id="validationDefault05" required name="passwordUser">
  </div>

  <div class="mb-3">
  <label for="picture" class="module">Photo de profil</label>
  <input class="fileform" type="file" id="picture" name="pictureUser">
</div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        J'accepte les conditions  générales d'utilisation
      </label>
    </div>
  </div>
  <div class="col">
    <button class="bouttonplein" type="submit" name="submit"style="font-size:24px;">Inscription</button>
  </div>
</form>   
</div>
</div>
<div id="co4"class="animate__animated animate__backInRight">
<img src="./inscription.png"id="imginscri">
</div></div>
</section>
<?php

require_once 'footer.inc.php';
?>