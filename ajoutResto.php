<?php
require_once 'controllerLogin.php';
require_once 'header.inc.php';
?>

<section id="addresto">

  <img src="./ajoutresto.png"style="width:50%;">


 
    
      <div id="moveajout">
        <div id="titreajout">
          <h2> Ajouter un restaurant </h2>
          <img src="./barre2.svg"style="margin-bottom:10%;width:70%;"> </div>
<form class="postt" method="POST" action="controllerResto.php">

    <label for="validationDefault01" class="module">Name</label>
    <input type="text" class="champ" id="validationDefault01"  name="name" required>

 <br>
    <label for="validationDefault02" class="module">Address</label>
    <input type="text" class="champ" id="validationDefault02" name="address" required>

    <br><br>
    <label for="formFile" class="form-">Default </label>
    <input class="form-control" type="file" id="formFile"name="picture">
    <br><br>
    <label for="validationDefault04" class="champ-">Type</label>
    <select class="form-select" id="validationDefault04" required name="type">
      <option selected disabled value="Italien">Italien</option>
      <option value="grec">Grec</option>
      <option value="fastFood">Fast Food</option>
      <option value="pizzeria">Pizzeria</option>
      <option value="asiatique">Asiatique</option>
    </select>
<br>
    <label for="validationDefault05" class="module">Description</label>
    <input type="text" class="champ" id="validationDefault05" required name="description">
    <br><br>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        J'accepte les conditions générales.
      </label></div>
 


    <button class="bouttonplein" type="submit" name="submit">Ajouter</button>

</form>   

</section>
<?php

require_once 'footer.inc.php';
?>
