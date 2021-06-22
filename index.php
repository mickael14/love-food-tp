<?php require_once 'header.inc.php' ?>

<section id="section1">
<div id="connexion"class="animate__animated animate__backInLeft">
<h1> Connexion </h1>
<img src="./barre.svg"> 
<div id="co1">
<form action="controllerLogin.php" method="POST">

    <label for="exampleInputEmail1" class="module">Adresse mail</label>
    <input type="email" class="champ" id="exampleInputEmail1" aria-describedby="emailHelp" name="mailUser"required>
   

  <div class="mb-3">
    <label for="exampleInputPassword1" class="module">Mot de passe</label>
    <input type="password" class="champ" id="exampleInputPassword1" name="passwordUser"required>
  </div>

  <button type="submit" class="bouttonplein" name="submit">Connexion</button>
</form>
<?php $status = session_status();   ?>
<?= $_SESSION['test']; ?>


</div>
</div>
<div id="co2"class="animate__animated animate__backInRight">
<img src="./background1.png">
</div>
</section>

<?php require_once 'footer.inc.php' ?>