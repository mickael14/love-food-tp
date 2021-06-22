<?php
require_once 'controllerResto.php';
 require_once 'header.inc.php';
 
 $restos = $_SESSION['AllResto'];
?>

<main>

<section id="listresto">
<div  class="animate__animated animate__flipInX"id="titreresto">
  <h2> Liste des restaurants </h2>
  <img src="./barre2.svg"style="width:24%;">
</div>
<?php foreach ($restos  as $resto ): ?>
<div class="container-fluid">
<div class="row mt-5">
<div class="restox col-6 animate__animated animate__bounceInLeft ">
  <div class="imgrestox" >
  <img class="imgey" src="<?= $resto["pictureResto"]?>" style="width:15%;"alt="">
</div>
    <div class="textrestox">
    <h1><?= $resto["nameResto"]?></h1>
    <p><?= $resto["typeResto"]?></p>
    <p><?= $resto["adressResto"]?></p>
    <p><?= $resto["descriptionResto"]?></p>
    
    <a class="bouttonplein2" href="formreserv.php?id=<?=$resto["ID_resto"]?>">Réserver maintenant</a>
</div></div>
<iframe  class="ifrm1 col-5"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40723.88153462581!2d3.4791621353573916!3d50.3620307424691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2edc768b409b3%3A0xb5f4dcec0bfdf494!2s59300%20Valenciennes!5e0!3m2!1sfr!2sfr!4v1624235617041!5m2!1sfr!2sfr" width="800" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div></div></div>
<div id="barre"></div>
</div>


     
        
                  
                  
      
      
        <?php endforeach; ?>
      </div>
    </div>
  </div>
 
</section>
        <script> 
$(document).ready(function(){
  $(".bb").click(function(){
    $("#col1").animate({
      height: 'toggle'
    });
  });
});
</script> 
<script> 
$(document).ready(function(){
  $(".aa").click(function(){
    $("#col1").animate({
      height: 'toggle'
    });
  });
});
</script> 
      </div>
    </div>
  </div>
</div>
</main>

<?php

require_once 'footer.inc.php';

?>