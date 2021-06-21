<?php
require_once 'controllerResto.php';
 require_once 'header.inc.php';
 
 $restos = $_SESSION['AllResto'];
?>

<main>
  
<div class="container-fluid">
<div class="row justify-content-center mt-5">
<div class="col-7">
<p class="fs-1">Votre réservation a bien été prise en compte !</p>
<a class="btn btn-outline-success" href="profil.php" role="button">Retour à la liste des restaurants</a>
<a class="btn btn-outline-primary" href="profil.php" role="button">Retour à mon profil</a>
   </div>
   </div>
   </div>


<?php

require_once 'footer.inc.php';

?>