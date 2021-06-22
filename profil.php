<?php
require_once 'controllerLogin.php';
require_once 'header.inc.php';
require_once 'reserv.php';
require_once 'DAO.php';


$users = $_SESSION['obj_user'];
$booking = new Reserv();
$bookis =$booking->affichereserv($dsn, $user, $password, $logs);

//
//print $status;
?>

<h1 style="margin-top:3%;" id="profilh1"class="animate__animated animate__bounceInLeft animate__flipInX"> Profil </h1>
<section id="navprofil"class="animate__animated animate__bounceInLeft">

<div id="orange">
    <div id="imgprofil">
        
    <img src="<?= $users["pictureUser"]?>" class="img-modify"></a>

</div>
<p class="maj"><?= $users["nameUser"]?></p>
<p class="maj"><?= $users["prenomUser"]?></p>
<p class="min"><?= $users["mailUser"]?></p>
<p style="font-size:18px;"> Edit profile</p>



</div>
<div id="resoprofil">
    <ul id="ulprofil">
        <li class="resow shake-slow"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></li>
        <li class="resow shake-slow"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg></li>
        <li class="resow shake-slow"> <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg></li>
</ul>
</div>
</section>


          


<section id="contentprofil"class="animate__animated animate__bounceInRight">

<div id="reservv"style="margin-bottom:5%;">
<h2> Reservation </h2>
<img src="./barre.svg">
</div>
<div id="listreserv">
<div class="reserv">
    <img class="iconeminireserv" src="./a.jpeg">
    <h3>Titre</h3>
    
    <input class="bouttonvide" type="submit" value="Voir">
</div>
    <div class="reserv">
    <img class="iconeminireserv"src="./otacos.jpeg">
    <h3>Titre</h3>
    
    <input class="bouttonvide"type="submit" value="Voir">
</div>
    <div class="reserv">
    <img class="iconeminireserv"src="./bk.jpeg">
    <h3>Titre</h3>
    
    <input class="bouttonvide" type="submit" value="Voir">
</div></div>



<div id="imgrec">
<h2> Image recente </h2>
<img src="./barre.svg"style="margin-bottom:5%;">
</div>

<div class="imgprofilrecent"><img src="https://images.unsplash.com/photo-1469594292607-7bd90f8d3ba4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>


</section>


<!-- 
<div class="row py-5 px-4">
    <div class="col-md-5 mx-auto">
        
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">
                    <div class="col-lg-6 profile mr-3"><img src="<?= $users["pictureUser"]?>" class="img-fluid img-thumbnail">Edit profile</a></div>
                    
                </div>
            </div>
         
            <div class="px-4 py-3">
                <h5 class="mb-0">Mes infos</h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0"><?= $users["nameUser"]?></p>
                    <p class="font-italic mb-0"><?= $users["prenomUser"]?></p>
                    <p class="font-italic mb-0"><?= $users["mailUser"]?></p>
                </div>
            </div>
            <div class="px-4 py-3">
                <h5 class="mb-0">Mes réservations</h5>
                <div class="p-4 rounded shadow-sm bg-light">
                <?php foreach ($bookis as $booki ): ?>

<?= $booki["nameReservation"] ?>

<?php endforeach; ?>
                </div>
            </div>
            <div class="py-4 px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-0">Recent photos</h5><a href="#" class="btn btn-link text-muted">Show all</a>
                </div>
                <!-- Reservations -->
                
            </div>
        </div>
    </div>
</div>

<?php

require_once 'footer.inc.php';
?>