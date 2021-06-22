<?php
session_start();

require_once 'controllerResto.php';
require_once 'header.inc.php';
$_SESSION['ID_resto'] = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container-fluid">
<div class="row">
<div class="col-6 ps-5 mt-5 arf1 animate__animated animate__bounceInLeft">
<div id="titrereserv">
<h2 class="animate__animated animate__flipInX"> Reservation </h2>
<img src="./barre.svg">
</div>
<form  method="POST" action="controllereservation.php" enctype="multipart/form-data"> 
  <div class="">
    <label for="validationDefault01" class="module">Nom</label>
    <input type="text" class="champ" id="validationDefault01"  name="nameReserv" required>
  </div>
  <div class="">
    <label for="validationDefault01" class="module">Date</label>
    <input type="date" class="champ" id="validationDefault02"  name="dateReserv" required>
  </div>
  <div class="">
    <label for="validationDefault02" class="module">Heure</label>
    <input type="time" class="champ" id="validationDefault03" name="heureReserv" required>
  </div>
 
  <div class="">
    <label for="validationDefault05" class="module">Nombre de personne</label>
    <input type="number" class="champ" id="validationDefault05" required name="nombreReserv"><br>
    <button type="submit" class="bouttonplein"name="submit">Réserver</button>
        </form>
  </div>
      </div>
      
       
       
        <div class="col-1 animate__animated animate__bounceInRight">
        <div id="imgreserv">
        <img src="./imgreserva.png"style="width:708px;">
        </div></div>
        
        <?php

require_once 'footer.inc.php';

?>
</body>
</html>

