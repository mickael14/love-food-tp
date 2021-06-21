<?php
session_start();
require_once "reserv.php";
require_once "DAO.php";

var_dump($_SESSION['obj_user']);
var_dump($_SESSION['ID_resto']);

var_dump($_POST['submit']);
if(isset($_POST['submit'])){
 
    $nameReserv = $_POST['nameReserv'];
    echo 'nameok';
    $idResto = intval($_SESSION['ID_resto']);
    $idUser = intval($_SESSION['obj_user']['ID_user']);
    $dateReserv = $_POST['dateReserv'];
    $heureReserv = $_POST['heureReserv'];
    $nombreReserv = $_POST['nombreReserv'];
    $dateReserv = $_POST['dateReserv'];
    
  echo 'submitgood ';
  
    

    $user1 = new Reserv();

    $user1->setNameReserv($nameReserv);
    $user1->setDateReserv($dateReserv);
    $user1->setHeureReserv($heureReserv);
    $user1->setNombreReserv($nombreReserv);
    $user1->setIdUser($idUser);
    $user1->setIdResto($idResto);


    echo $user1->getNameReserv();
    echo $user1->getDateReserv();
    echo $user1->getHeureReserv();
    echo $user1->getNombreReserv();
    echo $user1->getIdUser();
    echo $user1->getIdResto();

    $user1->envoisDonnees($dsn, $user, $password);
    $user1->affichereserv($dsn, $user, $password);



}
?>