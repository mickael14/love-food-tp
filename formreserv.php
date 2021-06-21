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
<form class="row g-3" method="POST" action="controllereservation.php" enctype="multipart/form-data"> 
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Nom</label>
    <input type="text" class="form-control" id="validationDefault01"  name="nameReserv" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Date</label>
    <input type="date" class="form-control" id="validationDefault02"  name="dateReserv" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Heure</label>
    <input type="time" class="form-control" id="validationDefault03" name="heureReserv" required>
  </div>
 
  <div class="col-md-4">
    <label for="validationDefault05" class="form-label">Nombre de personne</label>
    <input type="number" class="form-control" id="validationDefault05" required name="nombreReserv">
  </div>
      </div>

        <button type="button" class="btn btn-secondary aa" >Fermer</button>
        <button type="submit" class="btn btn-primary"name="submit">Réserver</button>
        </form>
</body>
</html>

